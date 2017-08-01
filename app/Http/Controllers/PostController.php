<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostController extends Controller
{
    public function store(Request $request) 
	{
		$post = new Post;
	    	$input = $request->input;
	    	$post->post = $input->post;
	    	$post->word_count = str_word_count($input->post);
	    
	    	$post->save();
	}
}
