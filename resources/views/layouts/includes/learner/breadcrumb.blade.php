@if (count($breadcrumbs) > 0)
    <nav class="flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-1 rtl:space-x-reverse">
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($loop->first)
                    <li class="inline-flex items-center">
                        <svg class="w-4 h-4 mx-1 transform -translate-y-0.5" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                        </svg>
                        <a href="{{ $breadcrumb['url'] ?? '#' }}"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            {{ $breadcrumb['title'] }}
                        </a>
                    </li>
                @elseif (!$loop->last)
                    <li>
                        <div class="flex items-center">
                            <svg class="block w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <a href="#{{ $breadcrumb['url'] }}"
                                class="mx-1 text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                                {{ $breadcrumb['title'] }}
                            </a>
                        </div>
                    </li>
                @else
                    <li aria-current="page">
                        <div class="flex items-center">
                            <svg class="w-3 h-3 mx-1 text-gray-400 rtl:rotate-180" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="mx-1 text-sm font-medium text-gray-500 dark:text-gray-400">
                                {{ $breadcrumb['title'] }}
                            </span>
                        </div>
                    </li>
                @endif
            @endforeach
        </ol>
    </nav>
@endif
