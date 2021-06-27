@extends('_layouts.public')

@section('content')


    <div class="w-full px-3 py-6 mx-auto mt-8 bg-secondary lg:px-0 md:w-4/5 lg:w-2/3 rounded-3xl">
        <div class="container">
            <h2 class="pb-4 text-3xl text-center text-indigo-600 title">Edit Post</h2>

            <form action="{{ route('blog.update', $post->slug) }}" method="POST"
                class="w-full p-6 rounded-lg bg-secondary" enctype="multipart/form-data">
                @method('PUT')

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
                        <label for="title">Title<span class="text-red-600">*</span></label>
                        <input type="text" id="title" name="title" value="{{ $post->title }}"
                            class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-indigo-500 focus:outline-none focus:bg-gray-800 focus:text-indigo-500"
                            autocomplete="off">
                    </div>

                    <div class="flex flex-col mb-3" style="color:black !important;">
                        <label for="description">Description<span class="text-red-600">*</span></label>
                        <textarea rows="4" id="description" name="description">{{ $post->description }}</textarea>
                    </div>

                    <div class="flex justify-center w-full my-6">
                        <label for="is_published" class="flex items-center cursor-pointer">
                            <!-- toggle -->
                            <div class="relative">
                                <input id="is_published" name="is_published" type="checkbox" class="sr-only"
                                    {{ $post->is_published ? 'checked' : '' }} />
                                <div class="w-10 h-4 bg-gray-400 rounded-full shadow-inner"></div>
                                <div class="absolute w-6 h-6 transition bg-white rounded-full shadow dot -left-1 -top-1">
                                </div>
                            </div>
                            <div class="ml-3 font-medium">
                                Publish
                            </div>
                        </label>
                    </div>

                </div>
                <div class="w-full pt-3">
                    <button type="submit"
                        class="w-full px-4 py-2 text-xl font-semibold transition bg-gray-900 border border-indigo-500 cursor-pointer duration-50 focus:outline-none hover:bg-indigo-500 hover:text-white">
                        Save Post
                    </button>
                </div>
            </form>
        </div>

    </div>


@endsection

@section('styles')
    <style>
        input:checked~.dot {
            transform: translateX(100%);
            background-color: #4F46E5;
        }

        .ck-editor__main * {
            color: black !important;
        }

    </style>
@endsection

@section('scripts')
    @include('_inc.ckeditor')
@endsection
