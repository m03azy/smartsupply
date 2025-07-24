<?php

namespace App\Livewire\Settings;

use Livewire\Component;

class ThemeManager extends Component
{
    public $theme = 'light';

    public function mount()
    {
        $this->theme = session('theme', 'light');
    }

    public function setTheme($theme)
    {
        $this->theme = $theme;
        session(['theme' => $theme]);
        $this->dispatch('theme-changed', ['theme' => $theme]);
    }

    public function render()
    {
        return view('livewire.settings.theme-manager');
    }
}
