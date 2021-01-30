<?php

namespace App\Http\Controllers;

use App\Models\getfilms;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        $films = getfilms::all();
        return view('home', ['films' => $films]);
    }
}
