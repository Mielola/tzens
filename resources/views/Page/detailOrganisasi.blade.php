<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md border-b-2">
        <h2 class="text-3xl hover:underline font-bold tracking-tighter text-gray-900">{{ $post['nama_organisasi'] }}</h2>
        <div class="text-base text-gray-500">
            <p><strong class="mr-2">Tanggal
                    Mulai:</strong>{{ \Carbon\Carbon::parse($post->tanggal_mulai)->translatedFormat('j F Y, H:i') }} -
                {{ \Carbon\Carbon::parse($post->tanggal_berakhir)->translatedFormat('j F Y, H:i') }}</p>

        </div>
        <p class="my-4 sm:text-justify lg:text-left">{{ Str::limit($post['deskripsi'], 200) }}</p>
        <a href="/organisasi" class="font-medium text-blue-500">&laquo; Back to organisasi</a>
    </article>

</x-layout>
