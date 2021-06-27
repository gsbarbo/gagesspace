@extends('_layouts.public')

@section('content')


    <div class="w-full px-3 py-6 mx-auto mt-8 bg-secondary lg:px-0 md:w-4/5 lg:w-2/3 rounded-3xl">
        <div class="container">
            <div class="flex flex-wrap">

                <!-- Posts Section -->
                <section class="flex flex-col items-center w-full px-3 md:w-2/3">
                    <h2 class="pb-4 text-3xl text-center text-indigo-600 title">{{ $page_title }}</h2>

                    @forelse ($posts as $post)
                        <article class="flex flex-col w-full my-4 text-indigo-600">
                            <!-- Article Image -->
                            <a href="{{ route('blog.show', $post->slug) }}" class="hover:opacity-75">
                                <img class="w-full" src="{{ asset('images/' . $post->image_path) }}">
                            </a>
                            <div class="flex flex-col justify-start p-6 border-2 border-indigo-600">
                                <a href="{{ route('blog.category', $post->category->category_slug) }}"
                                    class="pb-4 text-sm font-bold text-white uppercase">{{ $post->category->category_name }}</a>
                                <a href="{{ route('blog.show', $post->slug) }}"
                                    class="pb-4 text-3xl font-bold title">{{ $post->title }}</a>
                                <p class="pb-3 text-sm">
                                    By <a href="#" class="font-bold">{{ $post->user->name }}</a>, Created on
                                    {{ date('jS M Y', strtotime($post->created_at)) }}
                                </p>
                                <div class="pb-6">

                                    @if (strlen($post->description) > 200)
                                        {{ substr($post->description, 3, 200) . '...' }}
                                    @else
                                        {!! $post->description !!}
                                    @endif

                                </div>
                                <a href="{{ route('blog.show', $post->slug) }}"
                                    class="text-white uppercase hover:underline">Continue Reading
                                    <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>

                    @empty
                        <h1 class="text-indigo-600">No Posts Yet. Check back later!</h1>
                    @endforelse

                </section>

                <!-- Sidebar Section -->
                <aside class="flex flex-col w-full px-3 md:w-1/3">
                    <div class="flex flex-wrap mx-auto">
                        <a href="{{ route('blog.create') }}" class="px-3 py-2 m-3 bg-indigo-600">
                            <i class="fas fa-plus"></i> Create Post</a>
                        <a href="{{ route('blog.index') }}" class="px-3 py-2 m-3 bg-indigo-600">
                            <i class="fas fa-eye"></i> View Hidden Posts</a>
                    </div>

                    <div class="flex flex-col w-full p-6 my-4 border-2 border-indigo-600">
                        <p class="pb-5 text-xl font-semibold text-indigo-600 underline">Catagories</p>
                        <a href="{{ route('blog.index') }}" class="pb-2 hover:underline">All Posts</a>
                        @foreach ($categories as $category)
                            <a href="{{ route('blog.category', $category->category_slug) }}"
                                class="pb-2 hover:underline">{{ $category->category_name }}</a>
                        @endforeach

                    </div>

                </aside>
            </div>
        </div>

    </div>


@endsection
