<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employees;
use Input;
use Request;
use DB;
use Session;
// use Illuminate\Http\Request;

class EmployeesController extends Controller {

	public function __construct() {
		
		if(!Session::get('logged_in')) return redirect('');

		$this->folder = 'employees.';
		
	}

	public function getIndex() {
		if(!Session::get('logged_in')) return redirect('auth');
		
		$query = Employees::latest('id')->get();
		// $query = DB::table('employees')
				 // ->join('employees_contact', 'employees.id', '=', 'employees_contact.employees_id')
				 // ->select('employees.name', 'employees.status', 'employees_contact.start', 'employees_contact.finish')
				 // ->get();
		
		return view($this->folder.'list')->with('query', $query);	
		
	}
	
	public function getAdd() {
		if(!Session::get('logged_in')) return redirect('auth');
		
		return view($this->folder.'add');
		
	}
	
	public function postAdd() {
		
		$data = Request::all();
		
		$query = Employees::create($data);
		
		$query == true ? $message = 'Berhasil tambah data' : $message = 'Gagal tambah data';
		
		return redirect('employees')->with('message', $message);
		
	}

}
