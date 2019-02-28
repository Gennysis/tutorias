<form action="{{url('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}
	{{method_field('PATCH')}}
<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" value="{{$empleado->Nombre}}">
	</br>
	<label for="apellidoPaterno">{{'Apellido Paterno'}}</label>
	<input type="text" name="apellidoPaterno" id="apellidoPaterno" value="{{$empleado->ApellidoPaterno}}">
	</br>
	<label for="apellidoMaterno">{{'Apellido Materno'}}</label>
	<input type="text" name="apellidoMaterno" id="apellidoMaterno" value="{{$empleado->ApellidoMaterno}}">
	</br>
	<label for="Correo">{{'Correo'}}</label>
	<input type="email" name="Correo" id="Correo" value="{{$empleado->Correo}}">
	</br>
	<label for="Foto">{{'Foto'}}</label>
	<img src="{{ asset('storage').'/'.$empleado->Foto}}" alt="" width="100">
	<br>
	<input type="file" name="Foto" id="foto" value="">
	</br>
	
	<input type="submit" value="editar">
	<a href="{{url('empleados')}}"> Regresar</a>
</form>