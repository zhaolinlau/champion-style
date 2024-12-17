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
		.rating {
                direction: rtl; /* Reverse order for right-to-left */
                unicode-bidi: bidi-override; /* Required for proper alignment */
                font-size: 2rem; /* Size of stars */
                display: inline-flex;
            }
            .star {
                color: lightgray; /* Default star color */
                cursor: pointer;
                transition: color 0.2s ease;
            }
            .star:hover, 
            .star:hover ~ .star {
                color: gold; /* Color of hovered stars */
            }
            input[type="radio"]:checked ~ label {
                color: gold; /* Selected star color */
            }
            input[type="radio"] {
                display: none; /* Hide radio buttons */
            }
	</style>
</head>

<body class="h-100 bg-light">
	<div id="app" class="h-100">
		<main class="h-100">
			<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
				<div class="container">
					<a class="navbar-brand" href="{{ url('/') }}">
						<img src="/img/champion_style.png" alt="champion_style.png" width="83px">
					</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
						aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
						<span class="navbar-toggler-icon"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<!-- Left Side Of Navbar -->
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
								<a class="nav-link" href="{{ route('contacts.create') }}">Contact</a>
							</li>
							<li class="nav-item mx-3">
								<a class="btn btn-primary" href="">Book Now</a>
							</li>
							@if (!auth()->guard()->check())
								<li class="nav-item mx-3">
									<a class="btn btn-outline-dark" href="{{ route('login') }}">Login</a>
								</li>
							@endif
						</ul>

						<!-- Right Side Of Navbar -->
						@auth
							<ul class="navbar-nav ms-auto">
								<!-- Authentication Links -->
								<li class="nav-item dropdown">
									<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
										aria-haspopup="true" aria-expanded="false" v-pre>
										{{ Auth::user()->name }}
									</a>

									<div class="dropdown-menu dropdown-menu-end border-0 shadow" aria-labelledby="navbarDropdown">
										<a class="dropdown-item" href="{{ route('home') }}">
											Dashboard
										</a>

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
						@endauth
					</div>
				</div>
			</nav>

			@yield('content')

			<footer class="bg-dark text-white pt-5 pb-5">
				<div class="container mt-5">
					<div class="row">
						<div class="col-lg-3 col-sm-12">
							<img class="img-fluid" style="max-width: 136px" src="/img/champion_style.png" alt="champion_style.png">
							<p class="mt-3"> Open Everyday 10:00AM - 10:00PM </p>
							<p> Friday 3:00PM - 11:00PM </p>
						</div>

						<div class="col-lg-3 col-sm-12">
							<div class="row">
								<div class="col-12">
									<b>MENU</b>
								</div>
								<div class="col-12 mt-4">
									<a href="">Home</a>
								</div>
								<div class="col-12 mt-3">
									<a href="">About</a>
								</div>
								<div class="col-12 mt-3">
									<a href="">Shop</a>
								</div>
								<div class="col-12 mt-3">
									<a href="{{ route('contacts.create') }}">Contact</a>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-12">
							<div class="row">
								<div class="col-12">
									<b>CONTACT</b>
								</div>
								<div class="col-12 mt-4">
									<div class="row">
										<div class="col-1">
											<i class="bi bi-geo-alt"></i>
										</div>
										<div class="col-11">
											No 15, Bangunan Pasdec Jalan Satria 26600 Pekan Pahang
										</div>
									</div>
								</div>
								<div class="col-12 mt-3">
									<div class="row">
										<div class="col-1">
											<i class="bi bi-envelope"></i>
										</div>
										<div class="col-11">
											<a href="mailto:championstyleempire@gmail.com">championstyleempire@gmail.com</a>
										</div>
									</div>
								</div>
								<div class="col-12 mt-3">
									<div class="row">
										<div class="col-1">
											<i class="bi bi-telephone"></i>
										</div>
										<div class="col-11">
											+60129091581
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-sm-12">
							<div class="row">
								<div class="col-12">
									<b>SOCIAL MEDIA</b>
								</div>
								<div class="col-12 mt-4">
									<a class="btn btn-primary" href=""><i class="bi bi-facebook"></i></a>
									<a class="btn btn-primary" href=""><i class="bi bi-instagram"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<button type="button" class="btn btn-primary" id="btn-back-to-top">
				<i class="bi bi-chevron-up"></i>
			</button>
		</main>
	</div>


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
