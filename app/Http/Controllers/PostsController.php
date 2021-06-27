<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostStoreRequest;
use App\Models\Post;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function index(): View
    {
        $posts = Post::where('is_published', 1)->orderBy('updated_at', 'DESC')->get();
        return view('posts.index', compact('posts'));
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(PostStoreRequest $request): RedirectResponse
    {
        $is_published = 0;

        if (!is_null($request->input('is_published'))) {
            $is_published = 1;
        }

        $slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        $newImageName = uniqid() . '-' . $slug . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $newImageName);

        Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $slug,
            'image_path' => $newImageName,
            'user_id' => auth()->user()->id,
            'is_published' => $is_published,
        ]);

        return redirect()->route('blog.index')->with('success', 'Post Created!');
    }

    public function show(Post $slug): View
    {
        $post = $slug;
        return view('posts.show', compact('post'));
    }

    public function edit(Post $slug): View
    {
        $post = $slug;

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $slug): RedirectResponse
    {
        $is_published = 0;

        if (!is_null($request->input('is_published'))) {
            $is_published = 1;
        }

        $new_slug = SlugService::createSlug(Post::class, 'slug', $request->title);

        $slug->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'slug' => $new_slug,
            'is_published' => $is_published,
        ]);

        return redirect()->route('blog.index')->with('success', 'Post has been updated!');
    }

    public function destroy(Post $slug): RedirectResponse
    {
        $slug->delete();
        return redirect()->route('blog.index')->with('success', 'Post has been deleted!');
    }

    public function image_upload()
    {

        $post = new Post();
        $post->id = 0;
        $post->exists = true;
        $image = $post->addMediaFromRequest('upload')->toMediaCollection('images');

        return response()->json([
            'url' => $image->getUrl('thumb'),
        ]);
    }
}
