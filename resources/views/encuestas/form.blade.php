@extends('layouts.administrador')

{{$Modo=='crear'? 'Agregar Encuesta':'Modificar empleado'}}
<br>
<div class="form-group">
<label for="Nombre">{{'Nombre'}}</label>
	<input type="text" name="Nombre" id="Nombre" value="">
	</br>
	<label for="apellidoPaterno">{{'Apellido Paterno'}}</label>
	<input type="text" name="apellidoPaterno" id="apellidoPaterno" value="">
	</br>
	<label for="apellidoMaterno">{{'Apellido Materno'}}</label>
	<input type="text" name="apellidoMaterno" id="apellidoMaterno" value="">
	</br>
	<label for="Correo">{{'Correo'}}</label>
	<input type="email" name="Correo" id="Correo" value="">
	</br>
	<label for="Foto">{{'Foto'}}</label>
	<input type="file" name="Foto" id="foto" value="" class="form-control-file">
	</br>
	<input type="submit" value="Agregar" class="btn btn-primary>
	<br>
	<a href="{{url('encuestas')}}"> Regresar</a>
</div>
