<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    //for authorize()
    use AuthorizesRequests;

    public function index()
    {
        $posts = Auth::user()->posts()->latest()->paginate(10);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //validate
        $attributes = request()->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        /**
         * you need to update the .env filesystem disk
         * if you want to upload the files in local, public etc then run the php artisan storage:link
         * it will automatically create a folder store('upload')
         */
        $attributes['image'] = request()->file('image')->store('uploads');

        //create
        Auth::user()->posts()->create($attributes);

        //redirect
        return redirect('/posts')->with('success', 'Added successfully');
    }

    public function show(Post $post)
    {
        // ensures the post belongs to the logged in user if not abort
        // if ($post->user_id !== Auth::id()) {
        //     abort(403);
        // }
        // you can do that but if you have a policies then make sure to use AuthorizeRequests
        $this->authorize('view', $post);

        return view('posts.show', [
            'post' => $post
        ]);
    }

    public function edit(Post $post)
    {
        $this->authorize('edit', $post);

        return view('posts.edit', [
            'post' => $post
        ]);
    }

    public function update(Post $post)
    {
        $attributes = request()->validate([
            'title' => 'required|max:30',
            'description' => 'required|max:255',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048'
        ]);

        if (request()->hasFile('image')) {

            //delete old image if exists
            if ($post->image && Storage::exists($post->image)) {
                Storage::delete($post->image);
            }

            //store new image
            $attributes['image'] = request()->file('image')->store('uploads');
        }

        //update only the selected post
        $post->update($attributes);

        //redirect
        return redirect('/posts')->with('success', 'Updated successfully');
    }

    public function destroy(Post $post)
    {
        $this->authorize('destroy', $post);

        $post->delete();

        return redirect('/posts');
    }
}

