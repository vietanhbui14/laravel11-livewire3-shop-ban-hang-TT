<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class OrderStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Đơn hàng mới', Order::query()->where('status', 'new')->count()),

            Stat::make('Đơn hàng đã giao', Order::query()->where('status', 'delivered')->count()),

            Stat::make('Đơn hàng đang xử lý', Order::query()->where('status', 'processing')->count()),

            Stat::make('Đơn hàng đã gửi', Order::query()->where('status', 'shipped')->count()),

            Stat::make('Đơn hàng đã hủy', Order::query()->where('status', 'cancelled')->count()),

            Stat::make('Giá trung bình', Number::currency(Order::query()->avg('grand_total') ?? 0, 'VND')),

        ];
    }
}
