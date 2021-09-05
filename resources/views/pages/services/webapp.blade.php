@extends('_layouts.public')

@section('content')

    <section class="py-12 text-gray-400 body-font">
        <div class="container flex flex-col items-center px-5 mx-auto md:flex-row">
            <div
                class="flex flex-col items-center mb-16 text-center lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 md:items-start md:text-left md:mb-0">
                <h1 class="mb-4 text-3xl font-medium text-white title-font sm:text-4xl">Gage's Space
                    <br class="hidden md:inline-block"><span class="text-2xl text-indigo-600">Web Applications</span>
                </h1>
                <p class="mb-8 leading-relaxed"></p>
                <div class="flex justify-center">
                    <a href="{{ route('home') }}#contact"
                        class="inline-flex px-6 py-2 text-lg text-white bg-indigo-600 border-0 rounded focus:outline-none hover:bg-indigo-800">Contact
                    </a>
                    <a href="#works"
                        class="inline-flex px-6 py-2 ml-4 text-lg text-gray-300 bg-gray-800 border-0 rounded focus:outline-none hover:bg-gray-700 hover:text-white">
                        Projects</a>

                    <a href="#features"
                        class="inline-flex px-6 py-2 ml-4 text-lg text-gray-300 bg-gray-800 border-0 rounded focus:outline-none hover:bg-gray-700 hover:text-white">
                        Features</a>
                </div>
            </div>
            <div class="w-5/6 lg:max-w-lg lg:w-full md:w-1/2">
                <img class="object-cover object-center rounded" alt="hero" src="{{ asset('images/webapp.png') }}">
            </div>
        </div>
    </section>

    <section class="py-12 text-gray-400 body-font" id="works">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap w-full mb-5">
                <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
                    <h1 class="mb-2 text-2xl font-medium text-white sm:text-3xl title-font">Web Applications Projects
                    </h1>
                    <div class="w-20 h-1 bg-indigo-500 rounded"></div>
                </div>
                <p class="w-full leading-relaxed text-gray-400 lg:w-1/2 text-opacity-90"></p>
            </div>
            <div class="flex flex-wrap -m-4">

                <div class="p-4 xl:w-1/4 md:w-1/2">
                    <div class="p-6 bg-gray-800 rounded-lg bg-opacity-40">
                        <img class="object-cover object-center w-full h-40 mb-6 rounded"
                            src="{{ asset('images/wip.jpg') }}" alt="Work In Progress">
                        <h3 class="text-xs font-medium tracking-widest text-indigo-400 title-font">WEB APPLICATION</h3>
                        <div class="flex justify-between mb-2">
                            <h2 class="text-lg font-medium text-white title-font">Shift Scheduler</h2>
                        </div>

                        <p class="text-base leading-relaxed">A simple to use application that allows employees to request
                            time off and for management to make schedules.</p>

                    </div>
                </div>

                <div class="p-4 xl:w-1/4 md:w-1/2">
                    <div class="p-6 bg-gray-800 rounded-lg bg-opacity-40">
                        <img class="object-cover object-center w-full h-40 mb-6 rounded"
                            src="{{ asset('images/confidential.jpg') }}" alt="Confidential">
                        <h3 class="text-xs font-medium tracking-widest text-indigo-400 title-font">WEB APPLICATION</h3>
                        <div class="flex justify-between mb-2">
                            <h2 class="text-lg font-medium text-white title-font">UPC Manager</h2>
                        </div>

                        <p class="text-base leading-relaxed">A simple website to keep track of UPCs that would fade due to
                            weather for Lawn and Garden. <span class="text-sm text-red-500">This application is kept
                                private.</span></p>

                    </div>
                </div>

                <div class="p-4 xl:w-1/4 md:w-1/2">
                    <div class="p-6 bg-gray-800 rounded-lg bg-opacity-40">
                        <img class="object-cover object-center w-full h-40 mb-6 rounded"
                            src="{{ asset('images/wip.jpg') }}" alt="Work In Progress">
                        <h3 class="text-xs font-medium tracking-widest text-indigo-400 title-font">WEB APPLICATION</h3>
                        <div class="flex justify-between mb-2">
                            <h2 class="text-lg font-medium text-white title-font">More Coming Soon!!</h2>
                        </div>

                        <p class="text-base leading-relaxed">I have many more open source web applications in the works.
                            Continue to check back here or on my <a class="text-indigo-400 cursor-pointer hover:underline"
                                href="https://github.com/gsbarbo">Github</a> page for
                            updates!</p>

                    </div>
                </div>



            </div>
        </div>
    </section>

    <section class="py-12 body-font" id="features">
        <div class="container px-5 mx-auto">
            <div class="flex flex-wrap w-full mb-5">
                <div class="w-full mb-6 lg:w-1/2 lg:mb-0">
                    <h1 class="mb-2 text-2xl font-medium text-white sm:text-3xl title-font">Web Application Features
                    </h1>
                    <div class="w-20 h-1 bg-indigo-500 rounded"></div>
                </div>
                <p class="w-full leading-relaxed text-gray-400 lg:w-1/2 text-opacity-90"></p>
            </div>
            <div class="flex flex-wrap -mx-2 lg:w-4/5 sm:mx-auto sm:mb-2">

                <div class="w-full p-2 sm:w-1/2">
                    <div class="flex items-center h-full p-4 bg-gray-800 rounded">
                        <svg fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            class="flex-shrink-0 w-6 h-6 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="font-medium text-white title-font">Mobile First Design</span>
                    </div>
                </div>

                <div class="w-full p-2 sm:w-1/2">
                    <div class="flex items-center h-full p-4 bg-gray-800 rounded">
                        <svg fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            class="flex-shrink-0 w-6 h-6 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="font-medium text-white title-font">Security Focused Development</span>
                    </div>
                </div>

                <div class="w-full p-2 sm:w-1/2">
                    <div class="flex items-center h-full p-4 bg-gray-800 rounded">
                        <svg fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            class="flex-shrink-0 w-6 h-6 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="font-medium text-white title-font">Made With Modern Standards</span>
                    </div>
                </div>

                <div class="w-full p-2 sm:w-1/2">
                    <div class="flex items-center h-full p-4 bg-gray-800 rounded">
                        <svg fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            class="flex-shrink-0 w-6 h-6 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="font-medium text-white title-font">Completely Customizable</span>
                    </div>
                </div>

                <div class="w-full p-2 sm:w-1/2">
                    <div class="flex items-center h-full p-4 bg-gray-800 rounded">
                        <svg fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            class="flex-shrink-0 w-6 h-6 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="font-medium text-white title-font">Free Minor Edits... FOREVER*</span>
                    </div>
                </div>

                <div class="w-full p-2 sm:w-1/2">
                    <div class="flex items-center h-full p-4 bg-gray-800 rounded">
                        <svg fill="none" stroke="#059669" stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                            class="flex-shrink-0 w-6 h-6 mr-4" viewBox="0 0 24 24">
                            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"></path>
                            <path d="M22 4L12 14.01l-3-3"></path>
                        </svg>
                        <span class="font-medium text-white title-font">Free Consultation</span>
                    </div>
                </div>

            </div>
            <a href="{{ route('home') }}#contact">
                <button
                    class="flex px-8 py-2 mx-auto mt-16 text-lg text-white bg-indigo-600 border-0 rounded focus:outline-none hover:bg-indigo-800">Contact
                    Me</button>
            </a>
        </div>
    </section>

@endsection
