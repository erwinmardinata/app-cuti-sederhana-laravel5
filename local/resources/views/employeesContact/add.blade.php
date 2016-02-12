@extends('masterview')

@extends('menu')

@section('isi')

<h3 class="page-header">Employees Contact</h3>

<div class="col-md-8">

	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title">Tambah data Contract</h3>
	  </div>
	  <div class="panel-body">
		
		{!! Form::open(array(
				'class' => 'form'
		)) !!}
		
		<div class="form-group">
		
			<label>Employees</label>
			<select name="employees_id" class="form-control">
				<option value=""></option>
				@foreach($employees as $row)
				<option value="{{ $row->id }}">{{ $row->name }}</option>
				@endforeach;
			</select>
		
		</div>
		
		<div class="form-group">
		
			{!! Form::label('start', 'Start') !!}
			{!! Form::text('start', '', ['class' => 'form-control tcal']) !!}
		
		</div>

		<div class="form-group">
		
			{!! Form::label('finish', 'Finish') !!}
			{!! Form::text('finish', '', ['class' => 'form-control tcal']) !!}
		
		</div>
		
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		
		{!! Form::close() !!}
		
	  </div>
	</div>


</div>

@stop