<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth; // Import the Auth facade

class Home extends Component
{
    public function mount()
    {
        // Check if the user is not authenticated
        if (!Auth::check()) {
            // Redirect to the login page
            return redirect()->route('login');
        }
    }

    public function render()
    {
        // Render the home view if the user is authenticated
        return view('livewire.home')->layout('components.layouts.app');
    }
}
