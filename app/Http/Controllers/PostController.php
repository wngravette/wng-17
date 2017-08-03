<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function store(Request $data)
	{
		$post = new Post;
	    	$post->post = $data->post;
	    	$post->word_count = str_word_count($data->post);

            if ($data->link) {
                $url_array = parse_url($data->link);
                $url = "http://api.linkpreview.net/?key=5982d0aca9782376d16bcfb665a865b9c932ebb072894&q=" . $data->link;
                $link_details = json_decode(file_get_contents($url), true);
                $post->link_name = $link_details['title'];
                $post->link_website = $url_array['host'];
                $post->link = $data->link;
            }

	    	$post->save();
	}
}
