<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coodenador;

class CoodenadorController extends Controller
{
  public function coodenador() {

  $dadosCoordenadores = Coodenador::all();
  return view('coodenadores', compact('dadosCoordenadores'));
}


}
