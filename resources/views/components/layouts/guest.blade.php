@props(['title' => config('app.name')])

<x-layouts.page title="{{ $title }}">
    <div class="flex min-h-full flex-1 flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=500" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-white">{{ $title }}</h2>
        </div>

        {{ $slot }}
    </div>
</x-layouts.page>
