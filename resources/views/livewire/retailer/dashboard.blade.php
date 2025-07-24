@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto py-10">
    <div class="mb-8 text-center">
        <h1 class="text-3xl font-extrabold text-indigo-700 mb-2">Retailer Dashboard</h1>
        <p class="text-gray-600">Overview of your orders, deliveries, and profile.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-3xl mb-2">🛒</span>
            <h2 class="text-lg font-bold mb-1">Orders</h2>
            <p class="text-gray-500 text-center mb-3">Place and manage your product orders.</p>
            <a href="#" class="text-indigo-600 hover:underline mb-2">View Orders</a>
            <button class="px-4 py-2 bg-indigo-500 text-white rounded hover:bg-indigo-700 mb-1">Place New Order</button>
            <button class="px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">Order History</button>
        </div>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-3xl mb-2">🚚</span>
            <h2 class="text-lg font-bold mb-1">Deliveries</h2>
            <p class="text-gray-500 text-center mb-3">Track your incoming deliveries.</p>
            <a href="#" class="text-indigo-600 hover:underline mb-2">Track Deliveries</a>
            <button class="px-4 py-2 bg-yellow-500 text-white rounded hover:bg-yellow-600 mb-1">Delivery Status</button>
            <button class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">Delivery History</button>
        </div>
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-3xl mb-2">👤</span>
            <h2 class="text-lg font-bold mb-1">Profile</h2>
            <p class="text-gray-500 text-center mb-3">Update your account and contact information.</p>
            <a href="#" class="text-indigo-600 hover:underline mb-2">Edit Profile</a>
            <button class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-700 mb-1">Update Info</button>
            <button class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">Change Password</button>
        </div>
    </div>
    <div class="bg-indigo-50 rounded-lg p-6 mt-8 text-center">
        <h3 class="text-lg font-semibold mb-2">Quick Actions</h3>
        <div class="flex flex-col md:flex-row justify-center gap-4">
            <a href="#" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Place New Order</a>
            <a href="#" class="px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">Contact Support</a>
        </div>
    </div>
</div>
@endsection
