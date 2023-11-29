<x-user-layout>
    <section id="header" class="mb-10 mt-10">
        <div class="mt-[5rem] lg:mt-2 py-10 px-2 mx-[3rem] lg:mx-[5rem] max-w-screen lg:py-24">
            <div class="flex flex-col lg:flex-row items-center md:justify-center gap-5 md:gap-15 lg:gap-40">
                <div class="mx-5 my-5 text-center md:my-4 lg:my-auto lg:w-[50rem] lg:text-justify">
                    <h1 class="title text-[1.5rem] md:text-[2.5rem] lg:text-[3rem]">Eventify is</h1>
                    <p class="mt-5 text-xl text-slate-800">
                        a website for customer to order event, videography, catering, decoration, and makeup artist from
                        vendor,
                        <span class="font-bold">eventify</span> also have many feature and more flexible for you.
                    </p>
                </div>
                <div class="image top-0">
                    <div>
                        <img src="{{ url('assets/img/wedding-header.jpg') }}" />
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="strategy" class=" bg-slate-100">
        <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">We didn't reinvent the wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need. Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.</p>
                <p>We are strategists, designers and developers. Innovators and problem solvers. Small enough to be simple and quick.</p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-2.png" alt="office content 1">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png" alt="office content 2">
            </div>
        </div>
    </section>
    <section id="product" class="mb-10 mt-10">
        <div class="py-2 text-center font-plusJakarta">
            <h1 class="font-bold text-[1.5rem] md:text-[2rem] lg:text-[2.5rem]"> Our Product</h1>
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
    <section id="galery" class="mb-10 mt-24">
        <div class="w-3/4 h-auto bg-slate-100 flex flex-col mx-auto rounded-lg">
            <h1 class="text-4xl font-semibold text-center my-16">Galery</h1>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4 px-16 pb-12">
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="{{ url('assets/img/potrait.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="{{ url('assets/img/video-product.jpg')}}" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="{{ url('assets/img/catering-product.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="{{ url('assets/img/photo-product-2.jpg')}}" alt="">
                    </div>
                </div>
                <div class="grid gap-4">
                    <div>
                        <img class="h-auto max-w-full rounded-lg"
                            src="{{ url('assets/img/dummy.jpg')}}" alt="">
                    </div>
                    <div>
                        <img class="max-h-screen max-w-full rounded-lg"
                            src="{{ url('assets/img/makeup-product-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="testimony">
        <div class="w-full">

        </div>
    </section>

</x-user-layout>
