<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body class="min-h-screen antialiased flex flex-col bg-white dark:bg-zinc-800">
    <livewire:admin.partials.header/>
    <div class="flex-auto">
        <flux:main container="true">
            {{ $slot }}
        </flux:main>
    </div>
    @fluxScripts
    </body>
</html>
