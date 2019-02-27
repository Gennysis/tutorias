@extends('layouts.app')

@section('content')
    <div class="row">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="col s12 m6 offset-m3">
                <br>
                <div class="card-panel hoverable">
                    <span class="card-title">Login</span>
                    <div class="row">
                        <form class="col s12" method="POST" action="{{ route('register') }}">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="email" type="email" class="validate{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required autocomplete="off" name="email">
                                        @if ($errors->has('email'))
                                            <span class="red-text text-darken-2" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    <label>Correo electrónico</label>
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password" class="validate{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    <label for="password">Contraseña</label>
                                    @if ($errors->has('password'))
                                        <span class="red-text text-darken-2" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <center>
                                <button type="submit" class="btn btn-large">
                                    Ingresar
                                </button>
                            </center>
                        </form>

                    </div>

                    <div class="row">
                        <center>

                            <a href="{{ url('/auth/facebook') }}" class="btn btn-facebook">
                                <i class="fab fa-facebook-square"></i> Facebook
                            </a>
                            <a href="{{ url('/auth/twitter') }}" class="btn btn-facebook">
                                <i class="fab fa-twitter-square"></i> Twitter
                            </a>
                            <a href="{{ url('/auth/github') }}" class="btn btn-facebook">
                                <i class="fab fa-github"></i> Github
                            </a>
                        </center>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
