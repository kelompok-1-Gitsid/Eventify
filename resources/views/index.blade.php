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
                    <img src="{{ url('assets/img/wedding.jpg') }}" />
                </div>
            </div>
        </div>
    </section>
    <section id="our-product" class="mb-10 mt-10">
        <div class="py-2 text-center font-plusJakarta">
            <h1 class="font-bold text-[1.5rem] md:text-[2rem] lg:text-[2.5rem]"> Our Product</h1>
            <h3 class="font-medium text-[1rem] md:text-[1.2rem] lg:text-[1.4rem]">This are our priority product</h3>
        </div>
        <div class="mt-10 mb-10 mx-8 flex justify-items-center items-center justify-center ">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 md:gap-20 min-h-full">
                <div
                    class="relative scale">
                    <div class="image-product">
                        <img src="{{ url('assets/img/wedding-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start">
                        <p class="text-white text-2xl font-bold">Wedding</p>
                    </div>
                </div>
                <div
                    class="relative scale">
                    <div class="image-product">
                        <img src="{{ url('assets/img/photo-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start">
                        <p class="text-white text-2xl font-bold">Photography</p>
                    </div>
                </div>
                <div
                    class="relative scale">
                    <div class="image-product">
                        <img src="{{ url('assets/img/video-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start">
                        <p class="text-white text-2xl font-bold">Videographer</p>
                    </div>
                </div>
                <div
                    class="relative scale">
                    <div class="image-product ">
                        <img src="{{ url('assets/img/catering-product.jpg') }}" alt="" class="rounded-lg">
                    </div>
                    <div class="absolute top-0 left-0 right-0 bottom-0 mb-2 ml-2 flex items-end justify-start ">
                        <p class="text-white text-2xl font-bold">Catering</p>
                    </div>
                </div>
                <div
                    class="relative scale">
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
    <section id="content" class="mb-10 mt-10">
    <div class="flex flex-col mx-auto">
        <h1 class="text-3xl font-semibold text-center my-16">Top Vendor</h1>
        <div class="flex flex-col lg:flex-row items-center md:justify-center lg:gap-20">
            <div class="mx-5 my-5 image">
                <img src="{{ url('assets/img/dummy.jpg') }}" alt="" class="rounded-lg">
            </div>
            <div class="mx-5 my-5 font-plusJakarta text-center md:my-4 lg:my-auto lg:w-[50rem] lg:text-justify">
                <h1 class="title text-[1.5rem]">MegaWedding Entertaiment</h1>
                <p class="mt-5 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eum aspernatur
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit molestias laudantium itaque
                    dolores corporis, labore expedita in obcaecati, cumque doloremque ut pariatur culpa. Iure ullam
                    aliquid dolorem a iste facere.
                </p>
                <div class="flex flex-row items-center mt-8">
                    <button class="bg-blue-950 w-32 p-2 rounded-md scale">
                        <a href="" class="text-white">See Details</a>
                    </button>
                    <p class="ml-8">start at <span class="font-bold text-xl">Rp.750.000</span>/day</p>
                </div>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row-reverse items-center md:justify-center lg:gap-20">
            <div class="mx-5 my-5 image">
                <img src="{{ url('assets/img/dummy.jpg') }}" alt="" class="rounded-lg">
            </div>
            <div class="mx-5 my-5 font-plusJakarta text-center md:my-4 lg:my-auto lg:w-[50rem] lg:text-justify">
                <h1 class="title text-[1.5rem]">Ichibano Studio</h1>
                <p class="mt-5 text-justify">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eum aspernatur
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit molestias laudantium itaque
                    dolores corporis, labore expedita in obcaecati, cumque doloremque ut pariatur culpa. Iure ullam
                    aliquid dolorem a iste facere.
                </p>
                <div class="flex flex-row items-center mt-8">
                    <button class="bg-blue-950 w-32 p-2 rounded-md scale">
                        <a href="" class="text-white">See Details</a>
                    </button>
                    <p class="ml-8">start at <span class="font-bold text-xl">Rp.1.750.000</span>/day</p>
                </div>
            </div>
        </div>
    </div>
    </section>

</x-user-layout>
