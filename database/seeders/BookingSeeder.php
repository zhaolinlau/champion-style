<?php

namespace Database\Seeders;

use App\Models\Booking;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookingSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$bookings = [
			[
				'name'	=> 'Hazeeq',
				'email' => 'zeeq@gmail.com',
				'phone' => '0123456789',
				'branch' => 'HQ PEKAN',
                'date'   => '13-12-12'
			],
			[
				'name'	=> 'William',
				'email' => 'william@gmail.com',
				'phone' => '0176745788',
				'branch' => 'MENTIGA',
                'date'   => '13-12-12'
			],
		];

		foreach ($bookings as $booking) {
			Booking::create($booking);
		}
	}
}
