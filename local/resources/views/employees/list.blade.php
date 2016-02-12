@extends('masterview')

@extends('menu')

@section('isi')
	
  <h3 class="page-header">Employees</h3>
  
  <a href="employees/add" class="btn btn-primary">Add Employees</a>

  @if(Session::has('message'))
  <div class="alert alert-success">{{ Session::get('message') }}</div>
  @endif
	<table class="table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Id</th>
				<th>Nama</th>
				<th>Status</th>
			</tr>
		</thead>
		<tbody>			
		
		@if(count($query) === 0)
			
			<tr>
				<td colspan="4" align="center">- Data Kosong -</td>
			</tr>
			
		@else
		
		@foreach($query as $index => $row)
		
			<tr>
				<td>{{ $index+1 }}</td>
				<td>{{ $row->id }}</td>
				<td>{{ $row->name }}</td>
				<td>{{ $row->status }}</td>
			</tr>
			
		@endforeach
		
		@endif
		</tbody>
	</table>

@stop