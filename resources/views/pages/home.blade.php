@extends('_layouts.public')

@section('content')

    <div class="w-full px-3 py-6 mx-auto mt-8 text-center md:px-0 md:w-4/5 lg:w-2/3">
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

    <div class="w-full px-3 py-6 mx-auto mt-8 md:px-0 md:w-4/5 lg:w-2/3" id="about">
        <h1 class="text-3xl font-bold text-indigo-600">About Me</h1>
        <div class="px-3 mt-3 md:flex">
            <img src="{{ asset('images/me.png') }}" alt="Me!" class="block w-48 h-48 m-auto rounded-full md:mr-4">
            <div class="text-sm">
                <p class="my-2">It all started in 2013 when I tried out for a professional StarCraft 2 Team. I didn't make
                    the competitive team but did meet their web developer from New Zealand. He inspired me to learn the
                    website and to grow my knowledge. Little did I know it would lead to a life long passion.</p>
                <p class="my-2">My Senior year in high school I created my first public website for an actual client, a
                    thrift shop in my local town. This was my first major project. The website needed to have a CMS (Content
                    Management System) that way she could update the website. Even though this website didn't last long I
                    learned a great deal about web development by trial and error.</p>
                <p class="my-2">Present day I haven't expanded my client base very much. I have continued my learning with
                    eSports organizations websites and FiveM communities. These communities/organizations come and go
                    without much thought. I am now starting to build my own portfolio with different open source web
                    applications. To do this I am looking for more real life clients to get their business online in a world
                    changed due to COVID19.</p>
                <p class="my-2">If you are interested in working with me on your next online project feel free to message me
                    using the form below. I do have a full time overnight job but I will email you back with a time and date
                    that we can have a phone call. If you're not convinced check out my projects below!</p>
            </div>
        </div>
    </div>

    <div class="w-full px-3 py-6 mx-auto mt-8 md:px-0 md:w-4/5 lg:w-2/3" id="skills">
        <h1 class="text-3xl font-bold text-indigo-600">Skills</h1>
        <div class="flex flex-wrap justify-between px-3 mt-3 md:flex-row">

            <div>
                <h3 class="text-2xl font-semibold">Frontend</h3>
                <ul class="ml-5 text-base">
                    <li class="skill-item">HTML, CSS, SASS</li>
                    <li class="skill-item">Bootstrap V4 & V5</li>
                    <li class="skill-item">Tailwind CSS</li>
                </ul>
            </div>

            <div>
                <h3 class="text-2xl">Backend</h3>
                <ul class="ml-5 text-base">
                    <li class="skill-item">PHP</li>
                    <li class="skill-item">Codeigniter</li>
                    <li class="skill-item">Laravel</li>
                </ul>
            </div>

            <div>
                <h3 class="text-2xl">Other</h3>
                <ul class="ml-5 text-base">
                    <li class="skill-item">Laravel Livewire</li>
                    <li class="skill-item">Git</li>
                    <li class="skill-item">VSCode</li>
                </ul>
            </div>

        </div>
    </div>

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
