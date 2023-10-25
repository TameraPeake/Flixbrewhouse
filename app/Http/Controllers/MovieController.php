<?php

namespace App\Http\Controllers;

use auth;
use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;

class MovieController extends Controller
{

    //Show movie create form
    public function addMovies() {
        return view('movies/addMovies');
    }

    //createMovie
    public function createMovie(Request $request) {
        $formFields = $request->validate([
            'title' => ['required', Rule::unique('movies', 'title')],
            'rating' => 'required',
            'length' => 'required',
            'director' => 'required',
            'stars' => 'required',
            'synopsis' => 'required',
            'trailer' => 'required',
        ]);

        if($request->hasFile('poster')) {
            $formFields['poster'] = $request->file('poster')->store('/poster', 'public'); //this stores it in the public/storate/poster folder
        }

        if($request->hasFile('banner')) {
            $formFields['banner'] = $request->file('banner')->store('/banner', 'public'); //this stores it in the public/storate/banner folder
        }


        //for sitespeed, I don't want to upload the actual trailer...I could use youtube links
        // if($request->hasFile('trailer')) {
        //     $formFields[''] = $request->file('')->store('', 'public'); //this stores it in the public/storate/poster folder
        // }

        Movies::create($formFields);

        return redirect('/')->with('message', 'Movie created successfully!');
    }

}
