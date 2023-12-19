<x-user-layout>
    <section id="header" class="mt-20 gone delay-150">
        <div class="flex flex-row py-32 px-32 justify-between items-center gap-16">
            <div class="">
                <div class="text-7xl font-bold">
                    <h1>Eventify is</h1>
                </div>
                <div class="py-7 text-lg text-justify">
                    <p>a website for customer to order event, videography, catering, decoration, and makeup artist from
                        vendor,
                        <span class="font-bold">eventify</span> also have many feature and more flexible for you.
                    </p>
                </div>
            </div>
            <div class="max-w-screen">
                <img src="{{ url('assets/img/header-photo.jpg') }}" alt="">
            </div>
        </div>

    </section>
    <section id="strategy" class="bg-slate-100 gone delay-500 -mt-32">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">We didn't reinvent the wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small
                    enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.
                    Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you
                    need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be
                    simple and quick.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png"
                    alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg"
                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                    alt="office content 2">
            </div>
        </div>
    </section>
    <section id="product" class="mb-10 mt-10 gone delay-7000">
        <div class="py-2 text-center font-plusJakarta">
            <h1 class="font-bold text-[1.5rem] md:text-[2rem] lg:text-[2.5rem] "> Our Product </h1>
            <h3 class="font-medium text-[1rem] md:text-[1.2rem] lg:text-[1.4rem]">This are our priority product</h3>
        </div>
        <div class="mt-10 mb-10 mx-8 flex justify-items-center items-center justify-center ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 md:gap-20 min-h-full">
                <div class="relative scale">
                    <div class="image-product">
                        <img src="{{ url('assets/img/wedding-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start">
                        <p class="text-white text-2xl font-bold">Decoration</p>
                    </div>
                </div>
                <div class="relative scale">
                    <div class="image-product">
                        <img src="{{ url('assets/img/photo-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start">
                        <p class="text-white text-2xl font-bold">Photography</p>
                    </div>
                </div>
                <div class="relative scale">
                    <div class="image-product">
                        <img src="{{ url('assets/img/video-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start">
                        <p class="text-white text-2xl font-bold">Videographer</p>
                    </div>
                </div>
                <div class="relative scale">
                    <div class="image-product ">
                        <img src="{{ url('assets/img/catering-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start ">
                        <p class="text-white text-2xl font-bold">Catering</p>
                    </div>
                </div>
                <div class="relative scale">
                    <div class="image-product">
                        <img src="{{ url('assets/img/makeup-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start">
                        <p class="text-white text-2xl font-bold">Makeup Artist</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimonials" class="mb-12 mt-12 gone delay-1000">
        <div class="text-center py-10">
            <h2 class="font-bold">Tertimonials User</h2>
            <h4 class="text-3xl w-72 mx-auto leading-normal font-semibold mb-12 gradient-text">Read What Other Have To
                Say</h4>
                    <div class="md:max-w-5xl mx-auto gap-8 px-3 group swiper mySwiper">
                        <div class="swiper-wrapper py-1">
                            <div class="swiper-slide bg-slate-50 shadow-md p-8 rounded-xl">
                                    <img src="{{ url('assets/img/avatar/avatar3.png') }}" alt=""
                                        class="h-20 mx-auto rounded-md mb-3">
                                    <h4 class="text-xl font-bold">Homba Stargazorus</h4>
                                    <p class="text-sm leading-7 my-3 font-light opacity-50">
                                        Waw, so nice i like the app, its so easy for order Make Up Artist.
                                    </p>
                            </div>
                            <div class="swiper-slide bg-slate-50 shadow-md p-8 rounded-xl">
                                    <img src="{{ url('assets/img/avatar/avatar3.png') }}" alt=""
                                        class="h-20 mx-auto rounded-md mb-3">
                                    <h4 class="text-xl font-bold">Ronaldo's Christoprous</h4>
                                    <p class="text-sm leading-7 my-3 font-light opacity-50">
                                        I'm so happy to use this app, its easy to use.
                                    </p>
                            </div>
                            <div class="swiper-slide bg-slate-50 shadow-md p-8 rounded-xl">
                                    <img src="{{ url('assets/img/avatar/avatar3.png') }}" alt=""
                                        class="h-20 mx-auto rounded-md mb-3">
                                    <h4 class="text-xl font-bold">Blumboy Mc'Claron</h4>
                                    <p class="text-sm leading-7 my-3 font-light opacity-50">
                                        Eventify help us who want to make a party or wedding.
                                    </p>
                            </div>
                            <div class="swiper-slide bg-slate-50 shadow-md p-8 rounded-xl">
                                <img src="{{ url('assets/img/avatar/avatar3.png') }}" alt=""
                                    class="h-20 mx-auto rounded-md mb-3">
                                <h4 class="text-xl font-bold">Vincent Hanazo</h4>
                                <p class="text-sm leading-7 my-3 font-light opacity-50">
                                    I like the ui, it's so good and so nice so easy to use.
                                </p>
                            </div>
                            <div class="swiper-slide bg-slate-50 shadow-md p-8 rounded-xl">
                                <img src="{{ url('assets/img/avatar/avatar3.png') }}" alt=""
                                    class="h-20 mx-auto rounded-md mb-3">
                                <h4 class="text-xl font-bold">Vincent Hanazo</h4>
                                <p class="text-sm leading-7 my-3 font-light opacity-50">
                                    Eventify is a good web for you, who want to order catering.
                                </p>
                            </div>
                        </div>
                    </div>
    </section>
</x-user-layout>
