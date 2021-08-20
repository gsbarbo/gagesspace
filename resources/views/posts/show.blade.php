@extends('_layouts.public')

@section('content')

    <div class="pt-8 lg:pt-0"></div>
    <div class="w-full pb-6 mx-auto mt-8 bg-secondary md:w-4/5 lg:w-2/3 rounded-3xl">

        <div class="container">

            <div class="w-full h-48 p-8 bg-gray-900 rounded-lg md:justify-between md:flex"
                style="background: linear-gradient( rgba(0, 0, 0, 0.95), rgba(0, 0, 0, 0.75) ), url('https://images.pexels.com/photos/2061168/pexels-photo-2061168.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');background-repeat: no-repeat;background-position: center;background-size: cover; background-color: rgba(0, 0, 0, .7)">
                <div class="space-y-6 text-xl">

                    <h2 class="text-5xl font-bold text-indigo-600 title">{{ $post->title }}</h2>
                    <p class="text-base">By <a href="#" class="font-bold">{{ $post->user->name }}</a>, Published on
                        {{ date('jS M Y', strtotime($post->created_at)) }}</p>

                    <a href="{{ route('blog.category', $post->category->category_slug) }}"
                        class="pb-4 text-sm font-bold text-blue-600 uppercase">{{ $post->category->category_name }}</a>

                </div>
            </div>

            <div class="flex flex-wrap">
                @auth
                    @if (auth()->user()->id === 2)
                        <div class="flex flex-wrap">
                            <a href="{{ route('blog.edit', $post->slug) }}" class="px-3 py-2 m-3 bg-indigo-600">
                                <i class="fas fa-edit"></i></a>

                            <form action="{{ route('blog.destroy', $post->slug) }}" method="POST" class="">
                                @method('delete')
                                @csrf
                                <button type="submit" class="px-3 py-2 m-3 bg-indigo-600"><i class="fas fa-trash"></i></button>
                            </form>
                        </div>
                    @endif
                @endauth


                <!-- Posts Section -->
                <section class="flex flex-col items-center w-full px-3">

                    <article class="flex flex-col w-full my-4 text-indigo-600">
                        <!-- Article Image -->

                        <div class="p-6">
                            <div class="pb-6 post">{!! $post->description !!}</div>
                        </div>
                    </article>
                </section>

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
