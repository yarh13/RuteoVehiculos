<x-app-layout>
    <h1 class="h1 text-center mt-5">Editar Ruta</h1>
<div class="container mt-1 card">
    
   <form action="{{url('/ruta/'.$RutasUsuarios->id)}}" method="post">
        @csrf
        
        {{method_field('PATCH')}}

        @include('ruta.form')
   </form>
      


        


</x-app-layout>