<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Đơn hàng của tôi - VA Shop')]
class MyOrdersPage extends Component
{
    public function render()
    {
        $orders = Order::with(['items.product', 'address'])
            ->where('user_id', auth()->id())
            ->latest()
            ->get();

        return view('livewire.my-orders-page', [
            'orders' => $orders
        ]);
    }
}
