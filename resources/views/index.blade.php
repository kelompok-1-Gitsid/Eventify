@extends('layouts.layout')

@section('container')
    <section id="header">
        <div class="py-8 px-2 mx-[3rem] lg:mx-[5rem] max-w-screen lg:py-24">
            <div class="flex flex-col lg:flex-row items-center md:justify-center md:justify-items-center gap-5 md:gap-15 lg:gap-25">
                <div class="mx-5 my-5 font-plusJakarta text-center md:my-4 lg:my-auto lg:w-[50rem] lg:text-justify">
                    <h1 class="title text-[1.5rem] md:text-[2.5rem] lg:text-[3rem]">Eventify is</h1>
                    <p class="mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eum aspernatur soluta ut
                        quia. Velit,
                        quos asperiores ipsa vitae, commodi neque quam odit cupiditate mollitia eveniet expedita. Quibusdam,
                        cumque reprehenderit, Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum eum aspernatur
                        soluta ut quia. Velit,
                        quos asperiores ipsa vitae, commodi neque quam odit cupiditate mollitia eveniet expedita. Quibusdam,
                        cumque reprehenderit!</p>
                </div>
                <div class="image top-0">
                    <img src="{{ url('assets/img/wedding.jpg') }}"/>
                </div>
            </div>
        </div>
    </section>
    <section id="our-product">
        <div class="py-2 text-center font-plusJakarta">
            <h1 class="font-bold text-[1.5rem] md:text-[2rem] lg:text-[2.5rem]"> Our Product</h1>
            <h3 class="font-medium text-[1rem] md:text-[1.2rem] lg:text-[1.4rem]">This are our priority product</h3>
        </div>
        <div class="mt-2 mx-6 flex justify-items-center items-center justify-center">
            <div class="grid grid-cols-4">

            </div>
        </div>
        <section id="content">


        </section>
    @endsection
