@extends('layouts.main')
@section('titulo','Buscador')

@section('listas')
  <form method="get" action="">
    @csrf
    <input type="text" name="search" value="" placeholder="Ingrese un titulo">
    <input type="submit" class="btn btn-success" name="" value="Buscar">
  </form>
  <ul id="busquedas">

  </ul>
@endsection

<script src="/js/buscador.js"></script>
