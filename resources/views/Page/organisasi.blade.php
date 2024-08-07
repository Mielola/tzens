<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="px-4 py-6 sm:px-6 lg:px-8 max-w-full">
        <div class="justify-center flex flex-col items-center">
            <form class="w-full px-6 mx-auto" method="GET" action="/search">
                <label for="default-search"
                    class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="default-search" name="query"
                        class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search Mockups, Logos..." required />
                    <button type="submit"
                        class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                </div>
            </form>

            <div class="mx-auto  grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 py-6 sm:px-6 gap-12">
                @foreach ($post as $posts)
                    {{-- Mengambil Data Organisasi --}}
                    <x-card image="{{ 'assets/images/Banner.png' }}" title="{{ $posts['nama_organisasi'] }}"
                        desc="{{ $posts['deskripsi'] }}" slug="{{ $posts['slug'] }}" />
                @endforeach
            </div>
        </div>

    </section>
</x-layout>
