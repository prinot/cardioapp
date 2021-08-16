{{-- Extends layout --}}
@extends('layout.fullwidth')



{{-- Content --}}
@section('content')
	<div class="col-md-5">
      <div class="form-input-content text-center error-page">
          <h1 class="error-text font-weight-bold">404</h1>
          <h4><i class="fa fa-exclamation-triangle text-warning"></i> Lamento decirte pero no existe ninguna pagina con este nombre</h4>
          <p>Escribe nuevamente o asegurate con un administrador.</p>
          <div>
              <a class="btn btn-primary" href="{!! url('/index'); !!}">Regresar al Inicio</a>
          </div>
      </div>
  </div>
@endsection