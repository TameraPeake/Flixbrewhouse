@extends('admin/layout')

@section('content')

    <header class="text-center pt-10">
        <h1 class="h1 mb-1">
            Register
        </h1>
        <p class="mb-4 h2">Create an account to add movies and produce</p>
    </header>

    <div class="flex justify-evenly p-10 items-cente flex-wrap">

        <form method="POST" action="/store">
            @csrf
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-2 text-white">
                    Name
                </label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="{{ old('name') }}"
                />

                @error('name')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="inline-block text-lg mb-2 text-white"
                    >Email</label
                >
                <input
                    type="email"
                    class="border border-gray-200 rounded p-2 w-full"
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
                    class="inline-block text-lg mb-2 text-white"
                >
                    Password
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password"
                    value="{{ old('password') }}"
                />

                @error('password')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label
                    for="password2"
                    class="inline-block text-lg mb-2 text-white"
                >
                    Confirm Password
                </label>
                <input
                    type="password"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="password_confirmation"
                    value="{{ old('password_confirmation') }}"
                />
                @error('password_confirmation')
                    <p class="text-red-500 text-xl mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button
                    type="submit"
                    class=" items-center px-4 py-2 bg-flixYellow border border-transparent rounded-md font-semibold text-xs text-black uppercase tracking-widest hover:bg-flixYellowHover focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 focus:outline-none transition ease-in-out duration-150"
                >
                    Sign Up
                </button>
            </div>

            <div class="mt-8 text-flixYellow">
                <p>
                    Already have an account?
                    <a href="/admin/login" class="text-laravel decoration-solid underline decoration-flixYellow"
                        >Login</a
                    >
                </p>
            </div>
        </form>
    </div>
@endsection
