<?php

namespace App\Http\Controllers;

use App\Models\calcularRuta;
use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class CalcularRutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\calcularRuta  $calcularRuta
     * @return \Illuminate\Http\Response
     */
    public function show(calcularRuta $calcularRuta)
    {
        //
        $process = new Process(['python', '/path/to/scriptmacro.py']);
            $process->run();

            // error handling
            if (!$process->isSuccessful()) {
             throw new ProcessFailedException($process);
                }

            $output_data = $process->getOutput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\calcularRuta  $calcularRuta
     * @return \Illuminate\Http\Response
     */
    public function edit(calcularRuta $calcularRuta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\calcularRuta  $calcularRuta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calcularRuta $calcularRuta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\calcularRuta  $calcularRuta
     * @return \Illuminate\Http\Response
     */
    public function destroy(calcularRuta $calcularRuta)
    {
        //
    }
}
