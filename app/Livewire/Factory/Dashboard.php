<?php

namespace App\Livewire\Factory;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Dashboard extends Component
{
    public function render()
    {
        // Example: Fetch recent activities for the factory user
        $activities = []; // Default empty array

        // If you have an Activity model, fetch activities like this:
        // $activities = \App\Models\Activity::where('user_id', Auth::id())->latest()->take(5)->get();

        return view('livewire.factory.dashboard', [
            'activities' => $activities
        ]);
    }
}
