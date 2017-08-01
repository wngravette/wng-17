<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Post;

class FrontendController extends Controller
{
    public function index() {
        $posts = Post::all()->sortBy('created_at');

        foreach ($posts as $post) {

            $time = Carbon::parse($post->created_at);
            $post->time = $time->diffForHumans();
        }

        return view('welcome', [
            'posts' => $posts,
        ]);
    }
}
