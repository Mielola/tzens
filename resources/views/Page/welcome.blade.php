<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    {{-- Section 1 --}}
    <section class="bg-blue-400 p-5 flex items-center justify-between lg:justify-around">
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
    <section class="p-10 bg-red-700 w-full ">
        <div class="flex justify-center gap-10 items-center m-10">
            <x-benefit-card></x-benefit-card>
            <x-benefit-card></x-benefit-card>
            <x-benefit-card></x-benefit-card>
            <x-benefit-card></x-benefit-card>
        </div>
    </section>
</x-layout>
