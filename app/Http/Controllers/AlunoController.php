<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;

class AlunoController extends Controller
{
  public function alunos() {

  $dadosAlunos = Aluno::all();
  return view('alunos', compact('dadosAlunos'));
}

}
