@props(['active' => false, 'class'])

<a {{ $attributes }}
    class="{{ $active ? 'rounded-md bg-blue-600 text-white' : ' hover:bg-blue-700 hover:rounded-md hover:text-white text-black' }}  px-3 py-2 text-sm font-bold dark:text-[#f4f4f4]  relative"
    aria-current="{{ request()->is('/') ? 'page' : false }}">{{ $slot }}</a>
