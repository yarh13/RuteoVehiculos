<x-app-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-3 col-sm-12 menu-lateral">
                <div class="d-none">
                    {{$id = auth()->user()->id }}
                </div>
                
                <ul>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{url('/')}}"><i class="fa-solid fa-house"></i> Inicio</a></li>
                    <hr>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{route('ruta.create')}}"><i class="fa-solid fa-route"></i> Crear Ruta</a></li>
                    <hr>
                    <li class="nav-item"><a class="nav-link text-dark" href="{{url('/ruta/'.$id)}}"><i class="fa-solid fa-road"></i> Ver mis Rutas</a></li>
                    <hr>
                    <li class="nav-item"><a class="nav-link text-dark" href=""><i class="fa-solid fa-gears"></i> Configurar</a></li>
                    
                </ul>
            </div>

            <div class=" col-md-9 col-sm-12">

                <div class="row  col-sm-12 justify-content-center">

                    <div class="col-lg-3 col-sm-12 m-4">
                        <a class="btn btn-info text-white" href="{{route('ruta.create')}}" role="button"><i class="fa-solid fa-route"></i> Crear Ruta</a>
                    </div>

                    <div class="col-lg-3 col-sm-12 m-4">
                        <a class="btn btn-info text-white" href="{{url('/ruta/'.auth()->user()->id)}}" role="button"><i class="fa-solid fa-road"></i> Ver mis Ruta</a>
                    </div>

                    <div class="col-lg-3 col-sm-12 m-4">
                        <a class="btn btn-info text-white" href="" role="button"><i class="fa-solid fa-gears"></i> Configurar</a>
                    </div>
                    
                </div>
                

            </div>
        
        
    </div>
    
    
</x-app-layout>