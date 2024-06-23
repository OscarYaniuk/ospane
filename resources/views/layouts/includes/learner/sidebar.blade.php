@php
    $menuItems = [];
    // Agregar el primer elemento "Total"
    $menuItems[] = [
        'name' => 'Total',
        'route' => "/learner/sc-00",
        'icon' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>',
        'active' => false,
    ];

    // Generar los elementos del menú del 1 al 100 en incrementos de 10
    for ($i = 1; $i <= 10; $i++) {
        $start = ($i - 1) * 10 + 1;
        $end = $i * 10;
        $routeNumber = str_pad($i * 10, 2, '0', STR_PAD_LEFT);
        $menuItems[] = [
            'name' => "De $start a $end",
            'route' => "/learner/sc-$routeNumber",
            'icon' => '<svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>',
            'active' => false,
        ];
    }

    $links = [
        [
            'name' => 'Dashboard',
            'route' => route('learner.dashboard'),
            'icon' => '<svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 18">
                  <path d="M6.143 0H1.857A1.857 1.857 0 0 0 0 1.857v4.286C0 7.169.831 8 1.857 8h4.286A1.857 1.857 0 0 0 8 6.143V1.857A1.857 1.857 0 0 0 6.143 0Zm10 0h-4.286A1.857 1.857 0 0 0 10 1.857v4.286C10 7.169 10.831 8 11.857 8h4.286A1.857 1.857 0 0 0 18 6.143V1.857A1.857 1.857 0 0 0 16.143 0Zm-10 10H1.857A1.857 1.857 0 0 0 0 11.857v4.286C0 17.169.831 18 1.857 18h4.286A1.857 1.857 0 0 0 8 16.143v-4.286A1.857 1.857 0 0 0 6.143 10Zm10 0h-4.286A1.857 1.857 0 0 0 10 11.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 18 16.143v-4.286A1.857 1.857 0 0 0 16.143 10Z"/>
               </svg>',
            'active' => request()->routeIs('learner.dashboard'),
        ],
        [
            'divider' => true,
        ],
        [
            'name' => 'Preguntas S/C C1',
            'route' => '#',
            'icon' => '<svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                  <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z"/>
               </svg>',
            'active' => false,
            'submenu' => $menuItems,
        ],
    ];
@endphp


<aside id="logo-sidebar"
    class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
    :class="{ '-transform-none': menu, '-translate-x-full': !menu }" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            @foreach ($links as $link)
                @if (isset($link['header']))
                    <li>
                        <h3 class="px-3 py-2 font-semibold text-gray-500 uppercase dark:text-gray-400">
                            {{ $link['header'] }}
                        </h3>
                    </li>
                @else
                    @if (isset($link['divider']))
                        <ul class="pt-4 mt-4 space-y-2 font-medium border-t border-gray-200 dark:border-gray-700">
                        </ul>
                    @else
                        <li x-data="{ open: {{ $link['active'] ? 'true' : 'false' }} }" class="space-y-1">
                            <a @click="open = !open" href="{{ $link['route'] }}"
                                class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group {{ $link['active'] ? 'bg-gray-100' : '' }}">
                                {!! $link['icon'] !!}
                                <span class="ms-3">{{ $link['name'] }}</span>
                                @if (isset($link['submenu']))
                                    <svg class="w-4 h-4 ml-auto" :class="{ 'rotate-180': open }"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 9l-7 7-7-7" />
                                    </svg>
                                @endif
                            </a>
                            @if (isset($link['submenu']))
                                <ul x-show="open" x-cloak class="ml-6 space-y-1">
                                    @foreach ($link['submenu'] as $submenu)
                                        <li>
                                            <a href="{{ $submenu['route'] }}"
                                                class="flex items-center p-2 text-gray-700 rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-700 group {{ $submenu['active'] ? 'bg-gray-100' : '' }}">
                                                {!! $submenu['icon'] !!}
                                                <span class="ms-3">{{ $submenu['name'] }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endif
                @endif
            @endforeach
        </ul>
    </div>
</aside>
