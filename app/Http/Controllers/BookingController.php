<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class BookingController extends Controller
{
	public function create()
	{
		return view('bookings.create');
	}

	public function store(Request $request)
	{

		$validated = $request->validate([
			'name' => 'required',
			'phone' => 'required|min_digits:7',
			'email' => 'required|email',
			'branch' => 'required',
			'date' => 'required|date'
		]);

		Booking::create($validated);

		return redirect()->route('bookings.create')->with('success', 'Your booking is successfull.');
	}
}
