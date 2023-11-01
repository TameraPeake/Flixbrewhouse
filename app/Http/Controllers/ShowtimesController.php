<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

        // var_dump($request); die();
        $formFields = $request->validate([
            'movies' => ['required', Rule::unique('showtimes', 'movieTitle')],
            'movieDate' => 'required',
            'movieTime1' => 'required',
            'movieTime2' => 'required'
        ]);


        if($request->has('movieTime1')) {
            $formFields['movieTime1Begin'] = $request->input('movieTime1');
            $chosenMovieLength = Movies::find($request->input('movies'))->length; //find the length of the film
            $chosenMovieNum = preg_replace("/[^0-9]/", '', $chosenMovieLength); //use reg ex to grab the nums from the film
            $grabHR = substr($chosenMovieNum, 0, 1) * 60; //set hour
            $grabMin = substr($chosenMovieNum, 1); //set min
            $intTotalTime = ($grabHR + $grabMin) * 100; //calc time as int

            //convert the start time to int
            $startInt = strtotime($request->input('movieTime1'));
            $total = date("H:i:s", $startInt + $intTotalTime);
            //$calcEndTime
            $formFields['movieTime1End'] = $total;
        }
        dd($formFields);
        //  'movieTitle',
        // 'movieDate',
        // 'movieTime1Begin',
        // 'movieTime1End',
        // 'movieTime2Begin',
        // 'movieTime2End',
        // 'movieTime3Begin',
        // 'movieTime3End',
        // 'movieTime4Begin',
        // 'movieTime4End'

        // if($request->hasFile('poster')) {
        //     $formFields['poster'] = $request->file('poster')->store('/poster', 'public'); //this stores it in the public/storate/poster folder
        // }

        // if($request->hasFile('banner')) {
        //     $formFields['banner'] = $request->file('banner')->store('/banner', 'public'); //this stores it in the public/storate/banner folder
        // }


        // Movies::create($formFields);

        // return redirect('/')->with('message', 'Movie created successfully!');
    }
}
