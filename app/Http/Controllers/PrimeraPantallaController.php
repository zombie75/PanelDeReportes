<?php

namespace App\Http\Controllers;


class PrimeraPantallaController extends Controller
{
    public function mostrarEstudiantes($courseId)
    {
        return view('primera_pantalla', ['courseId' => $courseId]);
    }
}
