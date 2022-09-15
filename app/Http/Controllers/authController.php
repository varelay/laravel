<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inicio()
    {
        return view('inicio');
    }

    public function registroArticulos()
    {
        return view('registroArticulos');
    }

    public function registroMascotas()
    {
        return view('registroMascotas');
    }
    public function registrousuarios()
    {
        return view('registroUsuarios');
    }
    public function estadisticasMascotas()
    {
        return view('estadisticas_mascotas');
    }
    public function estadisticasUsuario()
    {
        return view('estadisticas_usuarios');
    }
    public function estadisticasArticulos()
    {
        return view('estadisticas_articulos');
    }
    public function solicitar_articulo()
    {
        return view('solicitar_articulo');
    }
    public function solicitarAdopcion()
    {
        return view('adopcion');
    }
}
