@extends('layouts.layout')

@section('container')
    <section id="header">
        <div class="py-8 px-2 mx-[2rem] lg:mx-[5rem] max-w-screen lg:py-24">
            <div class="grid md:grid-cols-1 lg:grid-cols-2 gap-8 h-52 lg:h-auto">
                <div
                    class="mx-5 my-5 font-plusJakarta text-center
                        md:my-4
                        lg:my-auto lg:w-[32rem] lg:text-justify">
                    <h1
                        class="text-gray-900 font-extrabold text-[1.5rem]
                                md:text-[2.5rem]
                                lg:text-[3rem]">
                        Eventify is</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eum aspernatur soluta ut quia. Velit,
                        quos asperiores ipsa vitae, commodi neque quam odit cupiditate mollitia eveniet expedita. Quibusdam,
                        cumque reprehenderit!</p>
                </div>
                <div class="ms-32">
                    <img src="{{ url('assets/img/wedding.jpg') }}" class="max-w-screen h-auto invisible lg:visible" />
                </div>
            </div>
        </div>
    </section>
    <section id="main">
        <div class="py-2 text-center font-plusJakarta">
            <h1
                class="font-bold text-[1.5rem]
                       md:text-[2rem]
                       lg:text-[2.5rem]">
                Our Product</h1>
            <h3
                class="font-medium text-[1rem]
                       md:text-[1.2rem]
                       lg:text-[1.4rem]">
                This are our priority product</h3>
        </div>
        <div class="mt-2 flex gap-2 justify-items-center md:justify-items-between">

        </div>
    </section>
@endsection
