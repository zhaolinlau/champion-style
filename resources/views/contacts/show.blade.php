@extends('layouts.app')

@section('content')
	<div class="container min-vh-100 d-flex align-items-center">
		<div class="row bg-white shadow p-4">
			<div class="col-12">
				<h1>Contact Details</h1>
			</div>
			<div class="col-12">
				<div class="row">
					@if (session('success'))
						<div class="col-12">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ session('success') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						</div>
					@endif

					<div class="col-sm-12 col-lg-6 mt-3">
						<input type="text" value="{{ $contact->name }}" placeholder="Name" class="form-control form-control-lg"
							name="name" disabled>
					</div>
					<div class="col-sm-12 col-lg-6 mt-3">
						<input type="text" placeholder="Email" class="form-control form-control-lg" value="{{ $contact->email }}"
							name="email" disabled>
					</div>
					<div class="col-12 mt-3">
						<input type="tel" placeholder="Phone" class="form-control form-control-lg" value="{{ $contact->phone }}"
							name="phone" disabled>
					</div>
					<div class="col-12 mt-3">
						<textarea name="message" placeholder="Message" cols="30" rows="10" class="form-control" disabled>{{ $contact->message }}</textarea>
					</div>
					<div class="col-12 mt-3 text-end">
						<a class="btn btn-primary" href="{{ route('contacts.edit', $contact) }}">Edit</a>
						<a class="btn btn-danger" href="{{ route('contacts.index', $contact) }}">Close</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
