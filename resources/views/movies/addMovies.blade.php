@extends('admin/layout')

@section('content')

    <header class="text-center pt-10">
        <h1 class="h1 mb-1">
            Add a Movie
        </h1>
        <p class="mb-4 h2">Add a movie down below</p>
    </header>

    <div>

        <form method="POST" action="/storeFilm" class="flex justify-evenly p-10 h-96 items-start flex-wrap" >
            @csrf
            <div class="mb-6 w-full p-10">
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

            <div class="mb-6 lg:w-1/3 md:1/2 w-full p-10">
                <label for="rating" class="inline-block text-lg mb-2 text-white">
                    Rating
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rating"
                    value="{{ old('rating') }}"
                />

                @error('rating')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 lg:w-1/3 md:1/2 w-full p-10">
                <label for="length" class="inline-block text-lg mb-2 text-white">
                    Length of Film
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="length"
                    value="{{ old('length') }}"
                />

                @error('length')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 lg:w-1/3 md:1/2 w-full p-10">
                <label for="director" class="inline-block text-lg mb-2 text-white">
                    Directed by
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="director"
                    value="{{ old('director') }}"
                />

                @error('director')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 md:w-1/2 w-full p-10">
                <label for="stars" class="inline-block text-lg mb-2 text-white">
                    Stars
                </label>
                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="stars"
                    value="{{ old('stars') }}"
                    rows="4" cols="50"
                >

                </textarea>

                @error('stars')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 md:w-1/2 w-full p-10">
                <label for="synopsis" class="inline-block text-lg mb-2 text-white">
                    Synopsis
                </label>

                <textarea
                    class="border border-gray-200 rounded p-2 w-full"
                    name="synopsis"
                    value="{{ old('synopsis') }}"
                    rows="4" cols="50"
                >

                </textarea>

                @error('synopsis')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 w-full p-10">
                <label for="trailer" class="inline-block text-lg mb-2 text-white">
                    Trailer Link
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="trailer"
                    value="{{ old('trailer') }}"
                />
            </div>



            <div class="mb-6 w-full p-10">
                <button
                    type="submit"
                    class=" items-center px-4 py-2 bg-flixYellow border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-flixYellowHover focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 focus:outline-none transition ease-in-out duration-150"
                >
                    Sign Up
                </button>
            </div>
        </form>
    </div>
@endsection