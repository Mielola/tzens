@props(['image'])
<div class="bg-white dark:bg-gray-800 max-w-96 p-7 shadow-lg rounded-md flex flex-col items-center">
    <div class="flex relative items-center justify-center ">
        <img src="{{ asset($image) }}" alt="benefit.png" class="relative z-20">
    </div>
    <br>
    <h1 class="dark:text-white text-black text-sm lg:text-lg font-bold text-center">{{ $slot }}</h1>
</div>
