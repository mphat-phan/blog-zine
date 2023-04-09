<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    // Show all Posts
    public function index(){
        $posts = Post::latest()->filter(request(['search','tags']))->paginate(2);
        if(count($posts) == 0){
            abort(404, 'Not Found');
        }
        // dd($posts);
        return view('pages.posts', [
            'posts' => $posts,
        ]);
    }

    // Show all Single Posts
    public function show(Request $request){
        $postId = $request->id;
        $post = Post::find($postId);
        $posts = Post::limit(2)->get();
        return view('pages.post', [
            'post' => $post,
            'posts' => $posts
        ]);
    }

    public function manage(Request $request){
        $user_id = auth()->id();
        $posts = Post::where('user_id', $user_id)->orderBy('created_at','DESC')->get();
        return view('pages.manage.post-manage', [
            'posts' => $posts
        ]);
    }

    public function create(Request $request){
        return view('pages.manage.post-add');
    }


    public function edit(Post $post){
        return view('pages.manage.post-edit', [
            'post' => $post
        ]);
    }

    public function store(Request $request){
        $form = $request->validate([
            'title' => ['required', 'min:6'],
            'summary' => ['required', 'min:6'],
            'content' => ['required', 'min:6'],
        ]);

        $form['slug'] = Str::slug($form['title'], '-');

        if(is_null($request['metaTitle'])){
            $form['metaTitle'] = $request['title'];
        }
        else{
            $form['metaTitle'] = $request['metaTitle'];
        }

        if($request->hasFile('image')){
            $imageName = current(explode('.',$request['image']->getClientOriginalName()));
            $form['image'] = $imageName.'-'.random_int(100000, 999999).'.'.$request['image']->getClientOriginalExtension();
            // Di chuyển ảnh
            $image = $request->file('image');
            $image->move('images', $form['image']);
        }

        $form['user_id'] = auth()->id();
        Post::create($form);

        return redirect('/posts/manage')->with('message', 'Post created successfully!');
    }

    public function update(Request $request, Post $post){
        $form = $request->validate([
            'title' => ['required', 'min:6'],
            'summary' => ['required', 'min:6'],
            'content' => ['required', 'min:6'],
        ]);

        $form['slug'] = Str::slug($form['title'], '-');

        if(is_null($request['metaTitle'])){
            $form['metaTitle'] = $request['title'];
        }
        else{
            $form['metaTitle'] = $request['metaTitle'];
        }

        if($request->hasFile('image')){
            $imageName = current(explode('.',$request['image']->getClientOriginalName()));
            $form['image'] = $imageName.'-'.random_int(100000, 999999).'.'.$request['image']->getClientOriginalExtension();
            // Di chuyển ảnh
            $image = $request->file('image');
            $image->move('images', $form['image']);

            $filePath = 'images/'.$post->image;

            if(File::exists($filePath)){
                File::delete($filePath);
            }
        }
        $post->update($form);

        return back()->with('message', 'Post updated successfully!');
    }

    public function destroy(Post $post){
        $filePath = 'images/'.$post->image;

        if(File::exists($filePath)){
            File::delete($filePath);
        }

        $post->delete();
        return redirect('/posts/manage')->with('message', 'Post Deleted successfully!');
    }
}
