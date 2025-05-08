<?php

namespace App\Livewire;

use App\Helpers\CartManagement;
use Livewire\Component;

class CartPage extends Component
{
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
        $this->tax = round($this->grand_total * 0.1, 2); // 10% tax demo
        $this->shipping = 0; // Có thể tính động nếu muốn
    }

    public function incrementQty($product_id)
    {
        CartManagement::incrementQuantityToCartItem($product_id);
        $this->loadCart();
    }

    public function decrementQty($product_id)
    {
        CartManagement::decrementQuantityToCartItem($product_id);
        $this->loadCart();
    }

    public function removeItem($product_id)
    {
        CartManagement::removeCartItems($product_id);
        $this->loadCart();
    }

    public function placeOrder()
    {
        // Nếu đang ở trang giỏ hàng, chuyển sang trang checkout để nhập thông tin giao hàng
        return $this->redirect('/checkout', navigate: true);
    }

    public function render()
    {
        return view('livewire.cart-page');
    }
}
