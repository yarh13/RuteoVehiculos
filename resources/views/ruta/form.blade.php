<div class="container">
<div class="mb-3">
    <input type="text" class="form-control" id="id_user" hidden aria-describedby="id_user" name="id_user" placeholder="{{auth()->user()->name}}"  value="{{auth()->user()->id}}" readonly>
</div>

<div class="row">
    <div class="mb-3 col-md-6">
        <label for="nombre_ruta" class="form-label" >Nombre de la Ruta</label>
        <input type="text" class="form-control" id="nombre_ruta" aria-describedby="nombre_ruta" name="nombre_ruta" value="{{ isset($RutasUsuarios->nombre_ruta)?$RutasUsuarios->nombre_ruta:'' }}" placeholder="Ingrese nombre de la Ruta">
    </div>

    <div class="form-group col-md-3">
        <label for="cant_vehiculos">Cantidad de Vehículos</label>
        <select class="form-control"  id="cant_vehiculos" aria-describedby="cant_vehiculos" name="cant_vehiculos">
            <option value="{{ isset($RutasUsuarios->cant_vehiculos)?$RutasUsuarios->cant_vehiculos:'' }}">{{isset($RutasUsuarios->cant_vehiculos)?$RutasUsuarios->cant_vehiculos:'' }}</option>
            <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
        </select>
      </div>

      <div class="form-group col-md-3">
        <label for="capacidad_carga">Capacidad de Carga</label>
        <select class="form-control" class="form-control" id="capacidad_carga" aria-describedby="capacidad_carga" name="capacidad_carga">
            <option value="{{ isset($RutasUsuarios->capacidad_carga)?$RutasUsuarios->capacidad_carga:'' }}">{{ isset($RutasUsuarios->capacidad_carga)?$RutasUsuarios->capacidad_carga:''}}</option>
            <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="10">11</option>
          <option value="10">12</option>
          <option value="10">13</option>
          <option value="10">14</option>
          <option value="10">15</option>
          <option value="10">16</option>
          <option value="10">17</option>
          <option value="10">18</option>
          <option value="10">19</option>
          <option value="10">20</option>
        </select>
      </div>
</div>


<div class="row">
    <div class="mb-3 col-md-6">
        <label for="hora_inicio" class="form-label">Hora Inicio</label>
        <input type="time" class="form-control" id="hora_inicio" aria-describedby="hora_inicio" name="hora_inicio" value="{{ isset($RutasUsuarios->hora_inicio)?$RutasUsuarios->hora_inicio:'' }}" placeholder="Seleccione Hora de inicio">
    </div>
    
    <div class="mb-3 col-md-6">
        <label for="hora_fin" class="form-label">Hora Fin</label>
        <input type="time" class="form-control" id="hora_fin" aria-describedby="hora_fin" name="hora_fin" value="{{ isset($RutasUsuarios->hora_fin)?$RutasUsuarios->hora_fin:'' }}" placeholder="Seleccione Hora de fin">
    </div>
</div>

<div class="form-group">
    <label for="cant_clientes">Cantidad de Clientes</label>
    <select class="form-control" class="form-control" id="cant_clientes" aria-describedby="cant_clientes" name="cant_clientes">
      <option value="{{ isset($RutasUsuarios->cant_clientes)?$RutasUsuarios->cant_clientes:'' }}">{{ isset($RutasUsuarios->cant_clientes)?$RutasUsuarios->cant_clientes:'' }}</option>
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
    </select>
  </div>


<div class="row">
    <div class="mb-3 col-md-6">
        <label for="hora_in_recep" class="form-label">Hora Inicio Recepción</label>
        <input type="time" class="form-control" id="hora_in_recep" aria-describedby="hora_in_recep" name="hora_in_recep" value="{{ isset($RutasUsuarios->hora_in_recep)?$RutasUsuarios->hora_in_recep:'' }}" placeholder="Nombre de la Ruta">
    </div>
    
    <div class="mb-3 col-md-6">
        <label for="hora_fin_recep" class="form-label">Hora Fin Recepción</label>
        <input type="time" class="form-control" id="hora_fin_recep" aria-describedby="nombre_ruta" name="hora_fin_recep" value="{{ isset($RutasUsuarios->hora_fin_recep)?$RutasUsuarios->hora_fin_recep:'' }}" placeholder="Nombre de la Ruta">
    </div>
</div>


<div class="row mb-3">
    <div class="col-md-3">
        <input type="submit" class="btn btn-info" value="enviar">
    </div>

    <div class="col-md-3 d-flex justify-content-center">
        <a href="" type="button" class="btn btn-info">Ejecutar Ruta</a>
    </div>

    <div class="col-md-3 d-flex justify-content-center">
        <button class="btn btn-sm btn-info">
            <a href="">
                <i class="fa-solid fa-eye text-white"></i>
            </a>
        </button>
    </div>

    <div class="col-md-3 d-flex justify-content-end">
        <a href="{{url('ruta/')}}" type="button" class="btn btn-secondary">Atrás</a>
    </div>
</div>