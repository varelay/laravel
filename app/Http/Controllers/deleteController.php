<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuario;
use App\Models\mascota;
use App\Models\articulo;
use App\Models\User;

class deleteController extends Controller
{
    public function delete_mascota($id){
        $mascota = mascota::find($id);
        $mascota->delete();
        alert()->success('Registro eliminado con éxito');
        return redirect()->route('actMascota');


    }
    public function delete_usuario($id){
        $usuario = User::find($id);
        $usuario->delete();
        alert()->success('Registro eliminado con éxito');
        return redirect()->route('actUser');
    }

    public function delete_articulo($id){
        $articulo = articulo::find($id);
        $articulo->delete();
        alert()->success('Registro eliminado con éxito');
        return redirect()->route('actArticulo');
    }
}
