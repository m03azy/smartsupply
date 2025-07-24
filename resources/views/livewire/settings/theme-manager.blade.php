<div>
    <h2 class="text-lg font-bold mb-4">Theme Settings</h2>
    <div class="flex gap-4">
        <button wire:click="setTheme('light')" class="px-4 py-2 rounded {{ $theme === 'light' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">Light</button>
        <button wire:click="setTheme('dark')" class="px-4 py-2 rounded {{ $theme === 'dark' ? 'bg-blue-500 text-white' : 'bg-gray-200' }}">Dark</button>
    </div>
    <p class="mt-4">Current theme: <span class="font-semibold">{{ ucfirst($theme) }}</span></p>
</div>

@push('scripts')
<script>
    window.addEventListener('theme-changed', event => {
        if(event.detail.theme === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    });
    // On page load, set theme from session
    document.addEventListener('DOMContentLoaded', function() {
        @if(session('theme', 'light') === 'dark')
            document.documentElement.classList.add('dark');
        @else
            document.documentElement.classList.remove('dark');
        @endif
    });
</script>
@endpush
