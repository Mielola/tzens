<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <article class="py-8 max-w-screen-md border-b-2">
        <h2 class="text-3xl hover:underline font-bold tracking-tighter text-gray-900">{{ $post['title'] }}</h2>
        <div class="text-base text-gray-500">
            <a href="">{{ $post['author'] }} | {{ $post['date'] }}</a>
        </div>
        <p class="my-4 sm:text-justify lg:text-left">{{ Str::limit($post['content'], 200) }}</p>
        <a href="/organisasi" class="font-medium text-blue-500">&laquo; Back to organisasi</a>
    </article>

</x-layout>
