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

    <section class="py-12 text-gray-600 body-font" id="about">

        <div class="container flex flex-col px-5 mx-auto">
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

                        <a onclick="show_full_about()" id="read_more"
                            class="text-lg text-indigo-600 cursor-pointer hover:underline">Read
                            More...</a>

                        <p id="" class="hidden mb-2 leading-relaxed hidden_about">Present day I haven't expanded my client
                            base very much. I
                            have continued my learning with eSports organizations websites and FiveM communities. These
                            communities/organizations come and go without much thought. I am now starting to build my own
                            portfolio with different open source web applications. To do this I am looking for more real
                            life clients to get their business online in
                            a world changed due to COVID19.</p>
                        <p id="" class="hidden mb-2 leading-relaxed hidden_about">If you are interested in working with me
                            on
                            your next online
                            project
                            feel free to message me using the form below. I do have a full time overnight job but I will
                            email you back with a time and date that we can have a phone call. If you're not convinced check
                            out my projects below!</p>

                        <a onclick="hide_full_about()" id="hide_more"
                            class="hidden text-lg text-indigo-600 cursor-pointer hover:underline hidden_about">Hide Full
                            About...</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 text-gray-600 body-font" id="skills">
        <div class="container px-5 mx-auto">
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

    <section class="py-12 text-gray-600 body-font" id="services">
        <div class="container px-5 mx-auto">
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
                        <a class="inline-flex items-center text-lg text-indigo-600 cursor-pointer hover:underline"
                            href="{{ route('services.webdesign') }}">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
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
                        <p class="text-base leading-relaxed">More than a website! Need a schedule system for your
                            employees?
                            Check! Need a support ticket system to track renter issues? Check! Web Applications can be
                            used to make your life easier!</p>
                        <a class="inline-flex items-center text-lg text-indigo-600 cursor-pointer hover:underline"
                            href="{{ route('services.webapp') }}">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
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
                        <h2 class="mb-4 text-xl font-semibold tracking-widest text-center text-indigo-600">Photography
                            <span class="text-xs text-red-400">NEW</span>
                        </h2>
                        <p class="text-base leading-relaxed">A new service of mine. I have 3 years of experiance at high
                            school sporting events with my brother and sister. Some of my pictures will be available soon!
                        </p>
                        <a class="inline-flex items-center text-lg text-indigo-600 cursor-pointer hover:underline"
                            href="{{ route('services.photography') }}">Learn More
                            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
                                <path d="M5 12h14M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-12 text-gray-400 body-font" id="projects">
        <div class="container px-5 mx-auto">
            <div class="mb-20 text-center">
                <h1 class="text-3xl font-bold text-indigo-600">Projects</h1>
                <p class="mx-auto text-base leading-relaxed xl:w-2/4 lg:w-3/4 text-gray-500s">This is just some of the
                    projects that I have completed. This is not a complete list, just what I can publicy share the source
                    code.</p>
                <div class="flex justify-center mt-6">
                    <div class="inline-flex w-16 h-1 bg-indigo-500 rounded-full"></div>
                </div>
            </div>
            <div class="flex flex-wrap -m-4">
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="p-6 border border-gray-700 border-opacity-75 rounded-lg">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-400 bg-gray-800 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-semibold text-indigo-600 title-font">FiveM CAD/MDT System
                            <span class="text-xs text-red-400">WIP</span>
                        </h2>
                        <p class="text-base leading-relaxed">This is a police type CAD/MDT system for roleplay communities.
                            This is a work in progress to open source it. It includes everything from applications to
                            whitelisting while still a fully functional MDT!</p>
                        <div class="flex justify-between my-2">
                            <a href="https://github.com/gsbarbo/Fivem-Cad" target="_blank"
                                class="text-lg text-indigo-600 cursor-pointer hover:underline">Github</a>

                            <a href="https://cadv4.gagesspace.dev/" target="_blank"
                                class="text-lg text-indigo-600 cursor-pointer hover:underline">Demo</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="p-6 border border-gray-700 border-opacity-75 rounded-lg">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-400 bg-gray-800 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
                            </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-semibold text-indigo-600 title-font">Laravel Admin Template
                        </h2>
                        <p class="text-base leading-relaxed">An admin template for Laravel with Spatie Permissions and
                            TailwindCSS. Also includes simple designed pages to manage roles, permissions and users.
                            Currently working to make into a NPM package.</p>
                        <div class="flex justify-between my-2">
                            <a href="https://github.com/gsbarbo/laravel-admin-template" target="_blank"
                                class="text-lg text-indigo-600 cursor-pointer hover:underline">Github</a>
                        </div>
                    </div>
                </div>
                <div class="p-4 xl:w-1/3 md:w-1/2">
                    <div class="p-6 border border-gray-700 border-opacity-75 rounded-lg">
                        <div
                            class="inline-flex items-center justify-center w-10 h-10 mb-4 text-indigo-400 bg-gray-800 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                            </svg>
                        </div>
                        <h2 class="mb-2 text-lg font-semibold text-indigo-600 title-font">Gage's Space Website
                        </h2>
                        <p class="text-base leading-relaxed">New and improved website for Gage's Space. Will feature a blog
                            and documention for my projects. Be sure to look around and fell free to use
                            the contact form on the bottom to reach me!</p>
                        <div class="flex justify-between my-2">
                            <a href="https://github.com/gsbarbo/gagesspace" target="_blank"
                                class="text-lg text-indigo-600 cursor-pointer hover:underline">Github</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-12 text-gray-600 body-font" id="contact">
        <div class="container px-5 mx-auto">
            <div class="mb-12 text-center">
                <h1 class="text-3xl font-bold text-indigo-600">Contact Me!</h1>
                <p class="mx-auto text-base leading-relaxed xl:w-2/4 lg:w-3/4 text-gray-500s">
                    Send me an email today to see how I can help you grow your online presence!</p>
                <div class="flex justify-center mt-6">
                    <div class="inline-flex w-16 h-1 bg-indigo-500 rounded-full"></div>
                </div>
            </div>
            <div class="mx-auto lg:w-1/2 md:w-2/3">
                <form action="{{ route('send.email') }}" method="POST">
                    @if ($errors->any())
                        <div class="___class_+?141___">
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
                    <div class="flex flex-wrap -m-2">

                        <div class="w-1/2 p-2">
                            <div class="relative">
                                <label for="name" class="leading-7 text-indigo-600">Name</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="w-full px-3 py-1 text-base leading-8 text-gray-300 transition-colors duration-200 ease-in-out bg-gray-900 bg-opacity-50 border border-indigo-300 rounded outline-none focus:border-indigo-500 focus:bg-gray-700 focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>
                        <div class="w-1/2 p-2">
                            <div class="relative">
                                <label for="email" class="leading-7 text-indigo-600">Email</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="w-full px-3 py-1 text-base leading-8 text-gray-300 transition-colors duration-200 ease-in-out bg-gray-900 bg-opacity-50 border border-indigo-300 rounded outline-none focus:border-indigo-500 focus:bg-gray-700 focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>
                        <div class="w-full p-2">
                            <div class="relative">
                                <label for="message" class="leading-7 text-indigo-600">Message</label>
                                <textarea id="message" name="message" oncopy="return false" onpaste="return false"
                                    class="w-full h-32 px-3 py-1 text-base leading-8 text-gray-300 transition-colors duration-200 ease-in-out bg-gray-900 bg-opacity-50 border border-indigo-300 rounded outline-none focus:border-indigo-500 focus:bg-gray-700 focus:ring-2 focus:ring-indigo-200">{{ old('message') }}</textarea>
                            </div>
                        </div>

                        <div class="w-full p-2">
                            <div class="relative">
                                <label for="captcha" class="block leading-7 text-indigo-600">Captcha</label>
                                <p class="py-2 text-sm">To protect against spam please answer the following question:</p>
                                <span>2 + 8 = </span>
                                <input id="captcha" name="captcha"
                                    class="w-1/12 px-3 py-1 text-base leading-8 text-gray-300 transition-colors duration-200 ease-in-out bg-gray-900 bg-opacity-50 border border-indigo-300 rounded outline-none focus:border-indigo-500 focus:bg-gray-700 focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>

                        <div class="w-full p-2">
                            <button
                                class="flex px-8 py-2 mx-auto text-lg text-white bg-indigo-600 border-0 rounded focus:outline-none hover:bg-indigo-800">Send</button>
                        </div>
                        <div class="w-full p-2 pt-8 mt-8 text-center border-t border-gray-200">
                            <a class="text-indigo-500 hover:underline"
                                href="mailto:gagesspace@outlook.com">gagesspace@outlook.com</a>
                            <br>
                            <a class="text-indigo-500 hover:underline"
                                href="mailto:hello@gages.space">hello@gages.space</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </section>

    <script>
        const hidden_divs = document.getElementsByClassName("hidden_about");
        const read_more = document.getElementById('read_more');
        const hide_more = document.getElementById('hide_more');

        function show_full_about() {


            for (var i = 0; i < hidden_divs.length; i++) {
                hidden_divs[i].classList.remove('hidden');
            }

            read_more.classList.add('hidden');

        }

        function hide_full_about() {
            for (var i = 0; i < hidden_divs.length; i++) {
                hidden_divs[i].classList.add('hidden');
            }

            read_more.classList.remove('hidden');
        }
    </script>


@endsection
