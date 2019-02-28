 <!DOCTYPE html>
 <html lang="es">

	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>@yield('title')</title>

		<!-- Custom fonts for this template-->
		<link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

		<!-- Page level plugin CSS-->
		<link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.css') }}" rel="stylesheet">

		<!-- Custom styles for this template-->
		<link href="{{ asset('template/css/sb-admin.css') }}" rel="stylesheet">

	</head>

 	<body id="page-top">

		@include('layouts.fragments.administrador.nav')

	 	<div id="wrapper">
			@include('layouts.fragments.administrador.sidebar')

			<div id="content-wrapper">

				<div class="container-fluid">
					@include('layouts.fragments.partials.breadcrums')
						@yield('contenido')
				</div>
				<!-- /.container-fluid -->

				@include('layouts.fragments.partials.footer')

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<!-- Scroll to Top Button-->
		<a class="scroll-to-top rounded" href="#page-top">
			<i class="fas fa-angle-up"></i>
		</a>

		<!-- Logout Modal-->
		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">Selecciona "Cerrar Sesión" si tú estás listo para terminar salir del sistema.</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
	                    <div class="logout">
                            <a href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-danger">
                                Cerrar Sesión
                            </a>
	                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                            @csrf
	                        </form>
	                    </div>

					</div>
				</div>
			</div>
		</div>

		<!-- JavaScript-->
		<script src="{{ asset('template/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

		<!-- JavaScript-->
		<script src="{{ asset('template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

		<!-- Page level plugin JavaScript-->
		<script src="{{ asset('template/vendor/chart.js/Chart.min.js') }}"></script>
		<script src="{{ asset('template/vendor/datatables/jquery.dataTables.js') }}"></script>
		<script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.js') }}"></script>

		<!-- Custom scripts -->
		<script src="{{ asset('template/js/sb-admin.min.js') }}"></script>

		<!-- Plugins scripts -->
		<script src="{{ asset('template/js/demo/datatables-demo.js') }}"></script>

	</body>

</html>
