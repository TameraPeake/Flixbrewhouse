<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class homepage extends Controller
{
    //
    public function __invoke(Request $request)
    {
        return Inertia::render('Home');
    }
}
