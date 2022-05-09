@extends('layouts.principal')

@section('Contenido')
<center>
        <form class="col s8">
            <div class="row">
                <div class="col s8">
                    <h1 class="amber darken-2">
                        Nuevo producto
                    </h1>
                </div>
            </div>
          <div class="row">
            <div class="input-field col s8">
              <input placeholder="Nombre del producto" id="nombre" type="text" class="validate">
              <label for="nombre">nombre del producto</label>
            </div>
            
          <div class="row">
            <div class="input-field col s8">
              <input id="descripción" type="text" class="validate">
              <label for="desc">Descripción</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col s8">
              <input id="precio" type="number" class="validate">
              <label for="precio">Precio</label>
            </div>
          </div>
          <div class="row">
            <div class="file-field input-field">
              <div class="btn">
                <span>Ingrese imagen</span>
                <input type="file" multiple>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Upload one or more files">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col s8">
            <a class="waves-effect waves-light btn-large">Enviar</a>
          </div>
        </form>
</center>
      @endsection