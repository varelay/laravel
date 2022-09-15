<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\usuario;
use App\Models\mascota;
use App\Models\articulo;
use App\Models\users2;
use Illuminate\Http\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class PostController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function registro_usuario(Request $request){

        $request->validate([
            'nombre' => 'required|max:50',
            'aPaterno' => 'required|max:50',
            'aMaterno' => 'required|max:50',
            'email' => 'email',
            'departamento' => 'required|max:50',
            'pass' => 'required|max:50',
            'cpass' => 'required|max:50',
        ]);

        $usuario = new usuario();

        $usuario->nombre = $request->nombre;
        $usuario->aPaterno = $request->aPaterno;
        $usuario->aMaterno = $request->aMaterno;
        $usuario->email = $request->email;
        $usuario->departamento = $request->departamento;
        $usuario->pass = $request->pass;
        $usuario->cpass = $request->cpass;

        $usuario->save();

        alert()->success('Alta de usuarios','El usuario '.$usuario->nombre.' '.$usuario->aPaterno.' con ID 00'.$usuario->id.' fué dado de alta con exito');

        return redirect()->route('actUser');
        }

    public function registro_mascota(Request $request){

        $request->validate([
            'especie' => 'required|max:50',
            'raza' => 'required|max:50',
            'edad' => 'required|numeric',
            'sexo' => 'required|max:50',
            'condicion_salud' => 'required|max:200',
            'vacunado' => 'required|max:3',
            'imagen' => 'required|image|mimes:jpeg,jpg,png,svg',
            'status' => 'required|max:50',
        ]);

        $mascota = new mascota();

        $mascota->especie = $request->especie;
        $mascota->raza = $request->raza;
        $mascota->edad = $request->edad;
        $mascota->condicion_salud = $request->condicion_salud;
        $mascota->vacunado = $request->vacunado;
        $mascota->sexo = $request->sexo;
        $mascota->imagen = $request->imagen;
        $mascota->status = $request->status;

         if($imagen = $request->file('imagen')){
            $rutaGuardarImg = 'img/mascotas/';
            $imagenMascota = date('YmdHis') . $imagen->getClientOriginalName();
            $imagen->move($rutaGuardarImg, $imagenMascota);
            $mascota['imagen'] = $imagenMascota;
        }



        $mascota->save();
        alert()->success('Alta de mascotas','La Mascota '.$mascota->especie.' '.$mascota->raza.' con ID 00'.$mascota->id.' fué dado de alta con exito');

        return redirect()->route('actMascota');

        }

    public function registro_articulo(Request $request){

         $request->validate([
            'articulo' => 'required|max:50',
            'descripcion' => 'required|max:250',
            'precio' => 'required|numeric',
            'cantidad' => 'required|numeric',
            'imagen' => 'required|image|mimes:jpeg,jpg,png,svg',
            'estatus' => 'required|max:50',
        ]);

        $articulo = new articulo();

        $articulo->articulo = $request->articulo;
        $articulo->descripcion = $request->descripcion;
        $articulo->precio = $request->precio;
        $articulo->cantidad = $request->cantidad;
        $articulo->imagen = $request->imagen;
        $articulo->estatus = $request->estatus;

            if($imagen = $request->file('imagen')){
                $rutaGuardarImg = 'img/articulos/';
                $imagenArticulo = date('YmdHis') . $imagen->getClientOriginalName();
                $imagen->move($rutaGuardarImg, $imagenArticulo);
                $articulo['imagen'] = $imagenArticulo;
            }


        $articulo->save();

        alert()->success('Alta de Artículos','El artículo '.$articulo->articulo.' con ID 00'.$articulo->id.' fué dado de alta con exito');

        return redirect()->route('actArticulo');

        }
    public function registrar(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'sexo' => ['string', 'max:15'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $usuario = new users2();
        $usuario->name = $request->name;
        $usuario->email = $request->email;
        $usuario->sexo = $request->sexo;
        $usuario->password = Hash::make($request->password);
        $usuario->save();

        alert()->success('Alta de usuarios','El usuario '.$usuario->name.' con ID 00'.$usuario->id.' fué dado de alta con exito');

        return redirect()->route('actUser');
    }
}


