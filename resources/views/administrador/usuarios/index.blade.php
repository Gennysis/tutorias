@extends('layouts.administrador')

@section('title','Usuarios')

@section('contenido')
<div class="card mb-3">
	<div class="card-header">
		<i class="fas fa-table"></i>
		Usuarios
	</div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>email</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($usuarios as $usuario)
						<tr>
							<td>{{ $usuario->id }}</td>
							<td>{{ $usuario->name }}</td>
							<td>{{ $usuario->email }}</td>
						</tr>
					@endforeach
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>email</th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
</div>
@endsection
