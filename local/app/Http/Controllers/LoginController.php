<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use Session;
use Input;
use DB;

class LoginController extends Controller {

	public function getIndex() {
		
		if(Session::get('logged_in')) return redirect('home');
		
		return view('login.form');
		
	}
	
	public function postAuth() {
		
		$username = Input::get('username');
		$password = Input::get('password');
		
		$userdata = User::where('username', '=', $username)->where('password', '=', $password)->first();
		
		if($userdata) {
			
			$sessiondata = array(
			
				'logged_in'		=> 1,
				'username'		=> $username,
				'password'		=> $password
			
			);
			
			Session::put($sessiondata);
			
			// echo "Berhasil"; exit;
			
			return redirect('home');
			
		} else {
			// echo "gagal"; exit;
			return redirect('auth')->with('message', 'gagal login, coba ulang berkali-kali sampai bisa');
			
		}
		
	}
	
	public function getLogout() {
		
		Session::flush();
		
		return redirect('auth')->with('message', 'anda baru saja logout, silakan login kembali');
		
	}

}
