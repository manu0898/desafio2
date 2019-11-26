<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Course CSS -->
        <link rel="stylesheet" href="../css/micss.css" />
        <style>
            img{
                width: 64px;
                height: 64px;
            }
        </style>
    </head>

    <body>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <div class="container-fluid">
            <header class="row">
                <!--                expand-sm -> para que cuanco la pantalla sea pequeña se expanda al ancho de la pantalla
                                fixed-top -> para fijarlo arriba del todo-->
                <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-tope">

                    <a class="navbar-brand" href="#"><img src="../imagenes/logo.png"/></a>
                    <!--boton para mortar cuendo el boton se haga responsive-->

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="menu">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a href="#" class="nav-link">Inicio</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a  class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Noticias</a>
                                <div class="dropdown-menu dropdown-menu-left">
                                    <a class="dropdown-item" href="#">Ultimas Noticias</a>
                                    <a class="dropdown-item" href="#">Noticias Destacadas</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Nosotros</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">La empresa</a>
                                    <a class="dropdown-item" href="#">Trabaja con nosotros</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Contacto</a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">¿Dónde estamos?</a>
                                    <a class="dropdown-item" href="#">Servicio al cliente</a>
                                </div>
                            </li>
                        </ul>

                        <form class="form-inline">
                            <input type="submit" name="login" value="Login">
                        </form>
                    </div>
                </nav>
            </header>
        </div>

    </body>
</html>
