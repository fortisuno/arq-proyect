<?php
    include('includes/header.html');
    include('includes/navbar.html');
    include('includes/modals.html');
?>

<section class="pt-5">
    <div class="container py-5">
        <div class="row mb-5">
            <div class="col text-justify">
                <h1>Tareas</h1>
                <div class="media">
                    <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/pablo_gomez/profile.jpg" alt="[alumno]" class="rounded-circle mr-3 img-fluid" height="50">
                    <div class="media-body text-left">
                        <p class="lead text-muted mb-0">Gómez Morales Pablo Arturo</p>
                        <p class="lead text-muted ">2015030486</p>
                    </div>
                </div>
                <span class="text-muted">Para acceder a una tarea, debe de dar click en nombre para que se abra una ventana modal donde pueda le permita descargar el archivo.</span>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="list-group tareas">
                    <div class="list-group-item list-group-item-action active font-weight-bold">
                        <div class="row">
                            <span class="col-2 col-md-1">#</span>
                            <span class="col">Archivo</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">Bloque</span>
                                    <span class="col">fecha</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_1">
                        <div class="row">
                            <span class="col-2 col-md-1">1</span>
                            <span class="col btn-link">Tareas pendientes</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">1</span>
                                    <span class="col">23-mar-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_2">
                        <div class="row">
                            <span class="col-2 col-md-1">2</span>
                            <span class="col btn-link">CISC y RISC</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">1</span>
                                    <span class="col">25-mar-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_3">
                        <div class="row">
                            <span class="col-2 col-md-1">3</span>
                            <span class="col btn-link">Operandos y operaciones</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">1</span>
                                    <span class="col">27-mar-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_4">
                        <div class="row">
                            <span class="col-2 col-md-1">4</span>
                            <span class="col btn-link">Unidad aritmética y lógica 1</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">1</span>
                                    <span class="col">30-mar-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_5">
                        <div class="row">
                            <span class="col-2 col-md-1">5</span>
                            <span class="col btn-link">Avances del proyecto</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">1</span>
                                    <span class="col">01-abr-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_6">
                        <div class="row">
                            <span class="col-2 col-md-1">6</span>
                            <span class="col btn-link">Unidad aritmética lógica 2</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">2</span>
                                    <span class="col">29-abr-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_7">
                        <div class="row">
                            <span class="col-2 col-md-1">7</span>
                            <span class="col btn-link">Repertorio de instrucciones</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">2</span>
                                    <span class="col">01-may-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_8">
                        <div class="row">
                            <span class="col-2 col-md-1">8</span>
                            <span class="col btn-link">Ciclos de control</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">2</span>
                                    <span class="col">06-may-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_9">
                        <div class="row">
                            <span class="col-2 col-md-1">9</span>
                            <span class="col btn-link">Control de procesos</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">2</span>
                                    <span class="col">08-may-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_10">
                        <div class="row">
                            <span class="col-2 col-md-1">10</span>
                            <span class="col btn-link">Microprocesador 1</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">2</span>
                                    <span class="col">13-may-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_11">
                        <div class="row">
                            <span class="col-2 col-md-1">11</span>
                            <span class="col btn-link">Microprocesador 2</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">2</span>
                                    <span class="col">15-may-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_12">
                        <div class="row">
                            <span class="col-2 col-md-1">12</span>
                            <span class="col btn-link">Microcontrolador 1</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">2</span>
                                    <span class="col">20-may-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                    <button type="button" class="list-group-item list-group-item-action" data-toggle="modal" data-target="#pablo_13">
                        <div class="row">
                            <span class="col-2 col-md-1">13</span>
                            <span class="col btn-link">Microcontrolador 2</span>
                            <div class="col text-center">
                                <div class="row">
                                    <span class="col toggle">2</span>
                                    <span class="col">22-may-2020</span>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.html') ?>