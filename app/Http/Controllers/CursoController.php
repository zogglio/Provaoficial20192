<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
  public function curso() {

  $dadosCuros = Curso::all();
  return view('cursos', compact('dadosCuros'));
}
}
