<?php

namespace App\Http\Controllers\Administrador;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index()
    {
        return view('administrador.usuarios.index');
    }
}
