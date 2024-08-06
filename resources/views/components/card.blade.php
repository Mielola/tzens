@props(['image', 'title', 'desc', 'slug'])

<div
    class="max-w-80 bg-white border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:shadow-sm dark:shadow-slate-500 dark:border-gray-700">
    <a href="#">
        <img class="rounded-t-lg" src="{{ asset($image) }}" alt="" />
    </a>
    <div class="p-5">
        <a href="#" class="">
            <h5 class="mb-2 min-h-16 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $title }}
            </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
            {{ Str::limit($desc, 100) }}</p>
        <a href="/organisasi/{{ $slug }}"
            class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Baca Selengkapnya
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
</div>
