<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ShowtimesController extends Controller
{
    public $startTime = "00:00";
    public $movieLength = "";

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

    //calculates show end time
    public function calculateEndTime($startTime, $movieLength) {
        $this->startTime = $startTime;
        $this->movieLength = $movieLength;

        $chosenMovieNum = preg_replace("/[^0-9]/", '', $this->movieLength); //use reg ex to grab the nums from the film
        $grabHR = substr($chosenMovieNum, 0, 1) * 60; //set hour
        $grabMin = substr($chosenMovieNum, 1); //set min
        $intTotalTime = ($grabHR + $grabMin) * 60; //calc total time as in

        //convert the start time to int and add the total time to it
        $startInt = strtotime($this->startTime) + $intTotalTime;
        $endTime = date('h:i', $startInt);

        return $endTime;

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


        if($request->has('movieTime1') && $request->input('movieTime1') != NULL) {
            $formFields['movieTime1Begin'] = $request->input('movieTime1'); //setting begin movie time
            $chosenMovieLength = Movies::find($request->input('movies'))->length; //find the length of the film
            $formFields['movieTime1End'] = $this->calculateEndTime($request->input('movieTime1'), $chosenMovieLength);
        }

        if($request->has('movieTime2') && $request->input('movieTime2') != NULL) {
            $formFields['movieTime2Begin'] = $request->input('movieTime2'); //setting begin movie time
            $chosenMovieLength = Movies::find($request->input('movies'))->length; //find the length of the film
            $formFields['movieTime2End'] = $this->calculateEndTime($request->input('movieTime2'), $chosenMovieLength);
        }

        if($request->has('movieTime3') && $request->input('movieTime3') != NULL) {
            $formFields['movieTime3Begin'] = $request->input('movieTime3'); //setting begin movie time
            $chosenMovieLength = Movies::find($request->input('movies'))->length; //find the length of the film
            $formFields['movieTime3End'] = $this->calculateEndTime($request->input('movieTime3'), $chosenMovieLength);
        }

        if($request->has('movieTime4') && $request->input('movieTime4') != NULL) {
            $formFields['movieTime4Begin'] = $request->input('movieTime4'); //setting begin movie time
            $chosenMovieLength = Movies::find($request->input('movies'))->length; //find the length of the film
            $formFields['movieTime4End'] = $this->calculateEndTime($request->input('movieTime4'), $chosenMovieLength);
        }

        dd($formFields);


        Showtimes::create($formFields);

        return redirect('/')->with('message', 'Showtimes added successfully!');
    }
}
