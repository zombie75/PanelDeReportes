<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\models\Curso;

class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::all();
        return view('index', compact('cursos'));
    }
}
