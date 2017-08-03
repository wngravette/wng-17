<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Post;

class FrontendController extends Controller
{
    public function index() {
        $posts = Post::all()->sortByDesc('created_at');

        foreach ($posts as $post) {

            $time = Carbon::parse($post->created_at);
            $post->time = $time->diffForHumans();

            if($post->link !== NULL) {
                $url_array = parse_url($post->link);
                $post->link_site = $url_array['host'];

                $url = "http://api.linkpreview.net/?key=5982d0aca9782376d16bcfb665a865b9c932ebb072894&q=" . $post->link;
                $link_details = json_decode(file_get_contents($url), true);
                $post->link_name = $link_details['title'];
            }
        }

        return view('welcome', [
            'posts' => $posts,
        ]);
    }
}
