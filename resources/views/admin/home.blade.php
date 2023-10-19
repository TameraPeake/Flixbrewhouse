@extends('admin/layout')

@section('content')
    <div class="flex justify-evenly p-10 h-96 items-center text-white flex-wrap">
        <a href="/movies/addMovies">
            <div class="border-2 border-solid border-white font-bold p-10 shadow-lg shadow-black cursor-pointer hover:bg-flixYellowHover hover:text-black">
                <p>Add a Movie</p>
            </div>
        </a>
        <div class="border-2 border-solid border-white font-bold p-10 shadow-lg shadow-black cursor-pointer hover:bg-flixYellowHover hover:text-black">
            <p>Add a Menu Item</p>
        </div>
    </div>
@endsection
