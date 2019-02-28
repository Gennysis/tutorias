@extends('layouts.app')
@section('title', 'Login')

@section('content')
<div class="container">
	<div class="card card-login mx-auto mt-5">
		<div class="card-header">Login</div>
		<div class="card-body">
			<div class="form-group">
				<form method="POST" action="{{ route('login') }}">
					@csrf
					<div class="form-group">
						<div class="form-label-group">
							<input type="email" id="inputEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Correo Electrónico" required autofocus value="{{ old('email') }}">
							<label for="inputEmail">Correo</label>
							@if ($errors->has('email'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('email') }}</strong>
								</span>
							@endif
						</div>
					</div>

					<div class="form-group">
						<div class="form-label-group">
							<input type="password" id="inputPassword" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required="required">
							@if ($errors->has('password'))
								<span class="invalid-feedback" role="alert">
									<strong>{{ $errors->first('password') }}</strong>
								</span>
							@endif
							<label for="inputPassword">Contraseña</label>
						</div>
					</div>
					<div class="form-group">
						<div class="checkbox">
							<label>
								<input type="checkbox" value="remember-me" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
								Recordar Contraseña
							</label>
						</div>
					</div>

					<button type="submit" class="btn btn-primary btn-block">
						Acceder
					</button>
				</form>
			</div>
			<div class="form-group text-center">
				@if (Route::has('password.request'))
					<a class="btn btn-link" href="{{ route('password.request') }}">
						¿Olvidaste tu contraseña?
					</a>
				@endif

				<a class="d-block small mt-3" href="{{ route('register') }}">¿Deseas registrarte?</a>
			</div>

			<div class="form-group text-center">
				<a href="{{ url('/auth/facebook') }}" class="btn btn-dark">
					<i class="fab fa-facebook-square"></i> Facebook
				</a>
				<a href="{{ url('/auth/twitter') }}" class="btn btn-dark">
					<i class="fab fa-twitter-square"></i> Twitter
				</a>
				<a href="{{ url('/auth/github') }}" class="btn btn-dark">
					<i class="fab fa-github"></i> Github
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
