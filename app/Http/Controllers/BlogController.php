<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index(): View
    {
        $posts = Posts::all();
        return view('blogs.index', compact('posts'));
    }

    public function create(): View
    {
        return view('blogs.create');
    }

    public function store(Request $request): RedirectResponse
    {
        Blog::create($request->validated());
        return redirect()->route('blogs.index')->with('success', 'Message');
    }

    public function show(Posts $blog): View
    {
        return view('blogs.show', compact('blogs'));
    }

    public function edit(Posts $blog): View
    {
        return view('blogs.edit', compact('blogs'));
    }

    public function update(Request $request, Blog $blog): RedirectResponse
    {
        $blog->update($request->validated());
        return redirect()->route('blogs.index')->with('success', 'Message');
    }

    public function destroy(Posts $blog): RedirectResponse
    {
        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Message');
    }
}
