@extends('_layouts.public')

@section('content')


    <div class="w-full px-3 py-6 mx-auto mt-8 bg-secondary lg:px-0 md:w-4/5 lg:w-2/3 rounded-3xl">
        <div class="container">
            <div class="flex flex-wrap">

                <!-- Posts Section -->
                <section class="flex flex-col items-center w-full px-3 md:w-2/3">
                    <h2 class="pb-4 text-3xl text-center text-indigo-600 title">Recent Posts</h2>

                    @forelse ($posts as $post)
                        <article class="flex flex-col w-full my-4 text-indigo-600">
                            <!-- Article Image -->
                            <a href="#" class="hover:opacity-75">
                                <img src="{{ $post->image }}">
                            </a>
                            <div class="flex flex-col justify-start p-6 border-2 border-indigo-600">
                                <a href="#" class="pb-4 text-sm font-bold text-white uppercase">Technology</a>
                                <a href="{{ route('blog.show', $post->slug) }}"
                                    class="pb-4 text-3xl font-bold title">{{ $post->title }}</a>
                                <p href="#" class="pb-3 text-sm">
                                    By <a href="#" class="font-semibold ">{{ $post->user_id }}</a>, Published on
                                    {{ date('Y-M-d', strtotime($post->created_at)) }}
                                </p>
                                <a href="#" class="pb-6">{{ $post->post }}..</a>
                                <a href="{{ route('blog.show', $post->slug) }}"
                                    class="text-white uppercase hover:underline">Continue Reading <i
                                        class="fas fa-arrow-right"></i></a>
                            </div>
                        </article>

                    @empty
                        <h1 class="text-indigo-600">No Posts Yet. Check back later!</h1>
                    @endforelse





                </section>

                <!-- Sidebar Section -->
                <aside class="flex flex-col items-center w-full px-3 md:w-1/3">

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
