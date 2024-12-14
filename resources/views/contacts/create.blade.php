@extends('layouts.app')

@section('content')
	<div class="container min-vh-100 d-flex align-items-center">
		<div class="row">
			<div class="col-lg-8 col-sm-12 bg-white shadow p-4">
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

			<div class="col-lg-4 col-sm-12">
				<iframe
					src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d509732.448286867!2d103.310017!3d3.521517!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cf518685913fe9%3A0xa3ab079a1ca2b234!2sChampion%20Style%20Barber%20Shop%20Pekan!5e0!3m2!1sen!2sus!4v1734168425556!5m2!1sen!2sus"
					width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
@endsection
