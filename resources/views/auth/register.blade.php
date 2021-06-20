@extends('_layouts.public')

@section('content')

    <div class="w-full px-3 py-6 mx-auto mt-8 md:px-0 md:w-4/5 lg:w-2/3">
        <h1 class="text-3xl font-bold text-center text-indigo-600">Register</h1>
        <p class="text-sm">
            Here you can view updates to your websites as well as help contribute to our Docs and Blog.
        </p>

        <form action="{{ route('register') }}" method="POST" class="w-full p-6 rounded-lg bg-secondary ">
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
                    <label for="password">Password<span class="text-red-600">*</span></label>
                    <input type="password" id="password" name="password" value=""
                        class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-indigo-500 focus:outline-none focus:bg-gray-800 focus:text-indigo-500"
                        autocomplete="off">
                </div>

                <div class="flex flex-col mb-3">
                    <label for="password_confirmation">Confirm Password<span class="text-red-600">*</span></label>
                    <input type="password" id="email" name="password_confirmation" value=""
                        class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-indigo-500 focus:outline-none focus:bg-gray-800 focus:text-indigo-500"
                        autocomplete="off">
                </div>
            </div>
            <a class="text-sm text-gray-500 underline hover:text-gray-100" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>
            <div class="w-full pt-3">
                <button type="submit"
                    class="w-full px-4 py-2 text-xl font-semibold transition bg-gray-900 border border-indigo-500 cursor-pointer duration-50 focus:outline-none hover:bg-indigo-500 hover:text-white">
                    Register
                </button>
            </div>
        </form>


    </div>

@endsection




{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 text-gray-500 fill-current" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block w-full mt-1" type="email" name="email" :value="old('email')"
                    required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block w-full mt-1" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block w-full mt-1" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
