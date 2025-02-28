<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? 'Название страницы'}} - {{config('app.name')}}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <style type="text/tailwinds.css">
        @theme {
            --color-main: yellow;
        }
    </style>
</head>
<body class="text-base text-grey-950 font-normal bg-gray-200 max-w-screen">
    @include('layouts.partials.header')
    {{ $slot }}
    @include('layouts.partials.footer')
</body>
</html>
