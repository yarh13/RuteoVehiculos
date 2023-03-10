@if(Session::has('mensaje'))

{{Session::get('mensaje')}}

@endif

<x-app-layout>
    {{-- {{$id}} --}}
    
    @foreach ($rutas as $ruta)  
    {{-- {{$ruta->nombre_ruta}} --}}
    @endforeach 
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-6">
                <h1><i class="fa-solid fa-road"></i>  Compartir Ruta</h1>
            </div>
            <hr>
        </div>
    
        <div class="container row border p-4 rounded card">
            <table class="table table-striped">
                <thead>
                        <th class="col-md-9">Nombre Empleado</th>
                        <th class="col-md-1"></th>
                      
                     
                </thead>
                
                <tbody>
                   <?php
                        $mysqli = new mysqli('localhost', 'root', '', 'dbprueba');
                        $queryUsers = $mysqli -> query ("SELECT * FROM users WHERE NOT id =".auth()->user()->id. " AND empresa =".auth()->user()->empresa);
                        while ($valores = mysqli_fetch_array($queryUsers)){
                   ?>
                        
                    
                    <tr>
                        <td class="m-2"><?php echo $valores['name'] ?></td>

                        <td class="col-md-1">
                            <form action="{{url('/compartir')}}" method="post">
                                @csrf
                                <input type="text" class="form-control" id="id_user" hidden  aria-describedby="id_user" name="id_user" value="<?php echo $valores['id'] ?>">
                                <input type="text" class="form-control" id="id_ruta" hidden  aria-describedby="id_ruta" name="id_ruta" value="{{$id}}">
                                <input type="submit" class="btn btn-sm btn-secondary" value="Compartir">
                                
                            </form>
                                {{-- <a href="{{url('./compartir/'.$valores['id'])}}"class="text-white">Compartir</a>
                            </button> --}}
                        </td>

                        {{-- <form action="{{url('/ruta/'.$RutasUsuario->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" onclick="return confirm('La Ruta sera eliminada, ¿Desea Borrar?')" class="btn btn-sm btn-secondary" value=""><i class="fa-solid fa-trash"></i></button>
                        </form> --}}
                    </tr>
                  <?php } ?>
                </tbody>
            </table>
        </div>
        
        <div class="col-md-12 d-flex justify-content-end mt-3">
            <a href="{{url('ruta/')}}" type="button" class="btn btn-secondary">Atrás</a>
        </div>
    </div>
   
</x-app-layout>
