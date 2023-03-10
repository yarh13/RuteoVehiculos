


<x-app-layout>
    <h1 class="h1 text-center mt-5">Crear Ruta</h1>
<div class="container mt-1 card">
    
    <form method="POST" action="{{url('/ruta')}}">
        @csrf
        @include('ruta.form')

        

    </form>

        


</x-app-layout>