<?php

namespace App\Livewire\Product;


use Livewire\Component;
use App\Models\Product;

class Index extends Component
{
    public function render()
    {
        $products = Product::all();
        return view('livewire.product.index', compact('products'));
    }
}
