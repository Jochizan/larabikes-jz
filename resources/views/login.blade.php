@extends('master')
{{-- @section('content') --}}
<section class="d-flex justify-content-center align-items-center w-100 h-100">

  <form action={{ view('createForm') }}>
    <div class="d-flex justify-content-center align-items-center" style="flex-direction: column; background-color: #f3f3f3;">
      <legend>API Bikes V 1.0</legend>
      <div class="mb-4">
        <label
          for="email"
          class="form-label"
        >Disabled input</label>
        <input
          type="text"
          id="email"
          class="form-control"
          placeholder="Correo"
        >
      </div>
      <div class="mb-4">
        <label
          for="password"
          class="form-label"
        >Contraseña</label>
        <input
          type="password"
          name="password"
          id="password"
          class="form-control"
          placeholder="Contraseña"
        >
      </div>
      <div class="mb-4">
        <div class="form-check">
          <input
            class="form-check-input"
            type="checkbox"
            id="keep_session"
          >
          <label
            class="form-check-label"
            for="keep_session"
          >
            Mantener sesión
          </label>
        </div>
      </div>
      <button
        type="submit"
        class="btn btn-primary"
      >Iniciar sesión</button>
    </div>
  </form>

</section>
