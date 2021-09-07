<header id="top" class="fixed top-0 right-0 z-50 flex flex-col w-full bg-primary lg:relative pin-t pin-r pin-l"
    x-data="{ mobileMenuOpen : false }">
    <nav id="site-menu"
        class="flex flex-col items-center justify-between w-full px-4 py-1 mx-auto shadow lg:w-4/5 bg-primary lg:flex-row lg:px-6 lg:shadow-none">
        <div
            class="flex flex-row flex-no-wrap items-center self-start justify-between w-full lg:w-auto lg:self-center lg:flex-none">
            <a href="#" class="block text-2xl font-bold text-indigo-600">
                Gage's Space
            </a>
            <button id="menuBtn" class="block hamburger lg:hidden focus:outline-none" type="button"
                aria-label="Mobile Menu" @click="mobileMenuOpen = !mobileMenuOpen">
                <span class="bg-white hamburger__top-bun"></span>
                <span class="bg-white hamburger__bottom-bun"></span>
            </button>
        </div>
        <div id="menu" @click.away="mobileMenuOpen = false"
            :class="{ 'flex' : mobileMenuOpen , 'hidden' : !mobileMenuOpen}"
            class="flex-col items-center self-end hidden w-full h-full py-1 pb-4 pl-10 lg:w-auto lg:self-center lg:flex lg:flex-row lg:py-0 lg:pb-0">
            <a href="{{ route('home') }}#top" @click="mobileMenuOpen = false"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Home</a>
            <a href="{{ route('home') }}#about" @click="mobileMenuOpen = false"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">About</a>
            <a href="{{ route('home') }}#skills" @click="mobileMenuOpen = false"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Skills</a>
            <a href="{{ route('home') }}#services" @click="mobileMenuOpen = false"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Services</a>
            <a href="{{ route('home') }}#projects" @click="mobileMenuOpen = false"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Projects</a>
            <a href="{{ route('home') }}#contact" @click="mobileMenuOpen = false"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Contact</a>
            {{-- <a href="{{ route('blog.index') }}" @click="mobileMenuOpen = false"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Blog</a>
            <a href="#" @click="mobileMenuOpen = false"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Docs</a> --}}
            {{-- @guest
                <a href="{{ route('login') }}" @click="mobileMenuOpen = false"
                    class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Login</a>
                <a href="{{ route('register') }}" @click="mobileMenuOpen = false"
                    class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Register</a>
            @endauth
            @auth
                <div class="relative block w-full" x-data="{open: false}">
                    <button @click="open = !open"
                        class="block w-full py-2 font-semibold text-left hover:underline lg:px-4 lg:py-1 lg:pt-2"
                        :class="{'font-semibold': open, 'shadow-none': open}">
                        {{ auth()->user()->name }}
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'rotate-180': open}"
                            class="inline-block w-6 h-6 ml-1 text-gray-500 transform fill-current">
                            <path fill-rule="evenodd"
                                d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z" />
                        </svg>
                    </button>

                    <ul x-show="open" @click.away="open = false"
                        class="absolute w-full py-1 mt-2 text-indigo-600 rounded shadow lg:w-40 bg-primary"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform -translate-y-2"
                        x-transition:enter-end="opacity-100 transform translate-y-0"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-end="opacity-0 transform -translate-y-3">
                        <li><a href="#" class="block px-3 py-1 hover:bg-gray-600">Profile</a></li>
                        <li><a href="#" class="block px-3 py-1 hover:bg-gray-700">Admin</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a href="#" class="block px-3 py-1 border-t hover:bg-gray-700"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Log out</a>
                            </form>
                        </li>
                    </ul>
                </div>
            @endauth --}}
        </div>
    </nav>
</header>
