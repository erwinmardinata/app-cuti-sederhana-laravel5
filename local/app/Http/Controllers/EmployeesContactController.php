<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\EmployeesContact;
use App\Employees;

use Request;
use DB;
use Session;
// use Illuminate\Http\Request;

class EmployeesContactController extends Controller {

	public function __construct() {
		
		if(!Session::get('logged_in')) return redirect('/');
		
		$this->folder = 'employeesContact.';
		
	}
	
	public function getIndex() {
		if(!Session::get('logged_in')) return redirect('auth');
		
		// $query = EmployeesContact::latest('id')->get();
		$query = DB::table('employees')
				 ->join('employees_contact', 'employees.id', '=', 'employees_contact.employees_id')
				 ->select('employees.name', 'employees.status', 'employees_contact.start', 'employees_contact.finish')
				 ->get();
		
		return view($this->folder.'list')->with('query', $query);
		
	}
	
	public function getAdd() {
		if(!Session::get('logged_in')) return redirect('auth');
		
		$employees = Employees::latest('id')->get();
		
		return view($this->folder.'add')->with('employees', $employees);
		
	}
	
	public function postAdd() {
		
		$query = EmployeesContact::create(Request::all());
		
		$query == true ? $message = 'Berhasil tambah data' : $message = 'Gagal tambah data';
		
		return redirect('contact')->with('message', $message);
		
	}

}
