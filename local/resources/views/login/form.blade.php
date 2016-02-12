@extends('masterview')

@section('isi')

<div class="col-md-6 col-md-offset-3">

	<div class="panel panel-default">
	  <div class="panel-body">

	  <h3 class="page-header">Login</h3>
	
		@if(Session::has('message'))
		
			<div class="alert alert-success">{{ Session::get('message') }}</div>
		
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
		{!! Form::password('password',['class' => 'form-control']) !!}
	  
	  </div>
	  
	  {!! Form::submit('Login', ['class' => 'btn btn-info btn-block']) !!}
	  	  
	  {!! Form::close(); !!}
	  </div>
	</div>


</div>

@stop