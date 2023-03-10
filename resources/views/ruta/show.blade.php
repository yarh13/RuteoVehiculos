@if(Session::has('mensaje'))

{{Session::get('mensaje')}}

@endif

<x-app-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <h1><i class="fa-solid fa-road"></i>  Mis Rutas</h1>
            </div>
            <div class="col-sm-6 d-flex justify-content-end">
                <a class="btn btn-info text-white m-3" href="{{route('ruta.create')}}"><i class="fa-solid fa-plus"></i>   Agregar Ruta</a>
            </div>
            <hr>
        </div>
    
        <div class="container row border p-4 rounded card">
            <table class="table table-striped">
                <thead>
                        <th class="col-md-6">Nombre Rutas</th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                      
                </thead>
                
                <tbody>
                    @foreach ($RutasUsuarios as $RutasUsuario)
                        
                   
                    <tr>
                        <td class="m-2">{{$RutasUsuario->nombre_ruta}}</td>

                        <td class="col-md-1">
                            <button class="btn btn-sm btn-secondary data-toggle="tooltip" data-placement="top" title="Compartir">
                                <a href="{{url('/ruta/'.$RutasUsuario->id.'/edit')}}">
                                <i class="fa-solid fa-pen-to-square text-white"></i></a>
                            </button>
                        </td>

                        <td class="col-md-1">
                            <form action="{{url('/ruta/'.$RutasUsuario->id)}}" method="post">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" onclick="return confirm('La Ruta sera eliminada, ¿Desea Borrar?')" class="btn btn-sm btn-secondary data-toggle="tooltip" data-placement="top" title="Borrar" value=""><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                        
                        
                        <td class="col-md-1">
                            <button class="btn btn-sm btn-secondary data-toggle="tooltip" data-placement="top" title="Compartir">
                                <a href="{{url('./compartir/'.$RutasUsuario->id)}}">
                                    <i class="fa-solid fa-user text-white"></i>
                                </a>
                            </button>
                        </td>

                        <td class="col-md-1">
                            <button class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="Ejecutar">
                                <a href=""">
                                    <i class="fa-solid fa-bolt text-white"></i>
                                </a>
                            </button>
                        </td>

                        <td class="col-md-1">
                            <button class="btn btn-sm btn-secondary data-toggle="tooltip" data-placement="top" title="Ver Resultado">
                                <a href="">
                                    <i class="fa-solid fa-eye text-white"></i>
                                </a>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>


            <div class="row mt-5">
                <div class="col-sm-6">
                    <h1><i class="fa-solid fa-road"></i>   Rutas Compartidas</h1>
                </div>
            </div>
        

        <div class="container row border p-4 rounded card">
            <table class="table table-striped">
                <thead>
                        <th class="col-md-6">Nombre Rutas</th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                        <th class="col-md-1"></th>
                      
                </thead>
                
                <tbody>
                    @foreach ($RutasCompartidas as $RutasCompartida)
                        
                    
                    <tr>
                        <td class="m-2">{{$RutasCompartida->nombre_ruta}}</td>

                        <td class="col-md-1"><button class="btn btn-sm btn-secondary data-toggle="tooltip" data-placement="top" title="Compartir">
                            <a href="{{url('/ruta/'.$RutasUsuario->id.'/edit')}}">
                            <i class="fa-solid fa-pen-to-square text-white"></i></a>
                        </button>
                    </td>

                    <td class="col-md-1">
                        <form action="{{url('/ruta/'.$RutasUsuario->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('La Ruta sera eliminada, ¿Desea Borrar?')" class="btn btn-sm btn-secondary data-toggle="tooltip" data-placement="top" title="Borrar" value=""><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                    
                    
                    <td class="col-md-1">
                        <button class="btn btn-sm btn-secondary" data-toggle="tooltip" data-placement="top" title="Compartir">
                            <a href="{{url('./compartir/'.$RutasUsuario->id)}}">
                                <i class="fa-solid fa-user text-white"></i>
                            </a>
                        </button>
                    </td>

                    <td class="col-md-1">
                        <button class="btn btn-sm btn-secondary data-toggle="tooltip" data-placement="top" title="Ejecutar">
                            <a href=""">
                                <i class="fa-solid fa-bolt text-white"></i>
                            </a>
                        </button>
                    </td>

                    <td class="col-md-1">
                        <button class="btn btn-sm btn-secondary data-toggle="tooltip" data-placement="top" title="Ver">
                            <a href="{{url('./compartir/'.$RutasUsuario->id)}}">
                                <i class="fa-solid fa-eye text-white"></i>
                            </a>
                        </button>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="col-md-12 d-flex justify-content-end mt-3">
            <a href="{{url('ruta/')}}" type="button" class="btn btn-secondary">Atrás</a>
        </div>
    </div>
   
</x-app-layout>
