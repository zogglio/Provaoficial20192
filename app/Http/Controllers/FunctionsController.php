<?php

namespace App\Http\Controllers;

use App\Functions;
use Illuminate\Http\Request;

class FunctionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $functions = Functions::orderBy('id','DESC')->get();
        return view('functions.index', [
            'titlePage' => 'Funções Bhaskara',
            'functions' => $functions
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('functions.create', [
            'titlePage' => 'Nova Fórmula'
        ]); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bhaskara = new Functions;

        $coefA = $request->coefA;
        $coefB = $request->coefB;
        $coefC = $request->coefC;
        $delta = ($coefB * $coefB) - (4 * $coefA * $coefC);
        
        if ($delta == 0) {
            $result = ((-$coefB) / (2 * $coefA));
            $coefX1 = $result;
            $coefX2 = $result;
        } else if ($delta > 0) {
            $coefX1 = ((($coefB * (-1)) + sqrt($delta)) / 2 * $coefA);
            $coefX2 = ((($coefB * (-1)) - sqrt($delta)) / 2 * $coefA);
        } else {
            return "Delta é menor que 0, portanto não há raízes";
        } 

        $bhaskara->delta = $delta;

        $bhaskara->coef_a = $coefA;
        $bhaskara->coef_b = $coefB;
        $bhaskara->coef_c = $coefC;
        
        $bhaskara->x1 = $coefX1;
        $bhaskara->x2 = $coefX2;

        $bhaskara->question = $coefA . 'x² + ' . $coefB . 'x ' . $coefC; 
        
        $bhaskara->save();

        return 'Formula Salva com Sucesso...';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function show(Functions $functions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function edit(Functions $functions)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Functions $functions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Functions  $functions
     * @return \Illuminate\Http\Response
     */
    public function destroy(Functions $functions)
    {
        //
    }
}
