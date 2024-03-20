<?php

 ?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="estilo.css">
    <title>GET THE BEST</title>
    <link rel="icon" type="image/png" href="/backend/img/favicon.png">

    <!--Stypes backend/img/favicon.png-->
    <style>
        *{font-family:  'Rubik', sans-serif;}
    </style>
    
    <link rel="icon" type="image/png" href="backend/img/favicon.png"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- MENU -->
    <div class="contenedor-header">
        <header>
            <h1><span class="txtRojo">GET</span> THE BEST</h1>
            <nav id="nav">
                <a href="#inicio" onclick="seleccionar()">inicio</a>
                <a href="#nosotros" onclick="seleccionar()">Nosotros</a>
                <a href="#servicios" onclick="seleccionar()">Servicios</a>
                <a href="#comodidades" onclick="seleccionar()">Comodidades</a>
                <a href="#galeria" onclick="seleccionar()">Galería</a>
                <a href="#equipo" onclick="seleccionar()">Equipo</a>
                <a href="#contacto" onclick="seleccionar()">Contacto</a>
                <a href="frontend/login.php" onclick="seleccionar()">Login</a>
            </nav>
            <div class="redes">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
            <!-- Icono del menu responsive -->
            <div id="icono-nav" class="nav-responsive" onclick="mostrarOcultarMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>                
        </header>
    </div>

    <!-- SECCION INICIO -->
    <section id="inicio" class="inicio">
        <div class="contenido-seccion">
            <div class="info">
                <h2>BUILDING <span class="txtRojo">YOUR BODY</span></h2>
                <p>Triunfar es más facil de lo que piensas!</p>
                <a href="#nosotros" class="btn-mas">
                    <i class="fa-solid fa-circle-chevron-down"></i>
                </a>
            </div>
            <div class="opciones">
                <div class="opcion">
                    01.FITNESS
                </div>
                <div class="opcion">
                    02.CROSSFIT
                </div>
                <div class="opcion">
                    03.BOXING
                </div>
                <div class="opcion">
                    04.ENDURANCE
                </div>
                <div class="opcion">
                    05.YOGA
                </div>
                <div class="opcion">
                    06.CARDIO
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION NOSOTROS -->
    <section id="nosotros" class="nosotros">
        <div class="fila">
            <div class="col">
                <img src="img/nosotros.png" alt="">
            </div>
            <div class="col">
                <div class="contenedor-titulo">
                    <div class="numero">
                        01
                    </div>
                    <div class="info">
                        <span class="frase">LA MEJOR EXPERIENCIA</span>
                        <h2>NOSOTROS</h2>
                    </div>
                </div>
                <p class="p-especial">Building your body!</p>
                <p>Somo GET THE BEST una compañia enfocada a cuidar de tu salud fisica y mental mediante el entrenamiento fisico, no solo nos importa que estes bien tambien nos importa que te sientas bien.</p>
            </div>
        </div>
        <hr>
        <div class="fila-nosotros">
            <div class="col1">
                <span class="frase">
                    <span class="txtRojo">ENTRENA</span> DIFERENTE
                </span>
                <h2>ENTRENA <span class="txtRojo">GRATIS</span> HOY!</h2>
            </div>
            <div class="col2">
            <!--js-->
            <button onclick="window.location.href='frontend/registrar.php'">PASE LIBRE</button> 
            <!--js-->
            </div>
        </div>
    </section>

    <!-- SECCION SERVICIOS -->
    <section class="servicios" id="servicios">
        <div class="contenido-seccion">
            <div class="fila">
                <div class="col">
                    <div class="contenedor-titulo">
                        <div class="numero">
                            02
                        </div>
                        <div class="info">
                            <span class="frase">LA MEJOR EXPERIENCIA</span>
                            <h2>SERVICIOS</h2>
                        </div>
                    </div>
                    <p class="p-especial">Nos adaptamos a tus gustos.</p>
                    <p>En GET THE BEST contamos con una gran variedad de deportes los cuales podras practicar ya sea en clases personalizadas o en grupo, no todo tiene que ser siempre maquinas</p>
                </div>
                <div class="col">
                    <img src="img/servicios.png" alt="">
                </div>
            </div>
        </div>
        <div class="info-servicios">
            <table>
                <tr>
                    <td>
                        <i class="fa-solid fa-person-walking"></i>
                        <h3><span class="txtRojo">Clases </span> de Fitness</h3>
                        <p>Es una combinación de disciplinas tales como halterofilia, entrenamiento metabólico o gimnástico cuya función es desarrollar y mejorar las habilidades humanas. Esta disciplina muy completa donde se pone a prueba la resistencia a través de diferentes ejercicios ejecutados a alta intensidad.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-dumbbell"></i>
                        <h3><span class="txtRojo">Clases </span> de Crossfit</h3>
                        <p>El CrossFit se define como "un sistema de entrenamiento de fuerza y acondicionamiento basado en ejercicios funcionales constantemente variados realizados a una alta intensidad", así explica el gimnasio Crossfit Singular Box esta disciplina que cada vez tiene más adeptos</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-mitten"></i>
                        <h3><span class="txtRojo">Clases </span> de Boxeo</h3>
                        <p>¿En qué consisten las clases de boxeo? Los entrenamientos son clases colectivas en la que se enseñan movimientos propios del boxeo como el jab, directo, crochet, uppercut, hook, swing y diferentes tipos de esquivas, además de desplazamientos y posiciones de pies, caderas, cabeza y hombros..</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <i class="fa-solid fa-clock"></i>
                        <h3><span class="txtRojo">Clases </span> de Enduro</h3>
                        <p>El enduro es una modalidad deportiva del motociclismo que se practica en campo abierto y también cubierto. También existe la modalidad de enduro en bicicleta. Se trata de una carrera tipo rally, en la cual se realizan recorridos por rutas (o etapas) establecidas por la organización en tiempos prefijados.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-heart-circle-bolt"></i>
                        <h3><span class="txtRojo">Clases </span> de Cardio</h3>
                        <p>El ejercicio cardiovascular también se denomina ejercicio aeróbico. El ejercicio aeróbico emplea los músculos grandes y puede realizarse durante largo tiempo. Por ejemplo, las caminatas, el trote, la natación y el ciclismo son actividades aeróbicas.</p>
                    </td>
                    <td>
                        <i class="fa-solid fa-bicycle"></i>
                        <h3><span class="txtRojo">Clases </span> de Ciclismo</h3>
                        <p>Las clases de spinning o ciclismo indoor están presentes en casi todos los gimnasios del mundo y son una de las actividades mejor valoradas por los clientes. Son actividades que se realizan en grupo al ritmo de la música y que suelen durar unos 45 minutos.</p>
                    </td>
                </tr>
            </table>
        </div>
    </section>

    <!-- SECCION COMODIDADES -->
    <section id="comodidades" class="comodidades">
        <div class="fila">
            <div class="col">
                <img src="img/nosotros.png" alt="">
            </div>
            <div class="col">
                <div class="contenedor-titulo">
                    <div class="numero">
                        03
                    </div>
                    <div class="info">
                        <span class="frase">LA MEJOR EXPERIENCIA</span>
                        <h2>COMODIDADES</h2>
                    </div>
                </div>
                <p class="p-especial">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <ul>
                    <li><span>BAÑO</span> - Contamos con baños para todos nuestros clientes y visitantes, para que siempre puedas estar comodo</li>
                    <li><span>WIFI GRATIS</span> - Si eres parte de nuestros gimnasio podras disfrutar de nuestro potente internet para que puedas entrenar escuchando lo que mas te gusta</li>
                    <li><span>AGUA GRATIS</span> - Siempre y cuando seas parte de nuestra gran familia GET THE BEST nos encargaremos de darte hidratación para que nunca estes con sed</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- SECCION GALERIA -->
    <section class="galeria" id="galeria">
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
                <div class="numero">
                    04
                </div>
                <div class="info">
                    <span class="frase">LA MEJOR EXPERIENCIA</span>
                    <h2>GALERIA</h2>
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <img src="img/f1.jpg" alt="">
                </div>
                <div class="col">
                    <img src="img/f2.jpg" alt="">
                </div>
                <div class="col">
                    <img src="img/f3.jpg" alt="">
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <img src="img/f4.jpg" alt="">
                </div>
                <div class="col">
                    <img src="img/f5.jpg" alt="">
                </div>
                <div class="col">
                    <img src="img/f6.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    
    <!-- SECCION EQUIPO -->
    <section class="equipo" id="equipo">
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
                <div class="numero">
                    05
                </div>
                <div class="info">
                    <span class="frase">LA MEJOR EXPERIENCIA</span>
                    <h2>EQUIPO</h2>
                </div>
            </div>
            <div class="fila">
                <div class="col">
                    <img src="img/e1.png" alt="">
                    <div class="info">
                        <h2>MARCOS</h2>
                        <p>Fitness - Pilates - Yoga</p>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <img src="img/e2.png" alt="">
                    <div class="info">
                        <h2>PATRICIA</h2>
                        <p>Fitness - Pilates - Yoga</p>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <img src="img/e3.png" alt="">
                    <div class="info">
                        <h2>JUAN</h2>
                        <p>Fitness - Pilates - Yoga</p>
                        <a href="#">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECCION CONTACTO -->
    <section class="contacto" id="contacto">
        <div class="contenido-seccion">
            <div class="contenedor-titulo">
            
            <div class="fila-datos">
                <div class="col">
                    <i class="fa-solid fa-location-dot"></i>
                    Bogotá
                </div>
                <div class="col">
                    <i class="fa-solid fa-phone"></i>
                    +57 322 2024365
                </div>
                <div class="col">
                    <i class="fa-regular fa-clock"></i>
                    Lunes a Domingo, 8:00 AM - 9:00 PM
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="info">
            <p>2024 - <span class="txtRojo">GET THE BEST</span> Todos los derechos reservados</p>
            <div class="redes">
                <a href="#">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="app.js"></script>
</body>
</html>