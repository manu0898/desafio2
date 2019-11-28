<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Inicio</title>

        <!-- Course CSS -->
        <link rel="stylesheet" href="css/micss.css" />
    </head>

    <body>

        <header class="bg-dark">
            <?php
            include './Vistas/General/Encabezado.php';
            session_start();
            session_regenerate_id();
            ?>
        </header>

        <main>
            <div class="container">

                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4">
                        <img src="imagenes/random.jpeg">
                    </div>
                </div>

                <div class="row justify-content-center align-items-center"> 
                    <div class="col-md-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque sed risus condimentum, ullamcorper sapien quis, ullamcorper tellus. Nulla aliquet vitae orci ut malesuada. Donec hendrerit accumsan ante, volutpat vehicula arcu pulvinar vitae. Sed vel ex lacinia, feugiat nulla vel, varius turpis. Aliquam nec nunc mattis velit posuere dictum. Sed placerat mauris ligula, id semper odio sagittis non. Cras ac imperdiet quam. Maecenas id ornare nisl, at aliquet odio. Fusce ligula est, laoreet eu imperdiet in, porttitor at nisi. In elementum sodales leo id scelerisque. Suspendisse in interdum urna. Phasellus turpis dolor, lacinia sed tortor id, scelerisque condimentum lorem. Praesent convallis dui risus, vel varius nisi dictum quis. Aenean sapien mi, luctus nec dolor ac, dictum pretium justo. </p>
                    </div>

                </div>

            </div>
        </main>

        <footer class="bg-dark">
            <?php
            include './Vistas/General/piePagina.php';
            ?>
        </footer>

    </body>
</html>
