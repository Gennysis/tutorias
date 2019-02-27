@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col s12 m8 offset-m2">
        <br>
        <div class="card-panel hoverable">
            <span class="card-title">Register</span>
            <div class="row">
                <form class="col s12" method="POST" action="{{ route('register') }}">
                    <div class="row">
                        @csrf
                        <div class="input-field col s6">
                            <input id="name" type="text" class="validate{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autocomplete="off">
                                @if ($errors->has('name'))
                                    <span class="red-text text-darken-2" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            <label>Nombre</label>
                        </div>


                        <div class="input-field col s6">
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

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation" required>
                            <label>Confirmar Contraseña</label>
                        </div>
                    </div>

                    <button type="submit" class="btn">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
