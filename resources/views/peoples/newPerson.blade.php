@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-ms-offst-1">
			{!! Form::open(['route' => 'people.store', 'method' => 'post']) !!}
			<div class="form-group">
				<label for="first_name">Nombres</label>
				<input type="text" name="first_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="last_name">Apellidos</label>
				<input type="text" name="last_name" class="form-control" required>
			</div>
			<div class="form-group">
				<label for="birth_date">Fecha de Nacimiento</label>
				<input type="date" name="birth_date" class="form-control" required>
			</div>
			<div class="form-group">
				{!! Form::submit('Guardar tu perfil', ['class' => 'btn btn-submita']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection