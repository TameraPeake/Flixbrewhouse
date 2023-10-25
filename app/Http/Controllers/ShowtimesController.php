<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movies;

class ShowtimesController extends Controller
{
    //Show show create form
    public function addShowtimes() {
        // dd(request());
        // foreach(Movies::all() as $movie) {
        //     return $movie;
        // }
        return view('movies/addShowtimes', [
            'movies' => Movies::all()
        ]);
    }

    //createShowtimes
    public function createShowtimes(Request $request) {
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
