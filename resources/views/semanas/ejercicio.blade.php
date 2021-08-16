{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

			<div class="container-fluid">
                <div class="row page-titles mx-0">
                    <div class="col-sm-9 p-md-0">
                        <div class="welcome-text">
                            <h4>Estimado Jean Seijas, en la realización de la actividad es necesario: </h4><br>
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
                    <div class="col-sm-3 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Semanas</a></li>
                        </ol>
                    </div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-xl-12 col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ejercicios a realizar (1era Semana)</h3>
                            </div>
                            <div class="card-body ">
                                <form action="#" id="step-form-horizontal" class="step-form-horizontal">
                                    <div>
                                        <h4>1.Ejercicios de calentamiento</h4>
                                        <section>
                                 <center>

                                        <h2>Importante:</h2><br><br>
                                        <ul>
                                            <li>Los ejercicios deben realizarse con faja, hasta que su uso sea desaconsejado por su cardiólogo tratante.</li>
                                            <li>Números a tener en cuenta en caso de emergencia: 911, same 105 y/o emergencia móvil asociada.</li>
                                        </ul>
                                    <br><br><br>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover">Ejercicio 1</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalpopover">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ejercicios de Calentamiento.</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3>Realizar flexión del cuello.</h3>
                                                    <img src="images/semanas/1-4-calentamiento1.png" class="img-responsive" width="300"  alt="Responsive image">
                                                    <hr>
                                                    <h5>5 Repeticiones de cada ejercicio (mantener 5 segundos la posición). Realizarlo 3 veces</h5>
                                                    {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover2">Ejercicio 2</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalpopover2">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ejercicios de Calentamiento.</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3>Realizar inclinación lateral del cuello.</h3>
                                                    <img src="images/semanas/1-4-calentamiento2.png" class="img-responsive" width="300"  alt="Responsive image">
                                                    <hr>
                                                    <h5>5 Repeticiones de cada ejercicio (mantener 5 segundos la posición). Realizarlo 3 veces</h5>
                                                    {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover3">Ejercicio 3</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalpopover3">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ejercicios de Calentamiento.</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3>Realizar rotación del cuello.</h3>
                                                    <img src="images/semanas/1-4-calentamiento3.png" class="img-responsive" width="300"  alt="Responsive image">
                                                    <hr>
                                                    <h5>5 Repeticiones de cada ejercicio (mantener 5 segundos la posición). Realizarlo 3 veces</h5>
                                                    {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover4">Ejercicio 4</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalpopover4">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ejercicios de Calentamiento.</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3>Flexión de 90º de hombro</h3>
                                                    <img src="images/semanas/1-4-calentamiento4.png" class="img-responsive" width="300"  alt="Responsive image">
                                                    <hr>
                                                    <h5>Realizar una flexión de 90º de hombro y posar la mano de un lado  sobre el otro  hombro. Con la otra mano empujar el codo hacia atrás.</h5>
                                                    <img src="images/semanas/1-4-calentamiento5.png" class="img-responsive" width="300"  alt="Responsive image">
                                                    <hr>
                                                    <h5>4 Repeticiones del ejercicio. Realizarlo 1 vez.</h5>
                                                    {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover5">Ejercicio 5</button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModalpopover5">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Ejercicios de Calentamiento.</h5>
                                                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3>Dar un paso atrás extendiendo la cadera.</h3>
                                                    <img src="images/semanas/1-4-calentamiento6.png" class="img-responsive" width="300"  alt="Responsive image">
                                                    <hr>
                                                    <h5>Mantener 20-30 segundos, relajar el movimiento y repetir de nuevo intentando llegar un poco más allá.</h5>
                                                    {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                </div>
                                                <div class="modal-body">

                                                    <img src="images/semanas/1-4-calentamiento7.png" class="img-responsive" width="300"  alt="Responsive image">
                                                    <hr>
                                                    <h5>5 Repeticiones de cada ejercicio (mantener 5 segundos la posición). Realizarlo 3 veces</h5>
                                                    {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>





                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover6">Ejercicio 6</button>
                                     <!-- Modal -->
                                     <div class="modal fade" id="exampleModalpopover6">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h5 class="modal-title">Ejercicios de Calentamiento.</h5>
                                                     <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                     </button>
                                                 </div>
                                                 <div class="modal-body">
                                                     <h3>Separar una pierna unos 25cm a 30cm</h3>
                                                     <img src="images/semanas/1-4-calentamiento8.png" class="img-responsive" width="300"  alt="Responsive image">
                                                     <hr>
                                                     <h5>Con respecto a la vertical manteniendo el tronco recto sin inclinarse.</h5>
                                                     {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                 </div>
                                                 <div class="modal-body">
                                                     <h3>Mantener 5 segundos y volver a la posición inicial. Hacer lo mismo con la pierna contraria.</h3>
                                                     <img src="images/semanas/1-4-calentamiento9.png" class="img-responsive" width="300"  alt="Responsive image">
                                                     <hr>
                                                     <h5>4 Repeticiones del ejercicio (mantener 5 segundos la posición). Realizarlo 1 vez</h5>
                                                     {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                 </div>
                                                 <div class="modal-footer">
                                                     <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                 </div>
                                             </div>
                                         </div>
                                     </div>




                                     <!-- Button trigger modal -->
                                     <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover7">Ejercicio 7</button>
                                     <!-- Modal -->
                                     <div class="modal fade" id="exampleModalpopover7">
                                         <div class="modal-dialog modal-dialog-centered" role="document">
                                             <div class="modal-content">
                                                 <div class="modal-header">
                                                     <h5 class="modal-title">Ejercicios de Calentamiento.</h5>
                                                     <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                     </button>
                                                 </div>
                                                 <div class="modal-body">
                                                     <h3>Colocar una  pierna extendida y una toalla bajo los dedos del pie.</h3>
                                                     <img src="images/semanas/1-4-calentamiento10.png" class="img-responsive" width="300"  alt="Responsive image">
                                                     <hr>
                                                     <h5>Tirar de la toalla con una fuerza lenta y progresiva, provocando dorsiflexión de los dedos y del tobillo hasta notar tensión.</h5>
                                                     {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                 </div>
                                                 <div class="modal-body">
                                                     <h3>Hacer lo mismo con la contraria. Mantener 10 segundos.</h3>
                                                     <img src="images/semanas/1-4-calentamiento11.png" class="img-responsive" width="300"  alt="Responsive image">
                                                     <hr>
                                                     <h5>10 Repeticiones del ejercicio (mantener 10 segundos la posición). Realizarlo 1 vez</h5>
                                                     {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                 </div>
                                                 <div class="modal-footer">
                                                     <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                </center>

                                        </section>



                                        <h4>2.Ejercicios respiratorios.</h4>
                                        <section>
                                            <center>

                                                   <h2>Importante:</h2><br><br>
                                                   <ul>
                                                       <li>Los ejercicios deben realizarse con faja, hasta que su uso sea desaconsejado por su cardiólogo tratante.</li>
                                                       <li>Números a tener en cuenta en caso de emergencia: 911, same 105 y/o emergencia móvil asociada.</li>
                                                   </ul>
                                               <br><br><br>
                                               <!-- Button trigger modal -->
                                               <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover8">Ejercicio 1</button>
                                               <!-- Modal -->
                                               <div class="modal fade" id="exampleModalpopover8">
                                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                                       <div class="modal-content">
                                                           <div class="modal-header">
                                                               <h5 class="modal-title">2. Ejercicios respiratorios.</h5>
                                                               <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                               </button>
                                                           </div>
                                                           <div class="modal-body">
                                                               <h3>Respiración abodominal.</h3>
                                                               <img src="images/semanas/1-4-respiracion1.png" class="img-responsive" width="300"  alt="Responsive image">
                                                               <hr>
                                                               <h5>Notando con las manos cómo se eleva abdomen mientras se coge aire por la nariz.</h5>
                                                               {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                           </div>

                                                           <div class="modal-body">
                                                            <h3>Echarlo lentamente por la boca acompañando con las manos el descenso del abdomen.</h3>
                                                            <img src="images/semanas/1-4-respiracion2.png" class="img-responsive" width="300"  alt="Responsive image">
                                                            <hr>
                                                            <h5>10 Repeticiones del ejercicio (mantener 5 segundos la posición). Realizarlo 3 veces..</h5>
                                                            {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                        </div>
                                                           <div class="modal-footer">
                                                               <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>





                                           </center>

                                                   </section>
                                        <h4>3. Ejercicios aeróbicos</h4>
                                        <section>
                                            <center>

                                                   <h2>Importante:</h2><br><br>
                                                   <ul>
                                                       <li>Los ejercicios deben realizarse con faja, hasta que su uso sea desaconsejado por su cardiólogo tratante.</li>
                                                       <li>Números a tener en cuenta en caso de emergencia: 911, same 105 y/o emergencia móvil asociada.</li>
                                                   </ul>


                                               <br><br><br>
                                               <!-- Button trigger modal -->
                                               <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover10">Escala de borg (Previo)</button>
                                               <!-- Modal -->
                                               <div class="modal fade" id="exampleModalpopover10">
                                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                                       <div class="modal-content">
                                                           <div class="modal-header">
                                                               <h5 class="modal-title">Escala de borg.</h5>
                                                               <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                               </button>
                                                           </div>
                                                           <div class="modal-body">
                                                               <h3>Escala de borg (previo)</h3>
                                                               <img src="images/semanas/escala-de-borg.jpg" class="img-responsive" width="400"  alt="Responsivee image">
                                                               <hr>
                                                               <h5>5 Repeticiones de cada ejercicio (mantener 5 segundos la posición). Realizarlo 3 veces</h5>
                                                               {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                           </div>
                                                           <div class="modal-footer">
                                                               <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>


                                               <!-- Button trigger modal -->
                                               <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover11">Ejercicios Aeróbicos</button>
                                               <!-- Modal -->
                                               <div class="modal fade" id="exampleModalpopover11">
                                                   <div class="modal-dialog modal-dialog-centered" role="document">
                                                       <div class="modal-content">
                                                           <div class="modal-header">
                                                               <h5 class="modal-title">Caminata suave</h5>
                                                               <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                               </button>
                                                           </div>
                                                           <div class="modal-body">
                                                               <h3>Idealmente planteamos caminar con ritmo mantenido por 30 min.</h3>
                                                               <img src="images/semanas/caminata-suave.jpg" class="img-responsive" width="400"  alt="Responsivee image">
                                                               <hr>
                                                               <h5> La cadencia se adecuará a cada paciente, siendo la que éste pueda tolerar y mantener por el tiempo estipulado.</h5>
                                                               {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                           </div>
                                                           <div class="modal-footer">
                                                               <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>



                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#exampleModalpopover12">Escala de borg (Posterior)</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModalpopover12">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Escala de borg.</h5>
                                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <h3>Escala de borg (Posterior) )</h3>
                                                                <img src="images/semanas/escala-de-borg.jpg" class="img-responsive" width="400"  alt="Responsive image">
                                                                <hr>
                                                                <h5>5 Repeticiones de cada ejercicio (mantener 5 segundos la posición). Realizarlo 3 veces</h5>
                                                                {{-- <p><a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Told you!">This link</a> and <a href="#" class="tooltip-test text-primary" data-toggle="tooltip" title="Another one!">that link</a>                                                        have tooltips on hover.</p> --}}

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger light" data-dismiss="modal">Cerrar</button>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                           </center>

                                        </section>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
