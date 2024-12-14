<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class ContactController extends Controller
{

	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		Paginator::useBootstrap();
		return view('contacts.index', ['contacts' => Contact::latest()->paginate(10)]);
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
		return view('contacts.show', ['contact' => $contact]);
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(Contact $contact)
	{
		return view('contacts.edit', ['contact' => $contact]);
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, Contact $contact)
	{
		$validated = $request->validate([
			'name' => 'required',
			'phone' => 'required|min_digits:7',
			'email' => 'required|email',
			'message' => 'required'
		]);

		$contact->update($validated);

		return redirect()->route('contacts.show', ['contact' => $contact])->with('success', 'The contact details has been updated.');
	}

	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(Contact $contact)
	{
		$contact->delete();

		return redirect()->route('contacts.index');
	}
}
