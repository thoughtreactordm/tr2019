<footer class="text-center text-grey-light p-16 font-bold">

    <div class="flex justify-center items-center m-2 text-orange uppercase">
        @include('layouts.partials.nav-links')
    </div>

    <div class="text-4xl flex justify-center items-center">

        <a href="https://twitter.com/thought_reactor" class="block mx-2">
            <i class="fab fa-twitter"></i>
        </a>

        <a href="https://instagram.com/thoughtreactor" class="block mx-2">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="https://youtube.com/TheThoughtReactor" class="block mx-2">
            <i class="fab fa-youtube-square"></i>
        </a>

        <a href="https://discord.gg/cfHd8tD" class="block mx-2">
            <i class="fab fa-discord"></i>
        </a>

    </div>

    <p class="m-4 text-sm">
        &copy;{{ date('Y') }} Thought Reactor, All Rights Reserved.
    </p>

    <p class="m-2 text-sm">
        Built with <i class="fas fa-heart"></i> using <a href="https://laravel.com">Laravel</a>,
        <a href="https://laravelvoyager.com/">Voyager</a>,
        and <a href="https://tailwindcss.com">TailwindCSS</a>.
    </p>
</footer>
