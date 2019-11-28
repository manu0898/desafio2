<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>

    <body>

        <header class="bg-dark">
            <?php
            include '../General/Encabezado.php';
            session_start();
            session_regenerate_id();
            ?>

            <!-- Menú -->
            <div class="container-fluid">
                <header class="row">
                    <!--                expand-sm -> para que cuanco la pantalla sea pequeña se expanda al ancho de la pantalla
                                    fixed-top -> para fijarlo arriba del todo-->
                    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-tope">

                        <!--boton para mortar cuendo el boton se haga responsive-->

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="menu">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a href="../../index.php" class="nav-link">Inicio</a>
                                </li>
                                <li class="nav-item active">
                                    <a href="../General/ventanaNoticias.php" class="nav-link">Noticias</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Listar equipos</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="ventanaListarPorNombre.php">Por nombre</a>
                                        <a class="dropdown-item" href="ventanaListarPorLiga.php">Por liga</a>
                                        <a class="dropdown-item" href="ventanaListarPorPais.php">Por país</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown">Area equipos</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="../Registrado/ventanaAnadirEquipo.php">Añadir equipo</a>
                                        <a class="dropdown-item" href="../Admin/ventanaValidarEquipo.php">Validar equipo</a>
                                    </div>
                                </li>
                                <li class="nav-item active">
                                    <a href="../Admin/ventanaGestionUsuarios.php" class="nav-link">Gestión de usuarios</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </header>
            </div>
        </header>

        <main>
            <div class="container">

                <div class="row justify-content-center align-items-center">
                    
                    <div class="col-md-4">
                        <h1>Inicio de sesión</h1>
                    </div>
                    
                </div>

                <div class="row justify-content-center align-items-center"> 
                    
                    <div class="col-md-4">
                        
                        <form name="form" action="Controladores/controlador.jsp" method="POST">
                            <h3>Usuario</h3>
                            <input type="email" id="email" name="usuarioLogin" placeholder="usuario@usuario.com"/><br>
                            <h3>Contraseña</h3>
                            <input type="password" name="contraLogin" placeholder="contraseña"/><br><br>

                            <a href="ventanaRegistro.php">Registrarse</a><br>
                            <a href="ventanaRecuperarContra.php">He olvidado mi contraseña</a><br>
                            <input type="submit" name="login" value="Iniciar sesión">
                        </form>
                        
                    </div>

                </div>

            </div>
        </main>

        <footer class="bg-dark">
            <?php
            include './piePagina.php';
            ?>
        </footer>

    </body>
</html>
