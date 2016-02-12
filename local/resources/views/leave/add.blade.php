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
		
			<label>Employees</label>
			<select name="id_employed" class="form-control">
				<option value=""></option>
				@foreach($employees as $row)
				<option value="{{ $row->id }}">{{ $row->name }}</option>
				@endforeach;
			</select>
		
		</div>

		<div class="form-group">
		
			{!! Form::label('start', 'Start') !!}
			{!! Form::text('start', '', ['class' => 'form-control tcal'], ['id' => 'start']) !!}
		
		</div>
		
		<div class="form-group">
		
			{!! Form::label('finish', 'Finish') !!}
			{!! Form::text('finish', '', ['class' => 'form-control tcal'], ['id' => 'finish']) !!}
		
		</div>

		<!--
		<div class="form-group">
		
			{!! Form::label('period', 'Period') !!}
			{!! Form::text('period', '', ['class' => 'form-control'], ['id' => 'period']) !!}
		
		</div>
		-->
		
		{!! Form::submit('Tambah', ['class' => 'btn btn-primary']) !!}
		
		{!! Form::close() !!}
		
	  </div>
	</div>
	<div id="coba">
	</div>

</div>


<script>
	$(function(){	

		// $("#period").click(function() {
			// var mulai = $("#start").val();
			// var selesai = $("#finish").val();
	
			// $.ajax({
				
				// url  : <?php echo "leave/selisi"; ?>,
				type : 'POST',
				data : 'mulai = ' + mulai + 'selesai = ' + selesai,
				// success : function(data) {
					
					// $("#coba").html(data);
					
				// }
				
			// });

			
		// });
	});
</script>

@stop