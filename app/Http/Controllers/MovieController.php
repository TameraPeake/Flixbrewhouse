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
            'poster' => 'required',
        ]);

        if($request->hasFile('poster')) {
            $formFields['poster'] = $request->file('poster')->store('/poster', ['disk' => 'public']); //this stores it in the public/storage/poster folder
        }

        if($request->hasFile('banner')) {
            $formFields['banner'] = $request->file('banner')->store('/banner', ['disk' => 'public']); //this stores it in the public/storage/banner folder
        }

        /*
            Symlinks - because laravel is weird, it doesn't upload files directly to the public folder.
            it wants to keep the public folder clear for public files. Instead if loads files into the storage/app/public
            folder. You can update that using filesystems.php

            https://stackoverflow.com/questions/51676037/laravel-storage-symlink

            https://laracasts.com/discuss/channels/laravel/why-should-i-create-symbolic-link-in-laravel

         */

        //for sitespeed, I don't want to upload the actual trailer...I could use youtube links
        // if($request->hasFile('trailer')) {
        //     $formFields[''] = $request->file('')->store('', 'public'); //this stores it in the public/storate/poster folder
        // }

        Movies::create($formFields);

        return redirect('/')->with('message', 'Movie created successfully!');
    }

}
