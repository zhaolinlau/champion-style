@extends('layouts.app')

@section('content')
	<div class="container h-100 d-flex align-items-center justify-content-center">
		<div class="row justify-content-center w-100">
			<div class="col-sm-12 col-lg-4">

				<div class="mb-3 text-center">
					<a href="/">
						<img src="{{ asset('img/champion_style.png') }}" alt="champion_style.png" width="25%">
					</a>
				</div>

				<div class="card px-2 shadow-sm border-0">

					<div class="card-body">
						<form method="POST" action="{{ route('register') }}">
							@csrf

							<div class="mb-3">
								<label for="name" class="form-label">{{ __('Name') }}</label>

								<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
									value="{{ old('name') }}" required autocomplete="name" autofocus>

								@error('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="mb-3">
								<label for="email" class="form-label">{{ __('Email') }}</label>

								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
									value="{{ old('email') }}" required autocomplete="email">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="mb-3">
								<label for="password" class="form-label">{{ __('Password') }}</label>

								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
									name="password" required autocomplete="new-password">

								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							</div>

							<div class="mb-3">
								<label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>

								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
									autocomplete="new-password">
							</div>

							<div class="mb-0 text-end">
								@if (Route::has('login'))
									<a class="btn btn-link" href="{{ route('login') }}">
										{{ __('Already registered?') }}
									</a>
								@endif
								<button type="submit" class="btn btn-primary">
									{{ __('REGISTER') }}
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
