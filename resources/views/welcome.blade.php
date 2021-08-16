<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>


                <body>



                <div class="container">
                    <div class="header clearfix">
                        <h3 class="text-muted">Cardio App</h3>
                    </div>
                    <div class="jumbotron">


                        <h1>Sistema de rehabilitación Cardiovascular </h1>
                        <p class="lead">Integrantes del proyecto son: </p>
                        <ul>
                            <li>Andrea Bonilla</li>
                            <li>Pablo Celada</li>
                        </ul>


                        <div class="row page-titles mx-0">
                            <div class="col-sm-9 p-md-0">
                                <div class="welcome-text">
                                    <p class="mb-0">●La auto monitorización de fatiga al esfuerzo por medio de la escala de Borg proporcionada (Anexo 1). </p>
                                    <br><p class="mb-0">●Control de frecuencia cardiaca a través de pulso, previamente a iniciar el ejercicio en reposo ( Valores normales de frecuencia entre 60 y 100 latidos por minuto. De presentar valores fueras de este rango, consultar a su médico.) y posterior a este en cada sesión.</p>
                                    <!-- Button trigger modal -->
                                    <br>  <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#exampleModalCenter">Nota Importante</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalCenter">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Nota Importante</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p> Los ejercicios deben realizarse <strong> con faja, hasta que su uso sea desaconsejado por su cardiólogo tratante.</strong></p>
                                                    <p> Números a tener en cuenta en caso de emergencia: <strong>  911, same 105 y/o emergencia móvil asociada. </strong></p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>
                                                    {{-- <button type="button" class="btn btn-primary"></button> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        @if (Route::has('login'))
                            <div class="form-group row">
                                @auth
                                    <div class="col-md-3">
                                        <p><a class="btn btn-lg btn-success" href="{!! url('/index'); !!}" role="button">Panel de Control</a></p>
                                    </div>
                                @else
                                    @if (Route::has('register'))
                                        <div class="col-md-3">
                                            <p><a class="btn btn-lg btn-dark" href="{{ route('login') }}" role="button">Iniciar Sesión</a></p>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        @endif
                    </div>





                    <footer class="footer">
                        <p>&copy; Cardio App 2021</p>
                    </footer>

                </div> <!-- /container -->
    </body>
</html>
