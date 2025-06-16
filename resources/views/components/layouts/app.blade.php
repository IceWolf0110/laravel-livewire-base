<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('partials.head')
    <body class="min-h-screen flex flex-col antialiased bg-white dark:bg-zinc-800">
        <livewire:web.partials.header/>
        <div class="flex-auto">
            <flux:main container="true">
                {{ $slot }}
            </flux:main>
        </div>
        <livewire:web.partials.footer/>
        @fluxScripts
    </body>
</html>
