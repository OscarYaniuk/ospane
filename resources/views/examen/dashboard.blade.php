@php
    $currentUrl = Request::fullUrl();
@endphp

<x-learner-layout :breadcrumbs="[
    [
        'title' => 'Home',
        'url' => 'home',
        'active' => false,
    ],
    [
        'title' => 'Dashboard',
        'url' => 'Dashboard',
        'active' => false,
    ],
    [
        'title' => 'Dash',
        'url' => 'Dash',
        'active' => false,
    ],
    [
        'title' => 'Board',
        'active' => true,
    ],
]">

    <div class="p-6 bg-gray-100" x-data="{ activeOption: null }">
        <div class="flex items-start justify-between pb-4 mb-4 border border-b border-red-500">
            <div class="border border-blue-500">
                <h1 class="mb-2 text-2xl font-bold">Examen para aprender las primeras 10 preguntas de Administrativo C1
                    del Ayuntamiento de Santa Cruz de Tenerife.</h1>
                <p class="mb-2 text-gray-500">Administrativo C1</p>
            </div>
            <div class="flex flex-col gap-2 border border-green-500">
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                    </div>
                    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Mezclar preguntas</span>
                </label>
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div
                        class="relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600">
                    </div>
                    <span class="text-sm font-medium text-gray-900 ms-3 dark:text-gray-300">Mezclar respuestas</span>
                </label>
            </div>
        </div>
    </div>

    @if (Str::startsWith($currentUrl, url('/learner/sc-')))
        @livewire('examen.examen', ['questions' => $questions, 'offset' => $offset])
    @endif
</x-learner-layout>

