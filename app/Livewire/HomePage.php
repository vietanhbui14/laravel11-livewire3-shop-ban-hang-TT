<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Trang chủ - VA Shop')]

class HomePage extends Component
{
    public $title = 'Trang chủ - VA Shop';

    public function render()
    {
        $brands = Brand::where('is_active', 1)->get();
        $categories = Category::where('is_active', 1)->get();

        return view('livewire.home-page', compact('brands', 'categories'));
    }
}
