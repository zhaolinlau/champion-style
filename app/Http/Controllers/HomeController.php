<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function submitRating(Request $request)
    {

        DB::table('rating')->insert([
            'name' => $request->name,
            'rating' => $request->rating,
            'review' => $request->review,
            'created_at' => now(),
        ]);

        return redirect()->back()->with('success', 'Thank you for your rating!');
    }
}
