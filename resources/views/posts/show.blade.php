@extends('_layouts.public')

@section('content')


    <div class="w-full px-3 py-6 mx-auto mt-8 bg-secondary lg:px-0 md:w-4/5 lg:w-2/3 rounded-3xl">
        <div class="container">
            <div class="flex flex-wrap">

                <!-- Posts Section -->
                <section class="flex flex-col items-center w-full px-3">

                    <h2 class="pb-4 text-3xl text-center text-indigo-600 title">{{ $post->title }}</h2>


                    <article class="flex flex-col w-full my-4 text-indigo-600">
                        <!-- Article Image -->
                        <a href="#" class="hover:opacity-75">
                            <img class="w-full" src="{{ asset('images/' . $post->image_path) }}">
                        </a>
                        <div class="flex flex-col justify-start p-6 border-2 border-indigo-600">
                            <a href="#" class="pb-4 text-sm font-bold text-white uppercase">Technology</a>
                            <a href="{{ route('blog.show', $post->slug) }}"
                                class="pb-4 text-3xl font-bold title">{{ $post->title }}</a>
                            <p href="#" class="pb-3 text-sm">
                                By <a href="#" class="font-bold">{{ $post->user->name }}</a>, Published on
                                {{ date('jS M Y', strtotime($post->created_at)) }}
                            </p>
                            <div class="pb-6 post">{!! $post->description !!}</div>
                        </div>
                    </article>
                </section>

                @if (Auth::check())
                    <div class="flex flex-wrap mx-auto">
                        <a href="{{ route('blog.create') }}" class="px-3 py-2 m-3 bg-indigo-600">
                            <i class="fas fa-plus"></i> Create Post</a>
                        <a href="{{ route('blog.edit', $post->slug) }}" class="px-3 py-2 m-3 bg-indigo-600">
                            <i class="fas fa-edit"></i> Edit Post</a>

                        <form action="{{ route('blog.destroy', $post->slug) }}" method="POST" class="">
                            @method('delete')
                            @csrf
                            <button type="submit" class="px-3 py-2 m-3 bg-indigo-600"><i class="fas fa-trash"></i>
                                Delete</button>
                        </form>
                    </div>
                @endif

            </div>
        </div>

    </div>


@endsection

@section('styles')
    <style>
        .post>p {
            margin-top: 20px !important;
        }

    </style>
@endsection
