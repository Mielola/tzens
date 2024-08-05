<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    @foreach ($post as $posts)
        <article class="py-8 max-w-screen-md border-b-2">
            <h2 class="text-3xl hover:underline font-bold tracking-tighter text-gray-900">{{ $posts['nama_organisasi'] }}
            </h2>
            <div class="text-base text-gray-500">
                <a href="">{{ $posts['nama_organisasi'] }} | {{ $posts->created_at->diffForHumans() }}</a>
            </div>
            <p class="my-4 sm:text-justify lg:text-left">{{ Str::limit($posts['deskripsi'], 200) }}</p>
            <a href="/organisasi/{{ $posts['id'] }}" class="font-medium text-blue-500">Read More &raquo;</a>
        </article>
    @endforeach

</x-layout>
