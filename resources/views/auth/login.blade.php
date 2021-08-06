@extends('_layouts.public')

@section('content')

    <div class="w-full px-3 py-6 mx-auto mt-8 md:px-0 md:w-4/5 lg:w-2/3">
        <h1 class="text-3xl font-bold text-center text-indigo-600">Login</h1>

        <form action="{{ route('login') }}" method="POST" class="w-full p-6 rounded-lg bg-secondary ">
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


            </div>
            <a class="text-sm text-gray-500 underline hover:text-gray-100" href="{{ route('register') }}">
                {{ __('Register') }}
            </a>
            <div class="w-full pt-3">
                <button type="submit"
                    class="w-full px-4 py-2 text-xl font-semibold transition bg-gray-900 border border-indigo-500 cursor-pointer duration-50 focus:outline-none hover:bg-indigo-500 hover:text-white">
                    Login
                </button>
            </div>
        </form>


    </div>

@endsection
