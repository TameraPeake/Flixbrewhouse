@extends('admin/layout')
@push('custom-scripts')
    <script type="text/javascript">
        document.addEventListener("DOMContentLoaded", function(event) {
            const date = new Date();
            const day = date.getDate();
            const month = date.getMonth() + 1;
            const year = date.getFullYear();
            const today = month + "-" + day + "-" + year;

            document.getElementById('movieDate').setAttribute("min", date);
        });
    </script>
@endpush

@section('content')

    <header class="text-center pt-10">
        <h1 class="h1 mb-1">
            Add Movie Showtimes
        </h1>
    </header>

    <div>
        <form method="POST" action="/showtimes" enctype="multipart/form-data">
            @csrf
            <div class="flex justify-around flex-wrap px-10 py-5">
                <div class="flex items-center p-10">
                    <label for="movies" class="h2 pr-5">Choose a film:</label>
                    <select name="movies" id="movies">
                        @foreach ($movies as $movie )
                            <option class="text-white font-black text-lg font-proximaNovaReg uppercase" value="{{ $movie->id }}">{{ $movie->title }}</option>
                        @endforeach
                    </select>
                    @error('movies')
                        <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center p-10">
                    <label for="movieDate" class="h2 pr-5">Choose a Date:</label>
                    <input type="date" id="movieDate" name="movieDate" value="">
                    @error('movieDate')
                        <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex justify-around flex-wrap px-10 py-5">
                <div class="flex items-center p-10">
                    <label for="movieTime1" class="h2 pr-5">Time 1:</label>
                    <input type="time" id="movieTime1" name="movieTime1" value="" min="08:00:00" max="24:00:00">
                    @error('movieTime1')
                        <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center p-10">
                    <label for="movieTime2" class="h2 pr-5">Time 2:</label>
                    <input type="time" id="movieTime2" name="movieTime2" value="" min="08:00:00" max="24:00:00">
                    @error('movieTime2')
                        <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center p-10">
                    <label for="movieTime3" class="h2 pr-5">Time 3:</label>
                    <input type="time" id="movieTime3" name="movieTime3" value="" min="08:00:00" max="24:00:00">
                    @error('movieTime3')
                        <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center p-10">
                    <label for="movieTime4" class="h2 pr-5">Time 4:</label>
                    <input type="time" id="movieTime4" name="movieTime4" value="" min="08:00:00" max="24:00:00">
                    @error('movieTime4')
                        <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                    @enderror
                </div>
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
