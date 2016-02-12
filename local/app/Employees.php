<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model {

	protected $table = 'employees';

	protected $fillable = ['id', 'name', 'status', 'updated_at', 'created_at'];


}
