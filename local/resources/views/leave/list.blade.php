@extends('masterview')

@extends('menu')

@section('isi')

     <h3 class="page-header">Data Cuti</h3>
	  
	  <a href="leave/add" class="btn btn-default">Add Leave</a>
	  
	  @if(Session::has('message'))
	  <div class="alert alert-success">{{ Session::get('message') }}</div>
	  @endif
		<table class="table table-striped">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Tanggal dari</th>
					<th>Tanggal sampai</th>
					<th>Period</th>
				</tr>
			</thead>
			<tbody>			
			
			@if(count($leave) === 0)
				
				<tr>
					<td colspan="5" align="center">- Data Kosong -</td>
				</tr>
				
			@else
			
			@foreach($leave as $index => $row)
			
				<tr>
					<td>{{ $index+1 }}</td>
					<td>{{ $row->name }}</td>
					<td>{{ $row->start }}</td>
					<td>{{ $row->finish }}</td>
					<td>{{ $row->period }} hari kerja</td>
				</tr>
				
			@endforeach
			
			@endif
			</tbody>
		</table>
	  </div>
	</div>

@stop