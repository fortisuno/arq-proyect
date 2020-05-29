<?php
    include('includes/header.html');
    include('includes/navbar.html');
?>

<header class="shadow header-index">
    <div class="container-fluid">
        <div class="row justify-content-center align-content-center text-center text-white">
            <div class="col">
                <h1 class="display-4 mb-5 mx-auto">Arquitectura y Organización de computadoras</h1>
                <h3 class="mt-5">
                    <span class="badge badge-pill badge-danger font-weight-normal">#Ipn</span>
                    <span class="badge badge-pill badge-success font-weight-normal">#Upiicsa</span>
                    <span class="badge badge-pill badge-secondary font-weight-normal">#2NM31</span>
                    <span class="badge badge-pill badge-primary font-weight-normal">#Proyecto</span>
                    <span class="badge badge-pill badge-primary font-weight-normal">#Tareas</span>
                </h3>
            </div>
        </div>
    </div>
</header>

<section class="index-info pt-5" id="proyecto">
    <div class="container pt-5">
        <div class="row pb-4 text-center">
            <div class="col">
                <h1>Proyecto</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col text-center">
                <p class="lead">
                    Utilizando modulos de  <a href="https://magicmirror.builders/" class="link">MagicMirror²</a> realizamos un sistema que simula ser un espejo otorgando funciones extras como lo es interactuar con un asistente virtual, por ejemplo, Google Assistant. Además de ello podra hacer funciones como IoT con el fin de utilizar un centro de control para casas inteligentes con un diseño más amigable y discreto para el lugar donde sea utilizado. <span class="font-italic">(La imagen fue tomada del sitio oficial de MagicMirror²)</span>
                </p>
                <div class="w-100 pb-5">
                    <a href="#" class="btn btn-primary">Más información</a>
                </div>
                <img src="https://magicmirror.builders/img/explode.jpg" alt="[MagicMirror]" class="img-fluid w-75">
            </div>
        </div>
    </div>
</section>

<section class="index-info py-5 bg-light" id="tareas">
    <div class="container py-5">
        <div class="row pb-4 text-center">
            <div class="col">
                <h1>Tareas</h1>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <p class="lead">
                    Además del proyecto, anexamos nuestras tareas entregadas ordenadas por número de tarea y categorizadas por cada integrante del equipo. Cada tarea viene en documento word y una captura de cuando se envió la tarea.
                </p>
                <a href="#" class="btn btn-primary">Más información</a>
            </div>
        </div>
    </div>
</section>

<section class="index-info">
    <div class="container py-5">
        <div class="row pb-5 text-center">
            <div class="col">
                <h1>Integrantes</h1>
            </div>
        </div>
        <div class="row justify-content-around">
            <div class="col-md-4 col-lg-3 text-center alumno">
                <div class="pb-4 img-alumno">
                    <img src="https://semantic-ui.com/images/avatar2/large/matthew.png" alt="[alumno]" class="img-fluid rounded-circle">
                </div>
                <div class="content-alumno">
                    <h4>Díaz Alvarez Eduardo</h4>
                    <h6>2019602536</h6>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center alumno">
                <div class="pb-4 img-alumno">
                    <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/pablo_gomez/profile.jpg" alt="[alumno]" class="img-fluid rounded-circle">
                </div>
                <div class="content-alumno">
                    <h4>Gómez Morales Pablo Arturo</h4>
                    <h6>2015030486</h6>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 text-center alumno">
                <div class="pb-4 img-alumno">
                    <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/81621198_2691535927600754_4543309426110496768_o.jpg" alt="[alumno]" class="img-fluid rounded-circle">
                </div>
                <div class="content-alumno">
                    <h4>Romero Moreno Oscar Alejandro</h4>
                    <h6>2015081222</h6>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.html') ?>