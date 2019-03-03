<transition name="fade" mode="in-out">
    <header class="w-screen h-screen fixed bg-gradient-tl-dark-grey"
            v-show="menu"
            v-cloak
    >
        <div class="w-full h-full menu flex flex-col justify-center items-center text-4xl">
            @include('layouts.partials.nav-links')
        </div>
    </header>
</transition>

<header class="p-6 bg-gradient-tl-dark-grey border-t-8 border-gradient-r-brand shadow-lg">
    <div class="container mx-auto max-w-lg">
        <div class="flex justify-between items-center">
            <a href="/" class="brand">
                <img src="/img/logo.svg" alt="Thought Reactor" class="logo">
            </a>

            <div class="menu sm:block xs:hidden uppercase">
                @include('layouts.partials.nav-links')
            </div>

            <button
                    class="menu-button xl:hidden lg:hidden md:hidden sm:hidden xs:block text-white p-5 bg-gradient-br-brand"
                    @click="toggleMenu"
                    v-cloak
            >
                <i class="fas fa-bars fa-fw fa-1x"></i>
            </button>
        </div>
    </div>
</header>
