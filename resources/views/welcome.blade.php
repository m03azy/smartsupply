@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto py-12">
    <div class="text-center mb-10">
        <h1 class="text-4xl font-extrabold mb-2 text-indigo-700">Welcome to SmartSupply</h1>
        <p class="text-lg text-gray-600">A modern supply chain management platform for factories, retailers, and admins.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-12">
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-3xl mb-2">🏭</span>
            <h2 class="text-xl font-bold mb-1">Factory</h2>
            <p class="text-gray-500 text-center mb-3">Manage products, deliveries, and transactions efficiently.</p>
            <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Factory Login</a>
        </div>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-3xl mb-2">🛒</span>
            <h2 class="text-xl font-bold mb-1">Retailer</h2>
            <p class="text-gray-500 text-center mb-3">Order products, track deliveries, and manage your profile.</p>
            <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Retailer Login</a>
        </div>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-3xl mb-2">👤</span>
            <h2 class="text-xl font-bold mb-1">Admin</h2>
            <p class="text-gray-500 text-center mb-3">Oversee the platform, users, and system settings.</p>
            <a href="{{ route('login') }}" class="text-indigo-600 hover:underline">Admin Login</a>
        </div>
    </div>
    <div class="text-center mt-8">
        <a href="{{ route('register') }}" class="inline-block px-6 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700 font-semibold">Get Started - Register</a>
    </div>
    <div class="mt-12 text-center text-gray-400 text-xs">
        &copy; {{ date('Y') }} SmartSupply. All rights reserved.
    </div>
</div>
@endsection
