@extends('layouts.app')

@section('content')
	<div class="container vh-100 d-flex align-items-center">
		<div class="row">
			<div class="col-8 bg-white shadow p-4">
				<p class="fw-bold text-primary">
					CONTACT US
				</p>
				<h1 class="fw-bold">
					CONTACT INFORMATION & SUPPORT
				</h1>
				<div class="row">
					<div class="col-1">
						<i class="bi bi-geo-alt"></i>
					</div>
					<div class="col-11">
						<b>Address</b>
						<p>No 15, Bangunan Pasdec Jalan Satria 26600 Pekan Pahang</p>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<i class="bi bi-envelope"></i>
					</div>
					<div class="col-11">
						<b class="fw-bold">Emel</b>
						<p>
							<a href="mailto:championstyleempire@gmail.com">championstyleempire@gmail.com</a>
						</p>
					</div>
				</div>

				<div class="row">
					<div class="col-1">
						<i class="bi bi-telephone"></i>
					</div>
					<div class="col-11">
						<b>Phone</b>
						<p>+60129091581</p>
					</div>
				</div>

				<form class="row" method="POST" action="{{ route('contacts.store') }}">
					@csrf

					@if (session('success'))
						<div class="col-12">
							<div class="alert alert-success alert-dismissible fade show" role="alert">
								{{ session('success') }}
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>
						</div>
					@endif

					<div class="col-sm-12 col-lg-6 mt-3">
						<input type="text" placeholder="Name" class="form-control form-control-lg  @error('name') is-invalid @enderror"
							name="name">
						@error('name')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="col-sm-12 col-lg-6 mt-3">
						<input type="text" placeholder="Email"
							class="form-control form-control-lg  @error('email') is-invalid @enderror " name="email">
						@error('email')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="col-12 mt-3">
						<input type="tel" placeholder="Phone"
							class="form-control form-control-lg  @error('phone') is-invalid @enderror" name="phone">
						@error('phone')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="col-12 mt-3">
						<textarea name="message" placeholder="Message" cols="30" rows="10"
						 class="form-control @error('message') is-invalid @enderror"></textarea>
						@error('message')
							<div class="invalid-feedback">
								{{ $message }}
							</div>
						@enderror
					</div>
					<div class="col-12 mt-3 text-end">
						<button class="btn btn-primary btn-lg" type="submit">SEND</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
