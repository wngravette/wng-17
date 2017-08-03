<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Essay;

class EssayController extends Controller
{
    public function view()
    {
        return view('essay');
    }

    public function store(Request $data)
    {
        $essay = new Essay;

    	$essay->essay = $data->essay;
        $essay->word_count = $data->word_count;
        $essay->publication_year = $data->publication_year;
        $essay->slug = $data->slug;
        $essay->title = $data->title;

    	$essay->save();
    }

    public function show($id)
    {
        $essay = Essay::find($id);

        return view('essay', ['essay' => $essay]);
    }
}
