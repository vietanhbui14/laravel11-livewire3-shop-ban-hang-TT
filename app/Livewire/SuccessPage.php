<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order;

class SuccessPage extends Component
{
    public $order;
    public $orderFound = true;

    public function mount()
    {
        $orderId = session('order_id');
        if ($orderId) {
            $this->order = Order::with(['items.product', 'address'])->find($orderId);
            if (!$this->order) {
                $this->orderFound = false;
            }
        } else {
            $this->orderFound = false;
        }
    }

    public function render()
    {
        return view('livewire.success-page', [
            'order' => $this->order,
            'orderFound' => $this->orderFound,
        ]);
    }
}
