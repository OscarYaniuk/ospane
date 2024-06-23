@props(['breadcrumbs' => []])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Fonts awesome -->
    <script src="https://kit.fontawesome.com/23e7d0a905.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

</html>

<body x-data="{ menu: false, }" :class="{ 'overflow-hidden': menu, }" class="sm:overflow-auto">


    @include('layouts.includes.learner.navigation')
    @include('layouts.includes.learner.sidebar')



    <div class="sm:ml-64">
        <div class=" mt-14">
            @include('layouts.includes.learner.breadcrumb')
            <div class="mt-2 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 ">

                {{ $slot }}
            </div>
        </div>
    </div>

    <div x-cloak x-show="menu" x-on:click="menu = false"
        class="fixed inset-0 z-30 bg-gray-900 bg-opacity-50 sm:hidden"></div>

    @stack('modals')

    @livewireScripts
</body>

</html>
