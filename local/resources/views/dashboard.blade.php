@extends('masterview')

@extends('menu')

@section('isi')

<div class="col-md-10 col-md-offset-1">
	<div class="panel panel-default">
		<div class="panel-body" style="text-align: center; padding: 50px;">
			Selamat Datang Bro... {{ Session::get('username') }}
		</div>
	</div>
</div>

@stop