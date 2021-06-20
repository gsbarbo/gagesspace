<header id="top" class="fixed flex flex-col w-full bg-primary lg:relative pin-t pin-r pin-l">
    <nav id="site-menu"
        class="flex flex-col items-center justify-between w-full px-4 py-1 mx-auto shadow lg:w-4/5 bg-primary lg:flex-row lg:px-6 lg:shadow-none">
        <div
            class="flex flex-row flex-no-wrap items-center self-start justify-between w-full lg:w-auto lg:self-center lg:flex-none">
            <a href="#" class="block text-2xl font-bold text-indigo-600">
                Gage's Space
            </a>
            <button id="menuBtn" class="block hamburger lg:hidden focus:outline-none" type="button"
                onclick="navToggle();">
                <span class="bg-white hamburger__top-bun"></span>
                <span class="bg-white hamburger__bottom-bun"></span>
            </button>
        </div>
        <div id="menu"
            class="flex-col items-center self-end hidden w-full h-full py-1 pb-4 pl-10 lg:w-auto lg:self-center lg:flex lg:flex-row lg:py-0 lg:pb-0">
            <a href="{{ route('home') }}"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Home</a>
            <a href="#top"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">About</a>
            <a href="#skills"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Skills</a>
            <a href="#projects"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Projects</a>
            <a href="#contact"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Contact</a>
            <a href="#"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Blog</a>
            <a href="#"
                class="block w-full py-2 font-semibold hover:underline lg:w-auto lg:px-4 lg:py-1 lg:pt-2">Docs</a>
        </div>
    </nav>
</header>
