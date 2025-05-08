<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use App\Models\Order;
use App\Models\OrderItem;
use Livewire\Component;
use Livewire\Attributes\Rule;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CheckoutPage extends Component
{
    #[Rule('required')]
    public $first_name = '';
    #[Rule('required')]
    public $last_name = '';
    #[Rule('required')]
    public $address = '';
    #[Rule('required')]
    public $city = '';
    #[Rule('required')]
    public $phone = '';
    #[Rule('required|email')]
    public $email = '';
    #[Rule('required')]
    public $payment_method = 'cod'; // 'cod' hoặc 'online'

    public $cart_items = [];
    public $grand_total = 0;
    public $tax = 0;
    public $shipping = 0;

    public function mount()
    {
        $this->loadCart();
    }

    public function loadCart()
    {
        $this->cart_items = CartManagement::getCartItemsFromCookie();
        $this->grand_total = CartManagement::calculateGrandTotal($this->cart_items);
        $this->tax = round($this->grand_total * 0.1, 2);
        $this->shipping = 0;
    }

    public function placeOrder()
    {
        try {
            // Validate input
            $this->validate([
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'phone' => 'required|string|max:20',
                'address' => 'required|string',
                'city' => 'required|string|max:255',
                'email' => 'required|email',
                'payment_method' => 'required|in:cod,bank'
            ]);

            if (empty($this->cart_items)) {
                $this->addError('cart', 'Giỏ hàng trống!');
                return;
            }

            DB::beginTransaction();
            try {
                // Tạo đơn hàng
                $order = Order::create([
                    'user_id' => auth()->id() ?? 1, // Fallback nếu chưa login
                    'order_number' => 'ORD-' . strtoupper(Str::random(8)),
                    'payment_method' => $this->payment_method,
                    'payment_status' => 'pending',
                    'status' => 'new',
                    'grand_total' => $this->grand_total + $this->tax + $this->shipping,
                    'currency' => 'VND',
                ]);

                // Lưu địa chỉ giao hàng
                $order->address()->create([
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'phone' => $this->phone,
                    'street_address' => $this->address,
                    'city' => $this->city,
                ]);

                // Lưu chi tiết đơn hàng
                foreach ($this->cart_items as $item) {
                    OrderItem::create([
                        'order_id' => $order->id,
                        'product_id' => $item['product_id'],
                        'quantity' => $item['quantity'],
                        'unit_amount' => $item['unit_amount'],
                        'total_amount' => $item['total_amount']
                    ]);
                }

                DB::commit();

                // Chỉ lưu order ID vào session
                session(['order_id' => $order->id]);

                return redirect()->to('/success');
            } catch (\Exception $e) {
                DB::rollBack();
                $this->addError('checkout', 'Đặt hàng thất bại! ' . $e->getMessage());
                \Log::error('Checkout error: ' . $e->getMessage());
            }
        } catch (\Exception $e) {
            $this->addError('checkout', 'Vui lòng kiểm tra lại thông tin!');
            \Log::error('Validation error: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.checkout-page');
    }
}
