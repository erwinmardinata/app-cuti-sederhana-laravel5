<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model {

	protected $table = 'leave';
	
	protected $fillable = ['id', 'id_employed', 'start', 'finish', 'period', 'created_at', 'updated_at'];

}
