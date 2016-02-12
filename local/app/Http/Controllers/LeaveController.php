<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Employees;
use App\Leave;
use Request;
use Input;
use Session;
use DB;
// use Illuminate\Http\Request;

class LeaveController extends Controller {

	public function __construct() {
		
		if(!Session::get('logged_in')) return redirect('/');

		$this->folder = 'leave.';
		
	}
	
	public function getIndex() {
		if(!Session::get('logged_in')) return redirect('auth');
		
		// $leave = Leave::latest('id')->get();
		$leave = DB::table('employees')
				 ->join('leave', 'employees.id', '=', 'leave.id_employed')
				 ->select('employees.name', 'leave.*')
				 ->get();
		
		return view($this->folder.'list')->with('leave', $leave);
		
	}
	
	public function getAdd() {
		if(!Session::get('logged_in')) return redirect('auth');
		
		$employees = Employees::latest('id')->get();

		return view($this->folder.'add')->with('employees', $employees);
		
	}
	
	public function getSelisi() {
		
		echo "Erwin Mardinata";
		
	}
	
	public function postAdd() {
		
		$mulai 	 = Input::get('start');
		$selesai = Input::get('finish');
		
		//pecah tanggal mulai
		$pecah_mulai  = explode('/', $mulai);
		$hari_mulai   = $pecah_mulai[1]; 
		$bulan_mulai  = $pecah_mulai[0]; 
		$tahun_mulai  = $pecah_mulai[2]; 

		//pecah tanggal selesai
		$pecah_selesai  = explode('/', $selesai);
		$hari_selesai   = $pecah_selesai[1]; 	
		$bulan_selesai  = $pecah_selesai[0]; 
		$tahun_selesai  = $pecah_selesai[2]; 
		
		$cuti_mulai   = gregoriantojd($bulan_mulai, $hari_mulai, $tahun_mulai);
		$cuti_selesai = gregoriantojd($bulan_selesai, $hari_selesai, $tahun_selesai);
		
		$selisi 	  = $cuti_selesai - $cuti_mulai + 1;
		
		$libur = 0;
		
		for($x=1; $x<=$selisi; $x++) {
			
			$hitung_waktu = mktime(0,0,0, $bulan_mulai, $hari_mulai + $x, $tahun_mulai);
			
			if(date('w', $hitung_waktu) == 0 || date('w', $hitung_waktu) == 6)
				
				$libur++;
			
		}
		
		$jumlah_curi = $selisi - $libur;
		
		$cuti    		= Request::all();
		$cuti['period'] = $jumlah_curi;
		
		$query = Leave::create($cuti);
		
		$query == true ? $message = 'Berhasil tambah data' : $message = 'Gagal tambah data';
		
		return redirect('leave')->with('message', $message);

		
	}
	
}
