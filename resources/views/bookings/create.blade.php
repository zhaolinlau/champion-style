@extends('layouts.app')

@section('content')
    <div class="container min-vh-100 d-flex align-items-center">
        <div class="row">
            <div class="col-lg-8 col-sm-12 bg-white shadow p-4">
                <p class="fw-bold text-primary">
                    BOOK AN APPOINMENT
                </p>
                <h1 class="fw-bold">
                    BOOKING DETAILS
                </h1>
                <form class="row" method="POST" action="{{ route('bookings.store') }}">
                    @csrf

                    @if (session('success'))
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <div class="col-sm-12 col-lg-6 mt-3">
                        <input type="text" placeholder="Name"
                            class="form-control form-control-lg  @error('name') is-invalid @enderror" name="name">
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
                    <div class="col-sm-12 col-lg-6 mt-3">
                        <label for="branch">Branch:</label>
                        <select name="branch" id="branch" required>
                            <option value="">Select a branch</option>
                            <option value="">HQ PEKAN</option>
							<option value="">TAMAN MENTIGA PEKAN</option>
							<option value="">TAMAN TAS KUANTAN</option>
							<option value="">SUNGAI SOI KUANTAN</option>
							<option value="">KG KEMPADANG KUANTAN</option>
                        </select><br><br>

                    </div>
                    <div class="col-sm-12 col-lg-6 mt-3">
                        <label for="date">Date:</label>
                        <input type="date" name="date" id="date" required>
                        <br><br>
                    </div>
                    <div class="col-12 mt-3 text-end">
                        <button class="btn btn-primary btn-lg" type="submit">BOOK NOW</button>
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
