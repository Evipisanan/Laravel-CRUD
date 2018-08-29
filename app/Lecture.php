<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecture extends Model
{
	protected $table ="lecturers";
	protected $fillable = [
		'name', 'gender', 'Date_of_Birth', 'NIC','address','contact_no','email',
		'registered_year','faculty','department','degree','GPA'
	];

}
