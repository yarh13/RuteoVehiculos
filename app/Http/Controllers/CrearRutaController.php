<?php

namespace App\Http\Controllers;

use App\Models\CrearRuta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrearRutaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function index()
    {

        return view('ruta.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ruta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $datosRuta = request()->all();//retorna toda la información incluyendo el token
        $datosRuta = request()->except('_token');
        CrearRuta::insert($datosRuta);
        // return response()->json($datosRuta);
        return redirect('ruta/show')->with('mensaje', 'Ruta creada Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CrearRuta  $crearRuta
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $rutas = "SELECT * FROM crear_rutas AS CR INNER JOIN tblcompartir_rutas AS TCR ON CR.id_user = ".auth()->user()->id;
        // $rutas = "SELECT * FROM crear_rutas  WHERE id_user =".auth()->user()->id;

        $myRoutes = "SELECT id, nombre_ruta, id_user FROM crear_rutas
        WHERE id_user =" . auth()->user()->id;

        $rotueShareWithMe = "SELECT R.id, R.nombre_ruta, RC.id_user
        FROM tblcompartir_rutas AS RC
        INNER JOIN crear_rutas AS R 
        ON RC.id_ruta = R.id
        WHERE RC.id_user = ". auth()->user()->id;

        $RutasUsuarios = DB::select($myRoutes);
        $RutasCompartidas = DB::select($rotueShareWithMe);

        // $RutasUsuarios = CrearRuta::where('id_user', auth()->user()->id)->paginate();
        
        return view('ruta.show', compact('RutasUsuarios', 'RutasCompartidas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CrearRuta  $crearRuta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $RutasUsuarios = CrearRuta::findOrFail($id);
        return view('ruta.edit', compact('RutasUsuarios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CrearRuta  $crearRuta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosRuta = request()->except(['_token', '_method']);
        CrearRuta::where('id', '=', $id)->update($datosRuta);
        return redirect('ruta/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CrearRuta  $crearRuta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CrearRuta::destroy($id);
        return redirect('ruta/show');
    }

    public function shared()
    {
        return "retorno el shared";
    }

}
