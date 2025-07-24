<?php

namespace App\Livewire\Factory;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductCreate extends Component
{
    public $name;
    public $description;
    public $price;
    public $quantity;

    public function createProduct()
    {
        try {
            $validated = $this->validate([
                'name' => 'required|string|max:255',
                'description' => 'nullable|string',
                'price' => 'required|numeric|min:0',
                'quantity'=> 'required|integer|min:0',
            ]);

            $product = new Product();
            $product->name = $validated['name'];
            $product->description = $validated['description'] ?? null;
            $product->price = $validated['price'];
            $product->quantity = $validated['quantity'];
            $product->user_id = Auth::id();
            $product->save();

            session()->flash('success', 'Product created successfully!');
            $this->reset('name', 'description', 'price', 'quantity');
        } catch (\Exception $e) {
            session()->flash('error', 'Failed to create product: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.factory.product-create');
    }
}
