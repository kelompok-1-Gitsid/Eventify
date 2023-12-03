<x-user-layout>
    <div class="w-full h-[20rem] my-20 text-center gone delay-150">
        <h1 class="title-2">About Eventify</h1>
        <p class="text-slate-600 mt-2">Eventify is a website that's contain event, videography, decoration, and makeup artist</p>
        <div class="image absolute inset-y-28 -z-10 ml-20 hidden lg:block gone delay-300">
            <img src="{{ url('assets/img/about-us.jpg') }}" alt="">
        </div>
    </div>
    <div class="flex flex-col items-center justify-center footer gone delay-500">
        <h1 class="title text-2xl mb-10">How does Eventify benefit users?</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 lg:mx-44 text-center">
            <div class="mx-auto">
                <p>Pay from another dimension.</p>
            </div>
            <div class="mx-auto">
                <p>Effective marketing and promotion with wide reach.</p>
            </div>
            <div class="mx-auto">
                <p>Improved competition in the online marketplace.</p>
            </div>
            <div class="mx-auto">
                <p>Increasing Online Visibility</p>
            </div>
        </div>
    </div>
    <div class="flex flex-col lg:flex-row items-center justify-center lg:justify-between footer-2 gone delay-700">
        <img src="{{ 'assets/img/logo.png' }}" class="w-60 lg:ml-20 rounded-lg">
        <p class="flex items-center text-justify mx-24">
            Welcome to Eventify , where innovation meets celebration! We are the driving force behind unforgettable experiences that bridge the gap between cutting-edge products and the people who love them.
            At Eventify, we believe in the power of connection and the thrill of discovery. Our team is dedicated to curating an immersive platform that brings together industry leaders, visionaries, and enthusiasts to explore the latest and greatest in industry.
            Whether you're a seasoned professional or a curious newcomer, there's something for everyone at our event.
        </p>
    </div>

</x-user-layout>
