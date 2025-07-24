@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6 text-indigo-700">Create New Product</h1>
    <form wire:submit.prevent="createProduct" class="space-y-6">
        <div>
            <label for="name" class="block font-semibold mb-1">Product Name</label>
            <input wire:model.defer="name" id="name" type="text" class="w-full border rounded px-3 py-2" required />
            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="description" class="block font-semibold mb-1">Description</label>
            <textarea wire:model.defer="description" id="description" class="w-full border rounded px-3 py-2"></textarea>
            @error('description') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
          <div>
            <label for="quantity" class="block font-semibold mb-1">quantity</label>
            <input wire:model.defer="price" id="price" type="number" step="0.01" class="w-full border rounded px-3 py-2" required />
            @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="price" class="block font-semibold mb-1">Price</label>
            <input wire:model.defer="price" id="price" type="number" step="0.01" class="w-full border rounded px-3 py-2" required />
            @error('price') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Create Product</button>
        @if (session()->has('success'))
            <div class="mb-4 p-3 rounded bg-green-100 text-green-800">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="mb-4 p-3 rounded bg-red-100 text-red-800">
                {{ session('error') }}
            </div>
        @endif
    </form>
</div>
@endsection
