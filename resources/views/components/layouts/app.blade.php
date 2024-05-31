@props(['title' => config('app.name'), 'tenant' => tenant('id')])

<x-layouts.page title="{{ $title }} | {{ $tenant }}">
    <div x-data="{ open: false }" @keydown.window.escape="open = false">
        <livewire:tenant.navigation />

        <div class="lg:pl-72">
            <div class="sticky top-0 z-40 flex h-16 shrink-0 items-center gap-x-4 border-b border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-900 px-4 shadow-sm sm:gap-x-6 sm:px-6 lg:px-8">
                <button type="button" class="-m-2.5 p-2.5 text-gray-700 lg:hidden" @click="open = true">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </button>

                <div class="h-6 w-px bg-slate-200 dark:bg-slate-700 lg:hidden" aria-hidden="true"></div>

                <livewire:tenant.header />
            </div>

            <main id="content" aria-labelledby="content">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layouts.page>
