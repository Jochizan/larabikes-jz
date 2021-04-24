@extends('layouts.master')

<form
  method="post"
  action="../category"
>
  <input
    type="text"
    name="name"
    id="name"
    placeholder="Nombre de la categoria"
  >
  <input
    type="text"
    name="description"
    id="description"
    placeholder="Ingrese la descripción"
  >
  <input
    type="hidden"
    name="status"
    id="status"
    value="1"
  >
  {{ csrf_field() }}
  <button
    type="submit"
    class="btn btn-primary"
  >Enviar</button>
</form>
