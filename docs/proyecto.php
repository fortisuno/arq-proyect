<?php
    include('includes/header.html');
    include('includes/navbar.html');
?>

<nav class="bg-white border-right position-fixed pt-5 px-0 sidebar">
    <div class="pt-5">
        <div class="px-5 mb-5">
            <h1 class="mb-0">Proyecto</h1>
            <span>Espejo Inteligente <span class="badge badge-success">Equipo 3</span></span>
        </div>
    </div>
    <div class="nav flex-column" id="nav-sidebar">
        <a class="nav-link px-5 active" href="#introduccion">Introducción</a>
        <a class="nav-link px-5" href="#objetivo">Objetivo</a>
        <a class="nav-link px-5" href="#documentacion">Documentación</a>
        <a class="nav-link px-5" href="#pruebas">Pruebas</a>
        <a class="nav-link px-5" href="#estudio_del_mercado">Estudio del mercado</a>
        <a class="nav-link px-5" href="#reflexion">Reflexión</a>
    </div>
</nav>

<section class="pt-5" id="introduccion">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h2>Introducción</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-justify">
                <p>
                    Un espejo inteligente es un espejo bidireccional con una pantalla electrónica detrás del cristal. La pantalla puede mostrar al espectador diferentes tipos de información en forma de widgets, como el clima, la hora, la fecha y las actualizaciones de noticias. Este producto sería útil para personas ocupadas que desean realizar múltiples tareas y mantenerse informados. En lugar de extraer constantemente un dispositivo, uno podría informarse mientras termina las tareas diarias de aseo.
                </p>

                <p>
                    Gracias a los espejos inteligentes podrás tener en casa un probador virtual de ropa, una clase magistral de maquillaje y consultar las últimas noticias mientras te duchas. La llegada e imposición en la vida cotidiana del internet de las cosas está cada vez más presente. Marcas como Toshiba, Panasonic, Google o Apple están apostando fuerte por nuevos gadgets que están llamados a revolucionar nuestro día a día.
                </p>
                
                <p>
                    Se diseñó y construyo un propio prototipo y se profundizo en el mundo de los espejos inteligentes. Los productos actuales en el mercado de los espejos inteligentes son caros. Por ejemplo, un espejo a través de Glance Mirror con sede en Chicago (Lookmirror.com) cuesta $ 1800.00
                </p>

                <p>
                    Por ello, utilizando modulos de  <a href="https://magicmirror.builders/" class="link">MagicMirror²</a> realizamos un espejo que sea capaz de mostrar widgets atraves de el y que pueda tener funciones extras como lo es interactuar con un asistente virtual, por ejemplo, Google Assistant. Además de ello podra hacer funciones como IoT con el fin de utilizar un centro de control para casas inteligentes con un diseño más amigable y discreto para el lugar donde sea utilizado.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pt-5" id="objetivo">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h2>Objetivo</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-justify">
                <p>
                    México es un país que tiene demasiado talento y el suficiente potencial para poder alcanzar el primer mundo. Con este proyecto se pretende acercar un poco más a México a la tecnología que tienen los paises primer mundistas y usan en su día a día. Por otro lado, a pesar de que los espejos inteligentes (asi como los dispositivos IoT en general) no son nuevos en el mercado, este proyecto pretende ser de los primeros si no que el primero en ser desarrollado en México abaratando mucho el costo debido a que no será un producto de importación y ademas podría ayudar a la economía mexicana ya que al empezar a comercializarlo (teniendo encuenta las licencias necesarias) se estaría consumiendo producto mexicano y el dinero circularia en el mismo país.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pt-5" id="documentacion">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h2>Documentación</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Descripción</h4>
                <p>
                    Funciona como un espejo, pero es también una enorme pantalla LCD que te permite ver diferentes tipos de entrenamientos. En el futuro, aseguran que será todavía más inteligente y permitirá ejecutar más aplicaciones, convirtiéndose también en un accesorio perfecto para cualquier hogar.
                </p>
                <p>
                    Puesto que está equipado un micrófono puedes tener la posibilidad de hacer videollamadas, llamadas normales o acceder a funciones mediante comandos de voz.
                </p>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Características</h4>
                <p>
                    Las características del espejo son las siguientes, sin embargo, pueden variar durante el desarrollo:
                </p>
                <ul class="list-unstyled">
                    <li>-&nbsp&nbsp Dimensiones: 25x45cm</li>
                    <li>-&nbsp&nbsp SO: MagicMirror²</li> 
                    <li>-&nbsp&nbsp Micrófono: Sí</li> 
                    <li>-&nbsp&nbsp Cámara: No</li> 
                    <li>-&nbsp&nbsp Wifi: Sí</li> 
                    <li>-&nbsp&nbsp Sensores: No</li> 
                    <li>-&nbsp&nbsp Cargador: Sí</li> 
                    <li>-&nbsp&nbsp Almacenamiento: 64GB</li> 
                    <li>-&nbsp&nbsp Comandos de voz: Sí</li>
                </ul>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Componentes y materiales</h4>
                <p>
                    Los componentes que se utilizaron fueron:
                </p>
                <ul class="list-unstyled">
                    <li>-&nbsp&nbsp Espejo bidireccional de 30x40cm</li>
                    <li>-&nbsp&nbsp Raspberry PI 3B</li>
                    <li>-&nbsp&nbsp Fuente de alimentación 5V 2.5A</li>
                    <li>-&nbsp&nbsp Micro SD Adata clase 10 16GB</li>
                    <li>-&nbsp&nbsp Display LCD 15”</li>
                </ul>
                <p>
                    Para más información sobre especificaciones de hardware visite estos enlaces:
                </p>
                <ul class="list-unstyled">
                    <li><a href="https://www.raspberrypi.org/products/raspberry-pi-3-model-b/">Pagina Raspberry Pi 3B</a></li>
                    <li><a href="https://www.raspberrypi.org/products/raspberry-pi-universal-power-supply/">Pagina oficial de Raspberry Pi</a></li>
                    <li><a href="https://www.adata.com/gt/specification/203">Pagina oficial de Adata</a></li>
                </ul>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Costos</h4>
                <table class="table border rounded">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">Producto</th>
                        <th scope="col">Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Espejo bidireccional</td>
                            <td>$150</td>
                        </tr>
                        <tr>
                            <td>Cargador</td>
                            <td>$60</td>
                        </tr>
                        <tr>
                            <td>Display LCD 15'</td>
                            <td>$900</td>
                        </tr>
                        <tr>
                            <td>Raspberry Pi 3B</td>
                            <td>$600</td>
                        </tr>
                        <tr>
                            <td>Micro SD Adata clase 10 16GB</td>
                            <td>$110</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Sistema Operativo</h4>
                <p>
                    <a href="https://magicmirror.builders/" class="link">MagicMirror²</a> es una plataforma de espejo inteligente modular de código abierto. Con una creciente lista de módulos instalables, MagicMirror² permite convertir un espejo de pasillo o de baño en su asistente personal. MagicMirror² está construido por el creador del MagicMirror original con la increíble ayuda de una creciente comunidad de contribuyentes.
                </p>
                <p>
                    Por otro lado, <a href="https://magicmirror.builders/" class="link">MagicMirror²</a> se centra en un sistema de complemento modular y utiliza Electron como envoltorio de aplicaciones. ¡Así que no es necesario instalar más servidores web o navegadores!
                </p>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Requisitos Hardware</h4>
                <p>
                    Para que <a href="https://magicmirror.builders/" class="link">MagicMirror²</a> funcione, es necesario contar con una Raspberry Pi 3B o superior. Sin embargo, <a href="https://www.electronjs.org/">Electron</a>, el contenedor de aplicaciones alrededor de <a href="https://magicmirror.builders/" class="link">MagicMirror²</a> , es compatible con Raspberry Pi 2, 3 y 4. Actualmente, Raspberry Pi 0/1 no es compatible. Si desea ejecutar esto en una Raspberry Pi 1, use la función de solo servidor y configure usted mismo un navegador de pantalla completa. (Sí, las personas han logrado ejecutar MM² también en un Pi0, así que si insistes, busca en los foros).
                </p>
                <p>
                    Por otro lado, <a href="https://magicmirror.builders/" class="link">MagicMirror²</a> se centra en un sistema de complemento modular y utiliza Electron como envoltorio de aplicaciones. ¡Así que no es necesario instalar más servidores web o navegadores!
                </p>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Requisitos Software</h4>
                <p>
                    Como <a href="https://magicmirror.builders/" class="link">MagicMirror²</a> necesita de una Raspberry Pi, entonces es necesario contar con el SO <a href="https://www.raspberrypi.org/downloads/raspbian/">Raspbian</a> el cual se instala facilmente mediante NOOBS o directamente bootearlo en la ms desde su página oficial.
                </p>
                <p>
                    Por otro lado es necesario contar con la paquetería de <a href="https://nodejs.org/es/">Node.js</a> para poder instalar <a href="https://www.electronjs.org/">Electron</a> y algunos otros paquetes que podrían ser necesarios.
                </p>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Instalación</h4>
                <p>
                    El Magic Mirror se puede instalar manualmente o utilizando instaladores automáticos. A principios de 2020 se tomó la decisión de eliminar el instalador automático del repositorio principal de MagicMirror² y moverlo a un repositorio separado mantenido por la comunidad. Para obtener más información sobre esta decisión, consulte el número 1860 en GitHub.
                </p>
                <p>
                    Por lo tanto, la única forma de instalación oficialmente admitida es mediante el uso de una instalación manual. El uso de scripts de instalación externos es bajo su propio riesgo, pero puede facilitar el proceso. Los instaladores automáticos disponibles se pueden encontrar en: métodos de instalación alternativos.
                </p>
                <h6 class="font-weight-bold">Instalación Manual:</h6>
                <ul class="list-unstyled">
                    <li>Descargue e instale la última versión de <a href="https://nodejs.org/es/">Node.js</a>:</li>
                    <li><code>$ curl -sL https://deb.nodesource.com/setup_10.x | sudo -E bash -</code></li>
                    <li><code>$ sudo apt install -y nodejs</code></li>
                    <li class="mt-3">Clone el repositorio y consulte la rama maestra:</li>
                    <li><code>$ git clone https://github.com/MichMich/MagicMirror</code></li>
                    <li class="mt-3">Ingrese al repositorio:</li>
                    <li><code>$ cd MagicMirror/</code></li>
                    <li class="mt-3">Instala la aplicación:</li>
                    <li><code>$ npm install</code></li>
                    <li class="mt-3">Haga una copia del archivo de muestra de configuración:</li>
                    <li><code>$ cp config/config.js.sample config/config.js</code></li>
                    <li class="mt-3">Iniciar la aplicación:</li>
                    <li><code>$ npm run start</code></li>
                    <li class="mt-3">(Para Servidor sólo uso)</li>
                    <li><code>$ npm run server</code></li>
                </ul>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Uso</h4>
                <p>
                    Para que el espejo pueda ser configurado correctamente, se debe tomar en cuenta lo siguiente:
                </p>

                <ul class="list-unstyled">
                    <li>-&nbsp&nbsp <code>npm start</code> no no trabajar a través de SSH. Pero puedes usar <code>DISPLAY=:0 nohup npm start &</code> en su lugar.</li>
                    <li>-&nbsp&nbsp Esto inicia el espejo en la pantalla remota.</li>
                    <li>-&nbsp&nbsp Si desea depurar en Raspberry Pi, puede usar el npm start devcual iniciará MM con las herramientas de desarrollo habilitadas.</li>
                    <li>-&nbsp&nbsp Para acceder al menú de la barra de herramientas cuando está en modo espejo, presione la ALTtecla.</li>
                    <li>-&nbsp&nbsp Para alternar (web) Developer Toolsdesde el modo espejo, use CTRL-SHIFT-Io ALTy seleccione View.</li>
                </ul>
            </div>
            <div class="col-12 text-justify mb-3">
                <h4 class="text-secondary text-left">Enlaces de interés</h4>
                <p>
                    Los siguientes enlaces son una recopilación de documentación oficial del software utilizado para la elaboración del espejo inteligente, dicha documentación ha sido de mucha ayuda para la configuración del mismo:
                </p>
                <ul class="list-unstyled">
                    <li><a href="https://docs.magicmirror.builders/">Documentación MagicMirror²</a></li>
                    <li><a href="https://nodejs.org/es/docs/">Documentación Node.js</a></li>
                    <li><a href="https://www.electronjs.org/docs">Documentación Electron</a></li>
                    <li><a href="https://developers.google.com/assistant/sdk/reference/rpc">Documentación API Google Assistant</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="pt-5" id="pruebas">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h2>Pruebas</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="text-justify">
                    A lo largo del desarrollo del espejo inteligente se han estado dando pasos y nos hemos dado topes, sin embargo simepre seguimos adelante y solucionamos los errores para que quede funcional. Los siguientes muestran como se ha avanzado en fases, cada vez añadiendo más funciones:
                </p>
                <span class="text-muted my-5 d-block w-100">
                    AVISO: El proyecto se ha atrasado un poco por problemas generador debido a la cuarentena, pero ya estamos reanudando las actulaizaciones y pronto subiremos nuevos avances del proyecto.
                </span>
                <div class="embed-responsive embed-responsive-16by9 rounded-lg border my-3 mx-auto">
                    <iframe src="https://drive.google.com/file/d/1YrnGi4s5K4dIY7Hn3uvevljd3r0kpLLG/preview" width="640" height="480" class="embed-responsive-item"></iframe>
                </div>
                <div class="embed-responsive embed-responsive-16by9 rounded-lg border my-3 mx-auto">
                    <iframe src="https://drive.google.com/file/d/1Z-FIv7rX889BPetHiME_XekhZF4T-JJn/preview" width="640" height="480" class=embed-responsive-item"></iframe>
                </div>
                <div class="embed-responsive embed-responsive-16by9 rounded-lg border my-3 mx-auto">
                    <iframe src="https://drive.google.com/file/d/1Z-CewEkUcC0LMrTbnFVLtokqEBqyFK1T/preview" width="640" height="480" class="embed-responsive-item"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5" id="estudio_del_mercado">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h2>Estudio del mercado</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-justify">
                    Preparamos un breve cuestionario con el cúal pretendemos saber a que tipo de persona les gusta la idea o interesa un espejo inteligente, así como tambien con que asistentes virtuales inteligentes estan familiarizados y tambien que funciones se les harían útiles que tuviera el espejo inteligente. El cuestionario fue contestado por 45 personas de las cuales se obtuvo lo siguiente:
                </p>
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em1.png" alt="[imagen]" class="img-fluid rounded my-3">
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em2.png" alt="[imagen]" class="img-fluid rounded my-3">
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em3.png" alt="[imagen]" class="img-fluid rounded my-3">
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em4.png" alt="[imagen]" class="img-fluid rounded my-3">
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em5.png" alt="[imagen]" class="img-fluid rounded my-3">
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em6.png" alt="[imagen]" class="img-fluid rounded my-3">
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em7.png" alt="[imagen]" class="img-fluid rounded my-3">
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em81.png" alt="[imagen]" class="img-fluid rounded my-3">
                <img src="https://raw.githubusercontent.com/pgomezm0486/arq-proyect/master/src/em9.png" alt="[imagen]" class="img-fluid rounded mt-3">
            </div>
        </div>
    </div>
</section>

<section class="pt-5" id="reflexion">
    <div class="container pt-5">
        <div class="row">
            <div class="col">
                <h2>Reflexión</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-justify">
                <p>
                    La tecnología nos lleva a nuevas oportunidades tanto en el trabajo, el hogar, los negocios, etc. pues desempeña un papel muy importante en la sociedad ya que la tecnología nos da las posibilidades de desarrollar opciones culturales o sociales. Este producto tiene un gran potencial principalmente en los mercados de lujo debido a los altos costos actuales. Ya que los aficionados a la electrónica de bricolaje son los que producen la mayoría de los espejos inteligentes, además de algunas pequeñas empresas.
                </p>
                <p>
                    La encuesta realizada nos hizo llegar a la conclusión de que es extremadamente interesante para las personas y que estarían dispuestas a comprar una para su propia casa, ya que los espejos inteligentes se pueden producir con bastante facilidad dependiendo de qué tan complejo se quiera hacer.
                </p>
            </div>
        </div>
    </div>
</section>

<?php include('includes/footer.html') ?>