<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('contacts.create');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		$validated = $request->validate([
			'name' => 'required',
			'phone' => 'required|min_digits:7',
			'email' => 'required|email',
			'message' => 'required'
		]);

		Contact::create($validated);

		return redirect()->route('contacts.create')->with('success', 'Your message has been sent successfully.');
	}

	/**
	 * Display the specified resource.
	 */
	public function show(Contact $contact)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Contact $contact)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Contact $contact)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Contact $contact)
	{
		//
	}
}
