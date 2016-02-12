@extends('masterview')

@section('isi')

<div class="col-md-6 col-md-offset-3">

	<div class="panel panel-default">
	  <div class="panel-body">

	  <h3 class="page-header">Login</h3>
	
		@if(Session::has('message'))
		
			{{ Session::get('message') }}
		
		@endif
	
	  {!! Form::open(array(
	  
			'class' => 'form',
			'url' 	=> 'login/auth'
		
	  )) !!}
	  
	  <div class="form-group">
	  
		{!! Form::label('username', 'Username') !!}
		{!! Form::text('username', '', ['class' => 'form-control']) !!}
	  
	  </div>
	  
	  <div class="form-group">
	  
		{!! Form::label('password', 'Password') !!}
		{!! Form::text('password', '', ['class' => 'form-control']) !!}
	  
	  </div>
	  
	  <button class="btn btn-info btn-block">Login</button>
	  
	  {!! Form::close(); !!}
	  </div>
	</div>


</div>

@stop