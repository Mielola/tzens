<x-layout>
    <section class="w-full flex flex-col items-center">
        <x-slot:title>{{ $title }}</x-slot:title>
        {{-- Section 1 --}}
        <section class="bg-blue-400 w-full p-5 flex items-center justify-between lg:justify-around text-white">
            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="text-4xl lg:text-8xl font-bold">1,2k</h1>
                <p class="text-sm lg:text-base w-full">User Terdaftar</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="text-4xl lg:text-8xl font-bold">1,2k</h1>
                <p class="text-sm lg:text-base w-full">Organisasi Tersedia</p>
            </div>
            <div class="flex flex-col items-center justify-center text-center">
                <h1 class="text-4xl lg:text-8xl font-bold">1,2k</h1>
                <p class="text-sm lg:text-base w-full">Webinar Tersedia</p>
            </div>
        </section>

        {{-- Section 2 --}}
        <section class="p-5 lg:p-10 lg:pt-20 w-full">
            <div class=" grid gap-5 grid-cols-2 md:grid-cols-2 lg:grid-cols-4 w-full sm:w-3/4 mx-auto">
                <x-benefit-card></x-benefit-card>
                <x-benefit-card></x-benefit-card>
                <x-benefit-card></x-benefit-card>
                <x-benefit-card></x-benefit-card>
            </div>
        </section>

        {{-- Section 3 --}}
        <section class="p-5 lg:p-10 w-full">

            <div class="flex lg:flex-row flex-col w-full py-8 items-center justify-around">
                <div class="w-full lg:w-[43%] lg:max-w-screen-sm">
                    <h1 class="py-8 font-bold text-5xl">Organisasi</h1>
                    <p>Tersedia berbagai macam pilihan informasi yang tersedia didalamnya mengenai Acara, Event, dan
                        Organisasi di dunia kampus Telkom University.</p>
                </div>
                <a href="">Lihat Semua &raquo;</a>

            </div>

            {{-- Mengambil Data Organisasi --}}
            <div class=" grid gap-5 grid-cols-1  md:grid-cols-2 lg:grid-cols-3 sm:w-3/4 mx-auto">
                @foreach ($organ as $organisasi)
                    <x-card image="{{ 'assets/images/Banner.png' }}" title="{{ $organisasi['nama_organisasi'] }}"
                        desc="{{ $organisasi['deskripsi'] }}" slug="{{ $organisasi['slug'] }}" />
                @endforeach
            </div>
        </section>

        {{-- Section 4 --}}
        <section class="p-5 lg:p-10 w-full">

            <div class="flex lg:flex-row flex-col w-full py-8 items-center justify-around">
                <div class="w-full lg:w-[43%] lg:max-w-screen-sm">
                    <h1 class="py-8 font-bold text-5xl">Seminar</h1>
                    <p>Tersedia berbagai macam pilihan informasi yang tersedia didalamnya mengenai Acara, Event, dan
                        Organisasi di dunia kampus Telkom University.</p>
                </div>
                <a href="">Lihat Semua &raquo;</a>

            </div>

            {{-- Mengambil Data Organisasi --}}
            <div class=" grid gap-5 grid-cols-1  md:grid-cols-2 lg:grid-cols-3 sm:w-3/4 mx-auto">
                @foreach ($organ as $organisasi)
                    <x-card image="{{ 'assets/images/Banner.png' }}" title="{{ $organisasi['nama_organisasi'] }}"
                        desc="{{ $organisasi['deskripsi'] }}" slug="{{ $organisasi['slug'] }}" />
                @endforeach
            </div>
        </section>

    </section>

</x-layout>
