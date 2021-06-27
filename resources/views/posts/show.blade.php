@extends('_layouts.public')

@section('content')


    <div class="w-full px-3 py-6 mx-auto mt-8 bg-secondary lg:px-0 md:w-4/5 lg:w-2/3 rounded-3xl">
        <div class="container">
            <div class="flex flex-wrap">

                <!-- Posts Section -->
                <section class="flex flex-col items-center w-full px-3 md:w-2/3">
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
                            <a href="#" class="pb-6">{{ $post->description }}..</a>
                        </div>
                    </article>
                </section>

                <!-- Sidebar Section -->
                <aside class="flex flex-col items-center w-full px-3 md:w-1/3">

                    @if (Auth::check())
                        <div class="w-4/5 m-auto pt-15">
                            <a href="{{ route('blog.create') }}" class="px-3 py-2 bg-indigo-600"><i
                                    class="fas fa-plus"></i> Create Post</a>
                        </div>

                        @if (true)
                            <div class="w-4/5 m-auto pt-15">
                                <a href="{{ route('blog.edit', $post->slug) }}" class="px-3 py-2 bg-indigo-600"><i
                                        class="fas fa-edit"></i> Edit Post</a>
                            </div>
                        @endif

                        @if (true)
                            <form action="{{ route('blog.destroy', $post->slug) }}" method="POST" class="">
                                @method('delete')
                                @csrf
                                <button type="submit" class="px-3 py-2 bg-indigo-600"><i class="fas fa-trash"></i>
                                    Delete</button>
                            </form>
                        @endif
                    @endif

                    <div class="flex flex-col w-full p-6 my-4 border-2 border-indigo-600">
                        <div class="flex justify-between">
                            <p class="pb-5 text-xl font-semibold text-indigo-600">Catagories</p>
                            <a href="#" class="pb-2">View All Posts</a>
                        </div>
                        <a href="#" class="pb-2 hover:underline">Technology</a>
                        <a href="#" class="pb-2 hover:underline">Software</a>
                        <a href="#" class="pb-2 hover:underline">Off Topic</a>
                        <a href="#" class="pb-2 hover:underline">About Me</a>
                    </div>


                </aside>
            </div>
        </div>

    </div>


@endsection
