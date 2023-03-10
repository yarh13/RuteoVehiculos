<?php

namespace App\Http\Controllers;
use App\Models\compartirRuta;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompartirRutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "esta en el inicio de compartir";
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
        $datosRutaCompartida = new compartirRuta();
        $datosRutaCompartida->id_user = $request->id_user;
        $datosRutaCompartida->id_ruta = $request->id_ruta;
        $insertCompartirRuta = "INSERT INTO tblcompartir_rutas(id_user,id_ruta) VALUES ($datosRutaCompartida->id_user,$datosRutaCompartida->id_ruta)";
        $insert = DB::insert($insertCompartirRuta);
       
        return redirect('./ruta/show')->with('mensaje', 'Ruta compartida Exitosamente');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\compartirRuta  $compartirRuta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Consultaruta = "SELECT * FROM crear_rutas WHERE id = $id";
        $rutas = DB::select($Consultaruta);
        return view('compartir.show', compact('id', 'rutas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\compartirRuta  $compartirRuta
     * @return \Illuminate\Http\Response
     */
    public function edit(compartirRuta $idEmpresa)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\compartirRuta  $compartirRuta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, compartirRuta $compartirRuta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\compartirRuta  $compartirRuta
     * @return \Illuminate\Http\Response
     */
    public function destroy(compartirRuta $compartirRuta)
    {
        //
    }
}
