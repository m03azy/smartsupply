@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-10">
    <h1 class="text-2xl font-bold mb-6 text-indigo-700">Edit Profile</h1>
    <form wire:submit.prevent="updateProfile" class="space-y-6">
        <div>
            <label for="name" class="block font-semibold mb-1">Name</label>
            <input wire:model.defer="name" id="name" type="text" class="w-full border rounded px-3 py-2" required />
            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="email" class="block font-semibold mb-1">Email</label>
            <input wire:model.defer="email" id="email" type="email" class="w-full border rounded px-3 py-2" required />
            @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="phone" class="block font-semibold mb-1">Phone</label>
            <input wire:model.defer="phone" id="phone" type="text" class="w-full border rounded px-3 py-2" />
            @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password" class="block font-semibold mb-1">New Password</label>
            <input wire:model.defer="password" id="password" type="password" class="w-full border rounded px-3 py-2" />
            @error('password') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="password_confirmation" class="block font-semibold mb-1">Confirm Password</label>
            <input wire:model.defer="password_confirmation" id="password_confirmation" type="password" class="w-full border rounded px-3 py-2" />
        </div>
        <button type="submit" class="px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Update Profile</button>
        @if (session()->has('success'))
            <div class="text-green-600 mt-4">{{ session('success') }}</div>
        @endif
    </form>
</div>
@endsection
