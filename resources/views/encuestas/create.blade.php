
<form action="{{url('/encuestas')}}" method="post" enctype="multipart/form-data">
	{{csrf_field()}}

	@include('encuestas.form',['Modo'=>'crear'])
	

</form>