@extends('layouts.app')

@section('content')
	<div class="container vh-100 d-flex align-items-center">
		<div class="row">
			@if (auth()->guard()->user()->role == 'staff')
				<div class="col">
					<div class="card">
						<div class="card-body">
							<h5 class="card-title">Contacts</h5>
							<p class="card-text">List of contact from customers/visitors.</p>
							<a href="{{ route('contacts.index') }}" class="btn btn-primary">Navigate</a>
						</div>
					</div>
				</div>
			@endif
		</div>
	</div>
@endsection
