@extends('_layouts.public')

@section('content')

    <div class="w-full px-3 py-6 mx-auto mt-10 text-center md:w-4/5 lg:w-2/3">
        <h1 class="font-bold uppercase text-7xl">I Am Gage</h1>
        <h2 class="text-4xl font-bold text-indigo-600 uppercase">Web Developer</h2>
        <p class="mt-8 text-lg">
            Hello, I am Gage! I enjoy programming a lot. I've created websites,
            Web Applications, and more. I am a self taught developer and I have been programming for ~8 years and still
            learning new technologies every day, mostly focusing on Laravel and design.
        </p>

        <div class="mx-auto">
            <div class="px-3 mt-8">

                <a href="#contact"
                    class="block px-3 py-2 my-2 mr-3 sm:inline-block bg-secondary hover:bg-indigo-700 rounded-2xl">
                    <i class="mr-2 text-white fas fa-envelope-open-text"></i>
                    Contact
                </a>
                <a href="https://github.com/gsbarbo"
                    class="block px-3 py-2 my-2 mr-3 sm:inline-block bg-secondary hover:bg-indigo-700 rounded-2xl">
                    <i class="mr-2 text-white fab fa-github"></i>Github
                </a>
                <a href="https://www.facebook.com/gagesspace"
                    class="block px-3 py-2 my-2 mr-3 sm:inline-block bg-secondary hover:bg-indigo-700 rounded-2xl">
                    <i class="mr-2 text-white fab fa-facebook-square"></i>
                    Facebook
                </a>
                <a href="https://www.instagram.com/gagesspace/"
                    class="block px-3 py-2 my-2 mr-3 sm:inline-block bg-secondary hover:bg-indigo-700 rounded-2xl">
                    <i class="mr-2 text-white fab fa-instagram"></i>Instagram
                </a>
            </div>
        </div>
    </div>

    <section class="text-gray-600 body-font">

        <div class="container flex flex-col px-5 py-24 mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-indigo-600">About Me</h1>
                <div class="flex justify-center mt-6">
                    <div class="inline-flex w-24 h-1 bg-indigo-500 rounded-full"></div>
                </div>
            </div>
            <div class="mx-auto lg:w-4/6">
                <div class="flex flex-col mt-10 sm:flex-row">
                    <div class="text-center sm:w-1/3 sm:pr-8 sm:py-8">
                        <div
                            class="inline-flex items-center justify-center w-32 h-32 text-gray-400 bg-gray-200 rounded-full">
                            <img src="{{ asset('images/gage.jpg') }}" alt="Me!" class="rounded-full">

                        </div>
                        <div class="flex flex-col items-center justify-center text-center">
                            <h2 class="mt-4 text-2xl font-semibold">Gage Barbour</h2>
                            <div class="w-12 h-1 mt-2 mb-4 bg-indigo-500 rounded"></div>
                            <p class="text-base italic">“There are three responses to a piece of design – yes, no, and WOW!
                                Wow is the one to aim for.” - Milton Glaser</p>
                        </div>
                    </div>
                    <div
                        class="pt-4 mt-4 text-center border-t border-gray-200 sm:w-2/3 sm:pl-8 sm:py-8 sm:border-l sm:border-t-0 sm:mt-0 sm:text-left">
                        <p class="mb-2 leading-relaxed">It all started in 2013 when I tried out for a professional StarCraft
                            2 Team. I didn't make the competitive team but did meet their web developer from New Zealand. He
                            inspired me to learn the website and to grow my knowledge. Little did I know it would lead to a
                            life long passion. </p>
                        <p class="mb-2 leading-relaxed">My Senior year in high school I created my first public website for
                            an actual client, a thrift shop in my local town. This was my first major project. The website
                            needed to have a CMS (Content Management System) that way she could update the website. Even
                            though this website didn't last long I learned a great deal about web development by trial and
                            error.</p>
                        <p class="mb-2 leading-relaxed">Present day I haven't expanded my client base very much. I
                            have continued my learning with eSports organizations websites and FiveM communities. These
                            communities/organizations come and go without much thought. I am now starting to build my own
                            portfolio with different open source web applications. To do this I am looking for more real
                            life clients to get their business online in
                            a world changed due to COVID19.</p>
                        <p class="mb-2 leading-relaxed">If you are interested in working with me on your next online project
                            feel free to message me using the form below. I do have a full time overnight job but I will
                            email you back with a time and date that we can have a phone call. If you're not convinced check
                            out my projects below!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="text-gray-600 body-font">
        <div class="container px-5 pb-24 mx-auto">
            <div class="mb-20 text-center">
                <h1 class="text-3xl font-bold text-indigo-600">Skills</h1>
                <div class="flex justify-center mt-6">
                    <div class="inline-flex w-24 h-1 bg-indigo-500 rounded-full"></div>
                </div>
            </div>
            <div class="flex flex-wrap mx-auto -m-4">
                <div class="w-full p-4 text-center lg:w-1/4 sm:w-1/2">
                    <h2 class="mb-4 text-xl font-semibold tracking-widest text-center text-indigo-600">
                        Front End</h2>
                    <nav class="flex flex-col items-center -mb-1 space-y-2.5">
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>TailwindCSS
                        </a>
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Bootstrap 5
                        </a>
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>HTML 5
                        </a>
                    </nav>
                </div>

                <div class="w-full p-4 text-center lg:w-1/4 sm:w-1/2">
                    <h2 class="mb-4 text-xl font-semibold tracking-widest text-center text-indigo-600">
                        Back End</h2>
                    <nav class="flex flex-col items-center -mb-1 space-y-2.5">
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>PHP
                        </a>
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Laravel
                        </a>
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Codeigniter
                        </a>
                    </nav>
                </div>

                <div class="w-full p-4 text-center lg:w-1/4 sm:w-1/2">
                    <h2 class="mb-4 text-xl font-semibold tracking-widest text-center text-indigo-600">
                        Coding</h2>
                    <nav class="flex flex-col items-center -mb-1 space-y-2.5">
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>VS Code
                        </a>
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>GIT/Github
                        </a>
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Livewire
                        </a>
                    </nav>
                </div>

                <div class="w-full p-4 text-center lg:w-1/4 sm:w-1/2">
                    <h2 class="mb-4 text-xl font-semibold tracking-widest text-center text-indigo-600">
                        Photography</h2>
                    <nav class="flex flex-col items-center -mb-1 space-y-2.5">
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>High School Sports
                        </a>
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Outside Photo Shoots
                        </a>
                        <a>
                            <span
                                class="inline-flex items-center justify-center w-4 h-4 mr-2 text-indigo-500 bg-indigo-900 rounded-full">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="3" class="w-3 h-3" viewBox="0 0 24 24">
                                    <path d="M20 6L9 17l-5-5"></path>
                                </svg>
                            </span>Photoshop
                        </a>
                    </nav>
                </div>

            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font">
        <div class="container px-5 pb-24 mx-auto">
            <div class="mb-20 text-center">
                <h1 class="text-3xl font-bold text-indigo-600">Services</h1>
                <p class="mx-auto text-base leading-relaxed xl:w-2/4 lg:w-3/4 text-gray-500s">This is just some of the
                    services I offer. If you have any questions or need something not on this list don't hesitate to contact
                    me! Examples of services coming soon.</p>
                <div class="flex justify-center mt-6">
                    <div class="inline-flex w-16 h-1 bg-indigo-500 rounded-full"></div>
                </div>
            </div>
            <div class="flex flex-wrap -mx-4 -mt-4 -mb-10 space-y-6 sm:-m-4 md:space-y-0">
                <div class="flex flex-col items-center p-4 text-center md:w-1/3">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-20 h-20 mb-5 text-indigo-500 bg-indigo-900 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="mb-4 text-xl font-semibold tracking-widest text-center text-indigo-600">Website
                            Design
                        </h2>
                        <p class="text-base leading-relaxed">Weather it be a static website or a full CMS, I have created
                            several of each type. I can create one from the ground up or make edits to your current website.
                        </p>
                        {{-- <a class="inline-flex items-center mt-3 text-indigo-500">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a> --}}
                    </div>
                </div>
                <div class="flex flex-col items-center p-4 text-center md:w-1/3">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-20 h-20 mb-5 text-indigo-500 bg-indigo-900 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="mb-4 text-xl font-semibold tracking-widest text-center text-indigo-600">Web Application
                        </h2>
                        <p class="text-base leading-relaxed">More than a website! Need a schedule system for your employees?
                            Check! Need a support ticket system to track renter issues? Check! Web Applications can be
                            used to make your life easier!</p>
                    </div>
                </div>
                <div class="flex flex-col items-center p-4 text-center md:w-1/3">
                    <div
                        class="inline-flex items-center justify-center flex-shrink-0 w-20 h-20 mb-5 text-indigo-500 bg-indigo-900 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <div class="flex-grow">
                        <h2 class="mb-4 text-xl font-semibold tracking-widest text-center text-indigo-600">Photography <span
                                class="text-xs text-red-400">NEW</span></h2>
                        <p class="text-base leading-relaxed">A new service of mine. I have 3 years of experiance at high
                            school sporting events with my brother and sister. Some of my pictures will be available soon!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="w-full px-3 py-6 mx-auto mt-8 lg:px-0 md:w-4/5 lg:w-2/3" id="projects">
        <h1 class="text-3xl font-bold text-indigo-600">Projects</h1>
        <div class="flex flex-col mt-3 lg:flex-wrap lg:justify-between lg:flex-row">

            <div class="w-full p-4 lg:w-1/2">
                <div class="relative w-full p-5 pb-16 rounded-lg bg-secondary">
                    <h3 class="text-2xl font-semibold">FiveM CAD/MDT System</h3>
                    <div class="text-xs">
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-red-600 rounded-full">
                            Laravel
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-indigo-600 rounded-full">
                            PHP
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-green-600 rounded-full">
                            TailwindCSS
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-yellow-600 rounded-full">
                            Open Source
                        </button>
                    </div>
                    <p class="">
                        This is a police type CAD/MDT system for roleplay communities. This is a work in progress to open
                        source it. It includes everything from applications to whitelisting while still a fully functional
                        MDT!
                    </p>
                    <div class="absolute inset-x-0 bottom-0">
                        <a href="https://github.com/gsbarbo/Fivem-Cad"
                            class="inline-block px-3 py-2 mb-5 ml-5 font-semibold text-black bg-gray-300 rounded-lg hover:bg-white">View
                            Code</a>
                        {{-- <a href="#"
                            class="inline-block px-3 py-2 mb-5 ml-5 font-semibold text-black bg-gray-300 rounded-lg hover:bg-white">Preview</a> --}}
                    </div>
                </div>
            </div>

            <div class="w-full p-4 lg:w-1/2">
                <div class="relative w-full p-5 pb-16 rounded-lg bg-secondary">
                    <h3 class="text-2xl font-semibold">This Website!</h3>
                    <div class="text-xs">
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-red-600 rounded-full">
                            Laravel
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-indigo-600 rounded-full">
                            PHP
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-green-600 rounded-full">
                            TailwindCSS
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-yellow-600 rounded-full">
                            Open Source
                        </button>
                    </div>
                    <p class="">New and improved website for Gage's Space. Will feature a blog section as well as all docs
                        for my other projects. Be sure to look around and fell free to use the contact form on the bottom to
                        reach me!
                    </p>
                    <a href="https://github.com/gsbarbo/gagesspace"
                        class="absolute bottom-0 left-0 inline-block px-3 py-2 mb-5 ml-5 font-semibold text-black bg-gray-300 rounded-lg hover:bg-white">View
                        Code</a>
                </div>
            </div>

            <div class="w-full p-4 lg:w-1/2">
                <div class="relative w-full p-5 pb-16 rounded-lg bg-secondary">
                    <h3 class="text-2xl font-semibold">Laravel Admin Template</h3>
                    <div class="text-xs">
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-red-600 rounded-full">
                            Laravel
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-indigo-600 rounded-full">
                            PHP
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-green-600 rounded-full">
                            TailwindCSS
                        </button>
                        <button type="button"
                            class="inline-block p-2 px-4 m-2 leading-none text-white bg-yellow-600 rounded-full">
                            Open Source
                        </button>
                    </div>
                    <p class="">An admin template for Laravel with Spatie Permissions and TailwindCSS. Also includes simple
                        designed pages to manage roles, permissions and users. Will convert into a Composer Package once I
                        figure that out.
                    </p>
                    <a href="https://github.com/gsbarbo/laravel-admin-template"
                        class="absolute bottom-0 left-0 inline-block px-3 py-2 mb-5 ml-5 font-semibold text-black bg-gray-300 rounded-lg hover:bg-white">View
                        Code</a>
                </div>
            </div>

        </div>
    </div>


    <div class="w-full px-3 py-6 mx-auto mt-8 lg:px-0 md:w-4/5 lg:w-2/3" id="contact">
        <h1 class="text-3xl font-bold text-indigo-600">Contact Me</h1>

        <form action="{{ route('send.email') }}" method="POST" class="w-full p-6 rounded-lg bg-secondary ">
            @if ($errors->any())
                <div class="">
                    <div class="font-medium text-red-600 ">
                        {{ __('Whoops! Something went wrong.') }}
                    </div>

                    <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li class="text-red-600">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div>
                <div class="flex flex-col mb-3">
                    <label for="name">Name<span class="text-red-600">*</span></label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-indigo-500 focus:outline-none focus:bg-gray-800 focus:text-indigo-500"
                        autocomplete="off">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="email">Email<span class="text-red-600">*</span></label>
                    <input type="text" id="email" name="email" value="{{ old('email') }}"
                        class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-indigo-500 focus:outline-none focus:bg-gray-800 focus:text-indigo-500"
                        autocomplete="off">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="message">Message<span class="text-red-600">*</span></label>
                    <textarea rows="4" id="message" name="message"
                        class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-indigo-500 focus:outline-none focus:bg-gray-800 focus:text-indigo-500">{{ old('message') }}</textarea>
                </div>
            </div>
            <div class="w-full pt-3">
                <button type="submit"
                    class="w-full px-4 py-2 text-xl font-semibold transition bg-gray-900 border border-indigo-500 cursor-pointer duration-50 focus:outline-none hover:bg-indigo-500 hover:text-white">
                    Send
                </button>
            </div>
        </form>
    </div>


@endsection
