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
        <div class="pb-4 mb-4 border-b">
            <h1 class="mb-2 text-2xl font-bold">Test Prueba Gratis 1 - Acceso a la carrera judicial y fiscal [30
                preguntas]</h1>
            <p class="mb-2 text-gray-500">Personalizado</p>
            <p class="text-gray-600">Acceso a la Carrera Judicial y Fiscal</p>
        </div>

        <div class="p-3 mx-auto bg-white rounded-lg shadow-md" style="max-width: 70rem;">
            <div class="">
                <div class="flex items-center mb-4">
                    <span class="mr-2 font-bold text-yellow-800 rounded">01.</span>
                    <span class="font-semibold text-gray-800">En el procedimiento legislativo, el Senado:</span>
                </div>

                <div class="ml-2">
                    <div class="">
                        <div class="mb-4 overflow-hidden rounded-lg">
                            <label @click="activeOption = 'A'"
                                :class="['flex items-center p-4 rounded-lg cursor-pointer active:border', activeOption === 'A' ? 'bg-blue-100 border-2 border-blue-400' : 'hover:bg-gray-100']">
                                <span
                                    class="flex items-center justify-center w-6 h-6 font-bold text-gray-700 border-2 border-gray-300 rounded-full"
                                    :class="{ 'bg-blue-100 border-blue-400': activeOption === 'A' }">A</span>
                                <span class="ml-3 font-medium text-gray-800">Puede introducir enmiendas por mayoría simple, y vetos por mayoría absoluta</span>
                            </label>
                            <hr class="bg-gray-200 dark:bg-gray-700">
                        </div>


                        <div class="mb-4 overflow-hidden rounded-lg">
                            <label @click="activeOption = 'B'"
                            :class="['flex items-center p-4 rounded-lg cursor-pointer active:border', activeOption === 'B' ? 'bg-blue-100 border-2 border-blue-400' : 'hover:bg-gray-100']">
                            <span
                                class="flex items-center justify-center w-6 h-6 font-bold text-gray-700 border-2 border-gray-300 rounded-full"
                                :class="{ 'bg-blue-100 border-blue-400': activeOption === 'B' }">B</span>
                                <span class="ml-3 font-medium text-gray-800">Sólo puede introducir enmiendas a los
                                    textos legislativos aprobados por el Congreso de los Diputados, pero no vetos</span>
                            </label>
                            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                        </div>

                        <div class="mb-4 overflow-hidden rounded-lg">
                            <label @click="activeOption = 'C'"
                            :class="['flex items-center p-4 rounded-lg cursor-pointer active:border', activeOption === 'C' ? 'bg-blue-100 border-2 border-blue-400' : 'hover:bg-gray-100']">
                            <span
                                class="flex items-center justify-center w-6 h-6 font-bold text-gray-700 border-2 border-gray-300 rounded-full"
                                :class="{ 'bg-blue-100 border-blue-400': activeOption === 'C' }">C</span>
                                <span class="ml-3 font-medium text-gray-800">Puede introducir, tanto enmiendas como
                                    vetos, pero siempre que lo haga por mayoría absoluta en ambos casos</span>
                            </label>
                            <hr class="h-px bg-gray-200 border-0 dark:bg-gray-700">
                        </div>
                    </div>


                </div>

                <p class="p-2 text-xs text-gray-500">Tema 2 / Derecho Constitucional y de la Unión Europea</p>
            </div>
        </div>
    </div>




</x-learner-layout>
