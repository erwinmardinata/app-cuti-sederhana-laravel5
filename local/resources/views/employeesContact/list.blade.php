@extends('masterview')

@extends('menu')

@section('isi')

     <h3 class="page-header">Employees Contact</h3>
	  
	  <a href="contact/add" class="btn btn-success">Add Employees Contact</a>
	  
	  @if(Session::has('message'))
	  <div class="alert alert-success">{{ Session::get('message') }}</div>
	  @endif
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Status</th>
					<th>Start</th>
					<th>Finish</th>
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
					<td>{{ $row->name }}</td>
					<td>{{ $row->status }}</td>
					<td>{{ $row->start }}</td>
					<td>{{ $row->finish }}</td>
				</tr>
				
			@endforeach
			
			@endif
			</tbody>
		</table>
	  </div>
	</div>

@stop