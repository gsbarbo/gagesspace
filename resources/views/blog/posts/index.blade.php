@extends('_layouts.public')

@section('content')

    <div class="w-11/12 pt-8 mx-auto md:w-3/5 sm:pt-12 lg:pt-0">

        <div class="py-4 text-center border-b">
            <h2 class="text-3xl font-semibold text-indigo-600 title">Gage's Space Blog</h2>
        </div>

        <div class="flex flex-wrap my-3 space-x-4 lg:justify-between">

            @foreach ($categories as $item)
                <a class="underline hover:text-gray-100"
                    href="{{ route('blog.category', $item->category_slug) }}">{{ $item->category_name }}</a>
            @endforeach

            <a class="underline hover:text-gray-100" href="{{ route('blog.index') }}">All Posts</a>

        </div>

        <div class="p-8 bg-gray-900 rounded-lg md:justify-between md:flex"
            style="background: linear-gradient( rgba(0, 0, 0, 0.95), rgba(0, 0, 0, 0.75) ), url('https://images.pexels.com/photos/532173/pexels-photo-532173.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-repeat: no-repeat;background-position: center;background-size: cover; background-color: rgba(0, 0, 0, .7)">
            <div class="space-y-6 text-xl md:w-1/2">

                <h2 class="text-5xl font-bold text-indigo-600 title">{{ $featured_post->title }}</h2>

                <p class="">
                    @if (strlen($featured_post->description) > 200)
                        {{ substr($featured_post->description, 3, 200) . '...' }}
                    @else
                        {!! $featured_post->description !!}
                    @endif
                </p>

                <a href="{{ route('blog.show', $featured_post->slug) }}"
                    class="mt-5 font-bold text-white underline uppercase">Continue
                    Reading...</a>

            </div>
            <img class="mx-auto mt-5 md:mt-0 h-36" src="{{ asset('images/' . $featured_post->image_path) }}">
        </div>

        <h2 class="my-8 text-2xl font-bold text-center text-indigo-600 title">{{ $page_title }}</h2>

        <div class="flex flex-wrap">

            @foreach ($posts as $post)
                <div class="w-full xl:w-1/2">
                    <div class="flex justify-between p-2 m-1 border">
                        <div class="">
                            <a href="{{ route('blog.category', $post->category->category_slug) }}"
                                class="text-sm text-blue-500 hover:underline">{{ $post->category->category_name }}</a>
                            <h3 class="text-xl text-indigo-600 title">{{ $post->title }}</h3>
                            <p class="">
                                @if (strlen($post->description) > 200)
                                    {{ substr($post->description, 3, 200) . '...' }}
                                @else
                                    {!! $post->description !!}
                                @endif
                            </p>

                            <a href="{{ route('blog.show', $post->slug) }}"
                                class="font-bold text-white underline uppercase">Continue
                                Reading...</a>

                        </div>

                        <div class="">
                            <img class="mx-auto mt-5 md:mt-0 h-36"
                                src="{{ asset('images/' . $featured_post->image_path) }}">
                        </div>

                    </div>

                </div>
            @endforeach

        </div>
    </div>
@endsection
