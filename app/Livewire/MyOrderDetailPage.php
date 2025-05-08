<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;
use Illuminate\Support\Carbon;

class MyOrderDetailPage extends Component
{
    public $order;
    public $currentDate;

    public function mount(Order $order)
    {
        $this->order = $order->load(['items.product', 'address']);
        $this->currentDate = Carbon::now('Asia/Ho_Chi_Minh');
    }

    public function render()
    {
        return view('livewire.my-order-detail-page');
    }
}
