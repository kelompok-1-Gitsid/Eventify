<x-user-layout>
    <div class="my-28">
        <section class="sec-1">
            <div class="flex flex-col lg:flex-row gap-8 mx-4 sm:items-center md:items-start">
                <div class="w-full lg:w-6/12 ">
                    <img src="{{ url('assets/img/potrait.jpg') }}" class="rounded-xl" alt="">
                </div>
                <div class="w-full lg:w-6/12 lg:overflow-y-auto lg:h-[55rem] xl:h-auto">
                    <h1 class="title text-6xl xl:text-10xl py-5 px-6 text-center bg-blue-50 rounded-xl">About us.</h1>
                    <div class="flex flex-col xl:flex-row items-center">
                        <img src="{{ url('assets/img/logo.png') }}" alt="">
                        <div class="mx-5 ">
                            <p class="text-justify text-lg">
                                Welcome to <span class="font-semibold">Eventify</span> , where innovation meets celebration! We are the driving force behind unforgettable experiences that bridge the gap between cutting-edge products and the people who love them. At Eventify, we believe in the power of connection and the thrill of discovery.
                                Our team is dedicated to curating an immersive platform that brings together industry leaders, visionaries, and enthusiasts to explore the latest and greatest in industry. Whether you're a seasoned professional or a curious newcomer, there's something for everyone at our event.
                            </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="flex flex-row items-center justify-center gap-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                            </svg>
                            <h4 class="text-center text-2xl my-2 title">How Does Eventify Benefits Users?</h4>
                        </div>
                        <div class="grid grid-cols-4 gap-4 justify-center py-5">
                            <div class="w-full p-8 col-span-2 flex items-center justify-center justify-self-center mx-auto bg-blue-50 text-black text-center text-lg rounded-xl">
                                <p>Payment from another dimension</p>
                            </div>
                            <div class="w-full p-8 col-span-2 flex items-center justify-center justify-self-center mx-auto bg-blue-50 text-black text-center text-lg rounded-xl">
                                Effective marketing and promotion with wide reach
                            </div>
                            <div class="w-full p-8 col-span-2 flex items-center justify-center justify-self-center mx-auto bg-blue-50 text-black text-center text-lg rounded-xl">
                                Improve competition in the online marketplace
                            </div>
                            <div class="w-full p-8 col-span-2 flex items-center justify-center justify-self-center mx-auto bg-blue-50 text-black text-center text-lg rounded-xl">
                                Increasing online visibility from user
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto">
                        <h4 class="text-center text-2xl my-6 title">Gallery Of Eventify</h4>
                        <div class="swiper myGalerySwiper">
                            <div class="swiper-wrapper py-4">
                                <div class="swiper-slide">
                                    <div class="xl:w-72">
                                        <img src="{{ url('assets/img/makeup-product.jpg') }}" alt="" class="rounded-lg">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="xl:w-72">
                                        <img src="{{ url('assets/img/decor-product.jpg') }}" alt="" class="rounded-lg">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="xl:w-72">
                                        <img src="{{ url('assets/img/catering-product.jpg') }}" alt="" class="rounded-lg">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="xl:w-72">
                                        <img src="{{ url('assets/img/photo-product.jpg') }}" alt="" class="rounded-lg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="sec-2">
            <div class="bg-blue-50 mt-10"">
                <div class="max-w-8xl mx-auto py-8 px-4 text-center lg:py-16 lg:px-6">
                    <div class="mx-auto mb-8 max-w-screen-sm lg:mb-">
                        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">Meet With Our Team</h2>
                        <p class="font-light text-gray-500 sm:text-xl">
                            Explore eventify team member, who created this app
                        </p>
                    </div>
                    <div class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 p-8">
                        <div class="bg-slate-50 w-full rounded-xl shadow-md p-5">
                            <img class="mx-auto mb-4 w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/thomas-lean.png" alt="Haikal Avatar">
                            <p>Muhammad Haikal Fajari</p>
                            <p>Project Leader</p>
                        </div>
                        <div class="bg-slate-50 w-full rounded-xl shadow-md p-5">
                            <img class="mx-auto mb-4 w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/michael-gouch.png" alt="Rinaldi Avatar">
                            <p>Rinaldi Simbolon</p>
                            <p>Web Development</p>
                        </div>
                        <div class="bg-slate-50 w-full rounded-xl shadow-md p-5">
                            <img class="mx-auto mb-4 w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Adhit Avatar">
                            <p>Nadhir Adhitya Z</p>
                            <p>Web Development</p>
                        </div>
                        <div class="bg-slate-50 w-full rounded-xl shadow-md p-5">
                            <img class="mx-auto mb-4 w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="Noval Avatar">
                            <p>Noval Hidayat</p>
                            <p>UI/UX Design</p>
                        </div>
                        <div class="bg-slate-50 w-full rounded-xl shadow-md p-5">
                            <img class="mx-auto mb-4 w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Zhafia Avatar">
                            <p>Zhafia Rabbani Amalia</p>
                            <p>Database Design</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-user-layout>
