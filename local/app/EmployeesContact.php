<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class EmployeesContact extends Model {

	protected $table = 'employees_contact';
	
	protected $fillable = ['id', 'employees_id', 'start', 'finish', 'updated_at', 'created_at'];

}
