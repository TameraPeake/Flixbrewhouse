@extends('admin/layout')

@section('content')

    <header class="text-center pt-10">
        <h1 class="h1 mb-1">
            Add Movie Showtimes
        </h1>
    </header>

    <div>
        <form method="POST" action="/showtimes" enctype="multipart/form-data" class="flex px-10 py-5 justify-around flex-wrap" >
            @csrf
            <div class="flex items-center">
                <label for="movies" class="h2 pr-5">Choose a film:</label>
                <select name="movies" id="movies">
                    @foreach ($movies as $movie )
                        <option class="text-white font-black text-lg font-proximaNovaReg" value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>
                @error('movies')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center">
                <label for="movies" class="h2 pr-5">Choose a film:</label>
                <select name="movies" id="movies">
                    @foreach ($movies as $movie )
                        <option class="text-white font-black text-lg font-proximaNovaReg" value="{{ $movie->id }}">{{ $movie->title }}</option>
                    @endforeach
                </select>
                @error('movies')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div wire:ignore>
                <input
                    type="datepickr"
                    class="max-w-lg block w-full shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm border-gray-300 rounded-md"
                    />
                </div>
            </div>

            <div class="w-full px-10 py-5">
                <label for="title" class="inline-block text-lg mb-2 text-white">
                    Title
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="title"
                    value="{{ old('title') }}"
                />

                @error('title')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>



            <div class="w-full px-10 py-5">
                <button
                    type="submit"
                    class="items-center px-4 py-2 bg-flixYellow border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-flixYellowHover focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 focus:outline-none transition ease-in-out duration-150"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
@endsection
