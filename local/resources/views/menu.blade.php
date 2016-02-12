@section('menu')

<!-- menu -->
<a href="{{ URL::to('home') }}" class="btn btn-primary">Dashboard</a>
<a href="{{ URL::to('employees') }}" class="btn btn-warning">Employees</a>
<a href="{{ URL::to('contact') }}" class="btn btn-success">Employees Contact</a>
<a href="{{ URL::to('leave') }}" class="btn btn-default">Data Cuti</a>
<a href="{{ URL::to('login/logout') }}" class="btn btn-info">Keluar</a>
<hr>

@stop