<?php

use function Livewire\Volt\{state};

//

?>

<div class="flex gap-4">
    <div class="p-2 border">
        <a href="{{ route('login') }}" wire:navigate>Login</a>
    </div>
    <div class="p-2 border">
        <a href="{{ route('home') }}" wire:navigate>Register</a>
    </div>
    @auth
        <form method="POST" action="{{ route('logout') }}" class="p-2 border">
            @csrf
            <flux:menu.item as="button" type="submit" class="w-full h-full">
                {{ __('Log Out') }}
            </flux:menu.item>
        </form>
    @endauth
</div>
