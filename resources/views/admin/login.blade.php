@extends('admin/layout')

@section('content')
    <div class="py-5 px-10">
        <header class="text-center">
            <h1 class="h1 mb-1">
                Login
            </h1>
            <p class="mb-4 h2">Login to your account</p>
        </header>

        <form method="POST" action="/users/authenticate">
            @csrf

            <div class="mb-6">
                <label for="email" class="inline-block text-lg text-white mb-2"
                    >Email</label
                >
                <br>
                <input
                    type="email"
                    class="border border-flixYellow rounded p-2 w-1/2"
                    name="email"
                    value="{{ old('email') }}"
                />
                @error('email')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="password"
                    class="inline-block text-xl text-white mb-2"
                >
                    Password
                </label>
                <br>
                <input
                    type="password"
                    class="border border-flixYellow rounded p-2 w-1/2"
                    name="password"
                    value="{{ old('password') }}"
                />

                @error('password')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <button
                    type="submit"
                    class=" items-center px-4 py-2 bg-flixYellow border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-flixYellowHover focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 focus:outline-none transition ease-in-out duration-150"
                >
                    Sign In
                </button>
            </div>

            <div class="mt-8 text-flixYellow">
                <p>
                    Don't have an account?
                    <a href="/register" class="text-laravel decoration-solid underline decoration-flixYellow"
                        >Register</a
                    >
                </p>
            </div>
        </form>
    </div>
@endsection
