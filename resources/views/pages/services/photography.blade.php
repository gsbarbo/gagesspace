@extends('_layouts.public')

@section('content')

    <section class="py-12 text-gray-400 body-font">
        <div class="container flex flex-col items-center px-5 mx-auto md:flex-row">
            <div
                class="flex flex-col items-center mb-16 text-center lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0">
                <h1 class="mb-4 text-3xl font-medium text-white title-font sm:text-4xl">Gage's Space
                    <br class="hidden md:inline-block"><span class="text-2xl text-indigo-600">Photography</span>
                </h1>
                <p class="mb-8 leading-relaxed">Still a new service I offer. Below are some of my pictures I have taken.
                    Contact me to see if I can help you with your photography needs.</p>
                <div class="flex justify-center">
                    <a href="{{ route('home') }}#contact"
                        class="inline-flex px-6 py-2 text-lg text-white bg-indigo-600 border-0 rounded focus:outline-none hover:bg-indigo-800">Contact
                    </a>

                    <a href="#pictures"
                        class="inline-flex px-6 py-2 ml-4 text-lg text-gray-300 bg-gray-800 border-0 rounded focus:outline-none hover:bg-gray-700 hover:text-white">
                        Pictures</a>
                </div>
            </div>
            <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2">
                <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/photography.jpg') }}">
            </div>
        </div>
    </section>

    <section class="py-12 text-gray-400 body-font" id="works">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap w-full mb-5">
                <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
                    <h1 class="mb-2 text-2xl font-medium text-white sm:text-3xl title-font">Pictures
                    </h1>
                    <div class="w-20 h-1 bg-indigo-500 rounded"></div>
                </div>
                <p class="w-full leading-relaxed text-gray-400 lg:w-1/2 text-opacity-90"></p>
            </div>
            <div class="flex flex-wrap -m-1 md:-m-2">

                <div class="flex flex-wrap w-1/2">
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full"
                            src="{{ asset('images/photography/DSC_1145.JPG') }}">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full"
                            src="{{ asset('images/photography/DSC_0072_edit.png') }}">
                    </div>
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full"
                            src="{{ asset('images/photography/54C_0123.JPG') }}">
                    </div>
                </div>
                <div class="flex flex-wrap w-1/2">
                    <div class="w-full p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full"
                            src="{{ asset('images/photography/DSC_0177.JPG') }}">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full"
                            src="{{ asset('images/photography/DSC_0093.JPG') }}">
                    </div>
                    <div class="w-1/2 p-1 md:p-2">
                        <img alt="gallery" class="block object-cover object-center w-full h-full"
                            src="{{ asset('images/photography/DSC_0289_edit.jpg') }}">
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
