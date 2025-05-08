<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Danh mục sản phẩm - VA Shop')]
class CategoriesPage extends Component
{
    public $title = 'Danh mục sản phẩm - VA Shop';

    public function render()
    {
        $categories = Category::where('is_active', 1)->get();
        return view('livewire.categories-page', compact('categories'));
    }
}
