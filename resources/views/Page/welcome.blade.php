<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- Section 1 --}}
    <section class="bg-blue-400 p-5 flex items-center justify-between lg:justify-around text-white">
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
    <section class="p-10 700 w-full">
        <div
            class="flex flex-col sm:flex-wrap sm:flex-row lg:flex-row lg:flex-wrap justify-center gap-4 items-center mx-auto">
            <x-benefit-card></x-benefit-card>
            <x-benefit-card></x-benefit-card>
            <x-benefit-card></x-benefit-card>
            <x-benefit-card></x-benefit-card>
        </div>
    </section>

    {{-- Section 3 --}}
    <section class="">
        <div class="mx-auto max-w-7xl justify-center py-6 sm:px-6 flex flex-wrap gap-12">
            <div class="flex items-center justify-around">
                <div class="w-[80%]">
                    <h1>Organisasi</h1>
                    <p>Tersedia berbagai macam pilihan informasi yang tersedia didalamnya mengenai Acara, Event, dan
                        Organisasi
                        di dunia kampus Telkom University.</p>
                </div>
                <a href="">Lihat Semua &raquo;</a>
            </div>
            @foreach ($organ as $organisasi)
                {{-- Mengambil Data Organisasi --}}
                <x-card image="{{ 'assets/images/Banner.png' }}" title="{{ $organisasi['nama_organisasi'] }}"
                    desc="{{ $organisasi['deskripsi'] }}" slug="{{ $organisasi['slug'] }}" />
            @endforeach
        </div>
    </section>

</x-layout>
