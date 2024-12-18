@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row d-flex align-items-center vh-100">
			<div class="col-sm-12 col-lg-8">
				<h4>CHAMPION STYLE ENTERPRISE</h4>
				<p class="display-3 fw-semibold">The Ultimate Grooming Experience </p>
				<h5>
					Discover expert haircuts, classic shaves, and personalized grooming services in a welcoming atmosphere at Classic
					Cuts Barbershop. Our skilled barbers blend tradition with modern style to give you the perfect look every time.
				</h5>
				<a href="" class="btn btn-outline-primary btn-lg mt-3">CONTACT US</a>
			</div>
		</div>

		<div class="row">
			<div class="col-10 shadow p-5 mx-auto bg-white">
				<div class="row text-center">
					<div class="col-lg-4 col-sm-12">
						<i class="bi bi-scissors fs-1 text-primary"></i>
						<h3>Expert Barbers</h3>
						<p>Our team consists of experienced professionals skilled in both styles.</p>
					</div>
					<div class="col-lg-4 col-sm-12">
						<i class="bi bi-person-gear fs-1 text-primary"></i>
						<h3>Personalized Service</h3>
						<p>We tailor each haircut and grooming service to your individual needs and preferences.</p>
					</div>
					<div class="col-lg-4 col-sm-12">
						<i class="bi bi-person-hearts fs-1 text-primary"></i>
						<h3>Customer Satisfaction</h3>
						<p>Our priority is your satisfaction, we listen to your needs and deliver a style you'll love.</p>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-5 pt-5">
			<div class="col-12 text-center">
				<h5 class="text-primary fw-semibold">OUR SERVICE</h5>
				<h1 class="fw-bold mt-3">POPULAR HAIR CUTTING AND SALON</h1>
			</div>

			<div class="col-12 mt-5 text-center">
				<div class="row gap-5 d-flex justify-content-center">

					<div class="col-sm-12 col-lg-3 rounded bg-primary-subtle px-3">
						<img class="img-fluid rounded-3 mt-3" src="{{ asset('img/408142901_922358702733857_6998792124864022871_n.jpg') }}"
							alt="408142901_922358702733857_6998792124864022871_n.jpg">
						<h4 class="fw-bold mt-5">Service 1</h4>
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
						<p class="fw-semibold mt-5">
							<i class="bi bi-clock"></i> 1 JAM 30 MINIT
						</p>
						<p class="display-4 fw-bold">RM10.00</p>
						<a class="btn btn-primary mt-5" href="">BOOK NOW</a>
					</div>

					<div class="col-sm-12 col-lg-3 rounded bg-primary-subtle px-3">
						<img class="img-fluid rounded-3 mt-3" src="{{ asset('img/408101830_922358712733856_9156578562392528642_n.jpg') }}"
							alt="408101830_922358712733856_9156578562392528642_n.jpg">
						<h4 class="fw-bold mt-5">Service 2</h4>
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
						<p class="fw-semibold mt-5">
							<i class="bi bi-clock"></i> 30 - 45 MINIT
						</p>
						<p class="display-4 fw-bold">RM10.00</p>
						<a class="btn btn-primary mt-5" href="">BOOK NOW</a>
					</div>

					<div class="col-sm-12 col-lg-3 rounded bg-primary-subtle px-3">
						<img class="img-fluid rounded-3 mt-3" src="{{ asset('img/408106718_922358839400510_2836777686269972667_n.jpg') }}"
							alt="408106718_922358839400510_2836777686269972667_n.jpg">
						<h4 class="fw-bold mt-5">Service 3</h4>
						<p class="mt-3">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
							magna aliqua.
						</p>
						<p class="fw-semibold mt-5">
							<i class="bi bi-clock"></i> 30 MINIT
						</p>
						<p class="display-4 fw-bold">RM10.00</p>
						<a class="btn btn-primary my-5" href="">BOOK NOW</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-5 pt-5">
			<div class="col-sm-6 col-lg-3">
				<img src="{{ asset('img/woocommerce-placeholder-600x600.png') }}" alt="woocommerce-placeholder-600x600.png" class="img-fluid">
				<p>Uncategorized</p>
				<h5><b>Product 1</b></h5>
				<div>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
				</div>
				<b>RM 10.00</b>
				<div>
					<a class="btn btn-primary mt-2" href="">ADD TO CART</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<img src="{{ asset('img/woocommerce-placeholder-600x600.png') }}" alt="woocommerce-placeholder-600x600.png" class="img-fluid">
				<p>Uncategorized</p>
				<h5><b>Product 1</b></h5>
				<div>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
				</div>
				<b>RM 10.00</b>
				<div>
					<a class="btn btn-primary mt-2" href="">ADD TO CART</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<img src="{{ asset('img/woocommerce-placeholder-600x600.png') }}" alt="woocommerce-placeholder-600x600.png" class="img-fluid">
				<p>Uncategorized</p>
				<h5><b>Product 1</b></h5>
				<div>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
				</div>
				<b>RM 10.00</b>
				<div>
					<a class="btn btn-primary mt-2" href="">ADD TO CART</a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-3">
				<img src="{{ asset('img/woocommerce-placeholder-600x600.png') }}" alt="woocommerce-placeholder-600x600.png" class="img-fluid">
				<p>Uncategorized</p>
				<h5><b>Product 1</b></h5>
				<div>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
					<i class="bi bi-star"></i>
				</div>
				<b>RM 10.00</b>
				<div>
					<a class="btn btn-primary mt-2" href="">ADD TO CART</a>
				</div>
			</div>
		</div>

		<div class="row mt-5 pt-5">
			<div class="col-lg-6 col-sm-12">
				<img class="img-fluid" style="max-width: 544px" src="{{ asset('img/433486675_993947515574975_6322663603438893601_n.jpg') }}"
					alt="433486675_993947515574975_6322663603438893601_n.jpg">
			</div>
			<div class="col-lg-6 col-sm-12 d-flex align-items-center">
				<div class="row">
					<div class="col-12">
						<h5 class="text-primary fw-bold">ABOUT US</h5>
					</div>
					<div class="col-12 mt-4">
						<h1 class="fw-bold">POPULAR HAIR CUTTING AND SALON</h1>
					</div>
					<div class="col-12 mt-4">
						<p>
							At Champion Style Barbershop, we pride ourselves on offering more than just a haircut; we provide an experience
							steeped in tradition and tailored to the modern man. Established with a passion for the art of barbering, our shop
							blends classic techniques with contemporary trends, ensuring every client leaves looking and feeling their best.
						</p>
					</div>
					<div class="col-12 mt-1">
						<a class="btn btn-primary" href="">LEARN MORE</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row mt-5 pt-5">
			<div class="col-12">
				<h5 class="text-primary fw-bold">TESTIMONIAL</h5>
			</div>
			<div class="col-12">
				<h1 class="fw-bold mt-3">
					CLIENT FEEDBACK AND REVIEWS <i class="bi bi-pencil-square" data-bs-toggle="modal" data-bs-target="#feedback" style="cursor: pointer;"></i>
				</h1>
			</div>

			<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="feedbackLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
					<div class="modal-body">
						<form id="reviewform" class="mb-3" action="{{ route('submitRating') }}" method="POST">
						@csrf
							<label for="name" class="form-label">Name</label>
							<input
								type="text"
								class="form-control"
								id="name"
								name="name"
								style="border-radius: 10px;"
							/>
							<label for="rating" class="form-label">Your Rating :</label>
							<div class="rating">
								<input type="radio" name="rating" id="rating-5" value="5">
								<label for="rating-5" class="star">&#9733;</label>
								<input type="radio" name="rating" id="rating-4" value="4">
								<label for="rating-4" class="star">&#9733;</label>
								<input type="radio" name="rating" id="rating-3" value="3">
								<label for="rating-3" class="star">&#9733;</label>
								<input type="radio" name="rating" id="rating-2" value="2">
								<label for="rating-2" class="star">&#9733;</label>
								<input type="radio" name="rating" id="rating-1" value="1">
								<label for="rating-1" class="star">&#9733;</label>
							</div>
							<br>
							<label for="review" class="form-label">Your Review :</label>
							<textarea
								type="text"
								class="form-control"
								id="review"
								name="review"
								style="border-radius: 10px;"
							></textarea>
							<button type="submit" class="btn mt-4" style="background-color: #a97c2a !important; color: #ffffff; border-radius: 15%"><i class="bi bi-image"></i></button>
							<div class="mt-4">
								<button type="button" class="btn" style="background-color: #b4b4b4 !important; color: #ffffff; border-radius: 10px; width: 15%" data-bs-dismiss="modal">Cancel</button>
								<button type="submit" class="btn" style="background-color: #a97c2a !important; color: #ffffff; border-radius: 10px; width: 15%">Submit</button>
							</div>
						</form>
					</div>
                  </div>
                </div>
              </div>

			<div class="col-12">
				<div class="row gap-5 d-flex justify-content-center">
					@foreach ($ratings as $rating)
						<div class="col-sm-12 col-lg-3 bg-primary-subtle rounded d-flex align-items-center" style="height: 175px">
							<div>
								<p><b>{{ $rating->name }}</b></p>
								<p>{{ $rating->created_at }}</p>
								<div>
									@for ($i = 1; $i <= 5; $i++)
										@if ($i <= $rating->rating)
											&#9733;
										@else
											&#9734;
										@endif
									@endfor
								</div>
								<p>{{ $rating->review }}</p>
							</div>
						</div>
					@endforeach
				</div>
			</div>
		</div>

		<div class="row mt-5 pt-5 mb-5">
			<div class="col-12">
				<h1 class="fw-bold">BOOK YOUR APPOINTMENT TODAY</h1>
			</div>
			<div class="col-lg-7 col-sm-12 mt-3">
				<p>
					Ready for a fresh new look or just need a trim? Don't wait! Schedule your appointment at Champion Style today and
					experience top-notch grooming services from our skilled barbers. Click the button below to book your slot and enjoy
					a
					personalized grooming experience in a welcoming atmosphere. Your perfect style is just an appointment away!
				</p>
				<div class="col-12 mt-5">
					<a class="btn btn-primary" href="">BOOK NOW</a>
				</div>
			</div>
		</div>
	</div>
@endsection
