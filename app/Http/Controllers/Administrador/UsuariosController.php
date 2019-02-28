<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;
use App\User;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
    	$usuarios = User::get();
        return view('administrador.usuarios.index', compact('usuarios'));
    }
}
