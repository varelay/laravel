<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Models\mascota;
use App\Models\articulo;
use Illuminate\Http\Request;


class getController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function recuperar_usuario(){

        $usuarios = \DB::table('usuarios')->select('id','nombre','aPaterno','aMaterno','email','pass','departamento')->get();
        $users = \DB::table('users')->select('id','name','email','sexo','password','created_at','updated_at','tipo_usuario')->get();
        return view('Admin_users',['usuarios'=>$usuarios],['users'=>$users]);
    }
    public function recuperar_articulo(){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','imagen','estatus')->get();
        return view('Admin_articulos',['articulos'=>$articulos]);

    }
    public function recuperar_mascota(){
        $mascotas = \DB::table('mascotas')->select('id','especie','raza','edad','condicion_salud','vacunado','sexo','imagen','status')->get();
        return view('Admin_mascotas',['mascotas'=>$mascotas]);
    }
    public function recuperar_usuario_id($id){
        $usuarios = \DB::table('usuarios')->select('id','nombre','aPaterno','aMaterno','email','pass','departamento')->where('id',$id)->get();
        $users = \DB::table('users')->select('id','name','email','password','created_at','updated_at')->where('id',$id)->get();
        return view('Admin_users',['usuarios'=>$usuarios],['users'=>$users]);
    }

    public function estadisticas_mascota(){
        $total_mascotas = \DB::table('mascotas')
             ->select(\DB::raw('count(*) as cantidad, especie'))
             ->groupBy('especie')
             ->get();
        $mascotas_adoptadas = \DB::table('mascotas')
                ->select(\DB::raw('count(*) as cantidad, especie'))
                ->where('status','adoptado')
                ->groupBy('especie')
                ->get();
        $mascotas_disponibles = \DB::table('mascotas')
                ->select(\DB::raw('count(*) as cantidad, especie'))
                ->where('status','disponible')
                ->groupBy('especie')
                ->get();
        return view('estadisticas_mascotas',['total_mascotas'=>$total_mascotas,'mascotas_adoptadas'=>$mascotas_adoptadas,'mascotas_disponibles'=>$mascotas_disponibles]);
    }

    public function estadisticas_articulo(){
        $total_articulos = \DB::table('articulos')
             ->select(\DB::raw('count(*) as cantidad, articulo'))
             ->groupBy('articulo')
             ->get();
        $articulos_disponibles = \DB::table('articulos')
             ->select(\DB::raw('count(*) as cantidad, articulo'))
             ->where('estatus','=','disponible')
             ->groupBy('articulo')
             ->get();
        $articulos_vendidos = \DB::table('articulos')
                ->select(\DB::raw('count(*) as total, articulo'))
                ->where('estatus','=','vendido')
                ->groupBy('articulo')
                ->get();

        return view('estadisticas_articulos',['articulos_disponibles'=>$articulos_disponibles,'articulos_vendidos'=>$articulos_vendidos,'total_articulos'=>$total_articulos]);
    }

    public function estadisticas_usuario(){
        $total_usuarios = \DB::table('users')
             ->select(\DB::raw('count(*) as cantidad, sexo'))
             ->groupBy('sexo')
             ->get();
        $tipo_usuario = \DB::table('users')
                ->select(\DB::raw('count(*) as cantidad, tipo_usuario'))
                ->groupBy('tipo_usuario')
                ->get();
        return view('estadisticas_usuarios',['total_usuarios'=>$total_usuarios,'tipo_usuario'=>$tipo_usuario]);
    }
    public function mascota_adoptar(){
        $mascotas = \DB::table('mascotas')->select('id','especie','raza','edad','condicion_salud','vacunado','sexo','imagen')
            ->where('status','=','disponible')
            ->get();
        return view('adopcion',['mascotas'=>$mascotas]);
    }
    public function articulo_comprar(){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','imagen','estatus')
            ->where('estatus','=','disponible')
            ->get();
        return view('solicitar_articulo',['articulos'=>$articulos]);
    }
    public function articulo_carrito(){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','imagen','estatus')
            ->where('estatus','=','en_carrito')
            ->get();
        return view('carrito_compras',['articulos'=>$articulos]);
    }

}
