
@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto py-10">
    <div class="mb-8 text-center">
        <h1 class="text-3xl font-extrabold text-indigo-700 mb-2">Factory Dashboard</h1>
        <p class="text-gray-600">Welcome, {{ Auth::user()->name ?? 'Factory User' }}!</p>
        <p class="text-sm text-gray-400">Role: <span class="font-semibold">Factory</span></p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-4xl mb-2">📦</span>
            <h2 class="text-xl font-bold mb-1">Your Products</h2>
            <p class="text-gray-500 text-center mb-3">Manage and create products for retailers.</p>
            <a href="{{ route('products.index') }}" class="text-indigo-600 hover:underline">View Products</a>
        </div>

        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-4xl mb-2">📊</span>
            <h2 class="text-xl font-bold mb-1">Sales Reports</h2>
            <p class="text-gray-500 text-center mb-3">Analyze your sales performance.</p>
            <a href="" class="text-indigo-600 hover:underline">View Reports</a>
        </div>

        <div class="bg-white rounded-lg shadow p-6 flex flex-col items-center">
            <span class="text-4xl mb-2">⚙️</span>
            <h2 class="text-xl font-bold mb-1">Settings</h2>
            <p class="text-gray-500 text-center mb-3">Configure your factory settings.</p>
            <a href="" class="text-indigo-600 hover:underline">View Settings</a>
        </div>
    </div>

    <div>
        <h2 class="text-2xl font-bold mb-4">Recent Activities</h2>
        <ul class="bg-white rounded-lg shadow divide-y divide-gray-200">
            @foreach($activities as $activity)
                <li class="p-4 flex justify-between items-center">
                    <div>
                        <p class="text-gray-800 font-semibold">{{ $activity->description }}</p>
                        <p class="text-sm text-gray-500">{{ $activity->created_at->diffForHumans() }}</p>
                    </div>
                    <a href="{{ route('activities.show', $activity) }}" class="text-indigo-600 hover:underline">View</a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
