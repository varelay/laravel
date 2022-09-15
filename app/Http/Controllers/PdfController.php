<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function reporteMascotas(){
        $mascotas = \DB::table('mascotas')->select('id','especie','raza','edad','condicion_salud','vacunado','sexo','status')->get();
        $view =  \View::make('reporte_mascotasPDF', compact('mascotas'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteMascotas.pdf');
    }

    public function reporteArticulos(){
        $articulos = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','estatus')->get();
        $compras = \DB::table('articulos')->select('id','articulo','descripcion','precio','cantidad','estatus')->get();
        $view =  \View::make('reporte_articulosPDF', compact('articulos','compras'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteArticulos.pdf');
    }

    public function reporteUsuarios(){
        $usuarios = \DB::table('usuarios')->select('id','nombre','aPaterno','aMaterno','email','departamento')->get();
        $users = \DB::table('users')->select('id','name','email','sexo','tipo_usuario')->get();
        $view =  \View::make('reporte_usuariosPDF', compact('usuarios','users'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('ReporteUsuarios.pdf');
    }

}
