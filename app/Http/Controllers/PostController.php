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
	    
	    	$post->save();
	}
}
