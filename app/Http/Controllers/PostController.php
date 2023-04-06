<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

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
}
