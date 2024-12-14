@extends('layouts.app')

@section('content')
	<div class="container min-vh-100 d-flex align-items-center">
		<div class="row bg-white shadow p-4">
			<div class="col-12">
				<h1>Edit Contact</h1>
			</div>

			<div class="col-12">
				<form class="row" method="POST" action="{{ route('contacts.update', $contact) }}">
					@csrf
					@method('put')
					<div class="col-sm-12 col-lg-6 mt-3">
						<input type="text" placeholder="Name" value="{{ $contact->name }}"
							class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name">
						@error('name')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="col-sm-12 col-lg-6 mt-3">
						<input type="text" placeholder="Email" value="{{ $contact->email }}"
							class="form-control form-control-lg  @error('email') is-invalid @enderror " name="email">
						@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="col-12 mt-3">
						<input type="tel" placeholder="Phone" value="{{ $contact->phone }}"
							class="form-control form-control-lg  @error('phone') is-invalid @enderror" name="phone">
						@error('phone')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="col-12 mt-3">
						<textarea name="message" placeholder="Message" cols="30" rows="10"
						 class="form-control @error('message') is-invalid @enderror">{{ $contact->message }}</textarea>
						@error('message')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="col-12 mt-3 text-end">
						<button class="btn btn-primary" type="submit">Save</button>
						<a class="btn btn-danger" href="{{ route('contacts.show', $contact) }}">Cancel</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
