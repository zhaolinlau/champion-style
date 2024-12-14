<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$contacts = [
			[
				'name'	=> 'Zack',
				'email' => 'zack@gmail.com',
				'phone' => '0123456789',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'William',
				'email' => 'william@gmail.com',
				'phone' => '0176745788',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'Farhan',
				'email' => 'farhan@gmail.com',
				'phone' => '0114455324',
				'message' => 'I want to pre-order a shampoo.'
			],
			[
				'name'	=> 'Zack',
				'email' => 'zack@gmail.com',
				'phone' => '0123456789',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'William',
				'email' => 'william@gmail.com',
				'phone' => '0176745788',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'Farhan',
				'email' => 'farhan@gmail.com',
				'phone' => '0114455324',
				'message' => 'I want to pre-order a shampoo.'
			],
			[
				'name'	=> 'Zack',
				'email' => 'zack@gmail.com',
				'phone' => '0123456789',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'William',
				'email' => 'william@gmail.com',
				'phone' => '0176745788',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'Farhan',
				'email' => 'farhan@gmail.com',
				'phone' => '0114455324',
				'message' => 'I want to pre-order a shampoo.'
			],
			[
				'name'	=> 'Zack',
				'email' => 'zack@gmail.com',
				'phone' => '0123456789',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'William',
				'email' => 'william@gmail.com',
				'phone' => '0176745788',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'Farhan',
				'email' => 'farhan@gmail.com',
				'phone' => '0114455324',
				'message' => 'I want to pre-order a shampoo.'
			],
			[
				'name'	=> 'Zack',
				'email' => 'zack@gmail.com',
				'phone' => '0123456789',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'William',
				'email' => 'william@gmail.com',
				'phone' => '0176745788',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'Farhan',
				'email' => 'farhan@gmail.com',
				'phone' => '0114455324',
				'message' => 'I want to pre-order a shampoo.'
			],
			[
				'name'	=> 'Zack',
				'email' => 'zack@gmail.com',
				'phone' => '0123456789',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'William',
				'email' => 'william@gmail.com',
				'phone' => '0176745788',
				'message' => 'I want to refund.'
			],
			[
				'name'	=> 'Farhan',
				'email' => 'farhan@gmail.com',
				'phone' => '0114455324',
				'message' => 'I want to pre-order a shampoo.'
			],
		];

		foreach ($contacts as $contact) {
			Contact::create($contact);
		}
	}
}
