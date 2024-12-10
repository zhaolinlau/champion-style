<!doctype html>
<html class="h-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name') }}</title>

	<!-- Fonts -->
	<link rel="dns-prefetch" href="//fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

	<!-- Scripts -->
	@vite(['resources/sass/app.scss', 'resources/js/app.js'])
	<style>
		#btn-back-to-top {
			position: fixed;
			bottom: 20px;
			right: 20px;
			display: none;
		}
	</style>
</head>

<body class="h-100 bg-light">
	<div id="app" class="h-100">
		<main class="h-100">
			@auth
				<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
					<div class="container">
						<a class="navbar-brand" href="{{ url('/') }}">
							{{ config('app.name') }}
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<!-- Left Side Of Navbar -->
							<ul class="navbar-nav me-auto">

							</ul>

							<!-- Right Side Of Navbar -->
							<ul class="navbar-nav ms-auto">
								<!-- Authentication Links -->
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }}
									</a>

									<div class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('logout') }}"
											onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
											{{ __('Log Out') }}
										</a>

										<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
											@csrf
										</form>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			@endauth

			@guest
				<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
					<div class="container">
						<a class="navbar-brand" href="{{ url('/') }}">
							<img src="img/champion_style.png" alt="champion_style.png" width="83px">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
							aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav ms-auto">
								<li class="nav-item mx-3">
									<a class="nav-link" href="/">Home</a>
								</li>
								<li class="nav-item mx-3">
									<a class="nav-link" href="">About</a>
								</li>
								<li class="nav-item mx-3">
									<a class="nav-link" href="">Shop</a>
								</li>
								<li class="nav-item mx-3">
									<a class="nav-link" href="">Contact</a>
								</li>
								<li class="nav-item mx-3">
									<a class="btn btn-primary" href="">Book Now</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			@endguest
			@yield('content')
		</main>
	</div>

	<button type="button" class="btn btn-primary" id="btn-back-to-top">
		<i class="bi bi-chevron-up"></i>
	</button>

	<script>
		var Tawk_API = Tawk_API || {},
			Tawk_LoadStart = new Date();
		(function() {
			var s1 = document.createElement("script"),
				s0 = document.getElementsByTagName("script")[0];
			s1.async = true;
			s1.src = 'https://embed.tawk.to/6758c735af5bfec1dbda0820/1iepckafm';
			s1.charset = 'UTF-8';
			s1.setAttribute('crossorigin', '*');
			s0.parentNode.insertBefore(s1, s0);
		})();

		let mybutton = document.getElementById("btn-back-to-top");

		window.onscroll = function() {
			scrollFunction();
		};

		function scrollFunction() {
			if (
				document.body.scrollTop > 20 ||
				document.documentElement.scrollTop > 20
			) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}

		mybutton.addEventListener("click", backToTop);

		function backToTop() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
</body>

</html>
