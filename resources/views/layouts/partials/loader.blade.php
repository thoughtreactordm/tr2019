<transition name="fade" mode="in-out">
    <section class="loader w-screen h-screen fixed bg-gradient-tl-dark-grey"
             v-show="loading"
    >
        <div class="w-full h-full menu flex flex-col justify-center items-center text-5xl text-white">
            <i class="fas fa-spinner fa-spin"></i>
        </div>
    </section>
</transition>
