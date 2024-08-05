<header class="shadow object-cover h-[100vh]"
    style="background-image: url('{{ asset('assets/images/bg.png') }}'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div
        class="mx-auto max-w-7xl flex items-center justify-center h-full sm:px-6 lg:px-8 flex-col md:text-center sm:text-center gap-10">
        <h1 class="text-center text-6xl text-white font-bold tracking-tight">{{ $slot }}</h1>
        <p class="text-[24px] text-white text-center">Tersedia beragam informasi tentang informasi webinar dan organisasi
            di Telkom
            University.
            Temukan kesempatan
            inspiratif untuk pengembangan dirimu di sini!</p>
    </div>
</header>
