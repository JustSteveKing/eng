@props(['title' => config('app.name')])

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-slate-50 dark:bg-slate-900">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    @vite(['resources/css/app.css','resources/js/app.js'])
    <livewire:styles />
</head>
<body class="h-full font-sans antialiased text-slate-900 dark:text-slate-50">
    {{ $slot }}
    <livewire:scripts />
</body>
</html>
