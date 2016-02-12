@extends('masterview')

@extends('menu')

@section('isi')

<h3 class="page-header">Employees</h3>

<div class="col-md-8">

	<div class="panel panel-default">
	  <div class="panel-heading">
		<h3 class="panel-title">Tambah data baru</h3>
	  </div>
	  <div class="panel-body">
		
		{!! Form::open(array(
				'class' => 'form'
		)) !!}
		
		<div class="form-group">
		
			{!! Form::label('nama', 'Nama') !!}
			{!! Form::text('name', '', ['class' => 'form-control']) !!}
		
		</div>
		
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option value=""></option>
				<option value="contract">Contract</option>
				<option value="permanen">Permanen</option>
			</select>
		
		</div>
		
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		
		{!! Form::close() !!}
		
	  </div>
	</div>


</div>

@stop