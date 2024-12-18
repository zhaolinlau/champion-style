<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
	protected $fillable = [
		'name',
		'email',
		'phone',
		'branch',
        'date'
	];
}