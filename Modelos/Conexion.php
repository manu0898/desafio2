<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'Constantes.php';

/**
 * Description of Conexion
 *
 * @author daw209
 */
class Conexion {

    private static $Conex;

    static function iniciarBD() {
        self::$Conex = mysqli_connect(Constantes::$URL, Constantes::$usuario, Constantes::$password, Constantes::$BBDD);

        if (mysqli_connect_errno(self::$Conex)) {
            //print "Fallo al conectar a MySQL: " . mysqli_connect_error();
        }
    }

    static function cerrarBD() {
        mysqli_close(self::$Conex);
    }

    static function existeUsuario($email) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "SELECT * FROM Usuario WHERE email = ?";

        $stmt = mysqli_prepare($conexion, $consulta);
        $val1 = $email;

        mysqli_stmt_bind_param($stmt, "s", $val1);

        $usuario = "";

        if (mysqli_stmt_execute($stmt)) {
            $resultado = mysqli_stmt_get_result($stmt);
            $fila = mysqli_fetch_array($resultado);
            $usuario = new Usuario($fila["email"], $fila["nombre"], $fila["apellido"], $fila["contra"], $fila["rol"]);
        }

        self::cerrarBD();

        return $usuario;
    }

    static function login($email, $contra) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "SELECT * FROM Usuario WHERE email = ? AND contra = ?";

        $stmt = mysqli_prepare($conexion, $consulta);
        $val1 = $email;
        $val2 = $contra;

        mysqli_stmt_bind_param($stmt, "ss", $val1, $val2);

        if (mysqli_stmt_execute($stmt)) {
            $resultado = mysqli_stmt_get_result($stmt);
            $fila = mysqli_fetch_array($resultado);
            $usuario = new Usuario($fila["email"], $fila["nombre"], $fila["apellido"], $fila["contra"], $fila["rol"]);
        }

        self::cerrarBD();

        return $usuario;
    }

    static function obtenerContraUsu($email) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "SELECT * FROM Usuario WHERE email = ?";

        $stmt = mysqli_prepare($conexion, $consulta);
        $val1 = $email;

        mysqli_stmt_bind_param($stmt, "s", $val1);

        if (mysqli_stmt_execute($stmt)) {
            $resultado = mysqli_stmt_get_result($stmt);
            $fila = mysqli_fetch_array($resultado);
            $usuario = new Usuario($fila["email"], $fila["nombre"], $fila["apellido"], $fila["contra"], $fila["rol"]);
        }

        self::cerrarBD();

        return $usuario;
    }

    static function listarUsuarios() {

        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "SELECT * FROM Usuario";

        if ($resultado = mysqli_query($conexion, $consulta)) {

            while ($fila = mysqli_fetch_row($resultado)) {

                $usuario = new Usuario($fila[2], $fila[0], $fila[1], $fila[3], $fila[4]);
                $vector[] = $usuario;
            }

            mysqli_free_result($resultado);
        }

        self::cerrarBD();

        return $vector;
    }

    static function insertarUsuario($nombre, $ape, $email, $contra) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $query = "INSERT INTO Usuario (nombre, apellido, email, contra, rol) VALUES (?,?,?,?,?)";
        $stmt = mysqli_prepare($conexion, $query);

        mysqli_stmt_bind_param($stmt, "sssss", $val1, $val2, $val3, $val4, $val5); //las sssss es porque son tipo string.

        $val1 = $nombre;
        $val2 = $ape;
        $val3 = $email;
        $val4 = $contra;
        $val5 = 'usuario';

        mysqli_stmt_execute($stmt);

        self::cerrarBD();
    }

    static function insertarUsuarioRanking($email) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $query = "INSERT INTO Ranking (usuario, victorias, derrotas) VALUES (?,0,0)";
        $stmt = mysqli_prepare($conexion, $query);

        mysqli_stmt_bind_param($stmt, "s", $val1); //las sssss es porque son tipo string.

        $val1 = $email;

        mysqli_stmt_execute($stmt);

        self::cerrarBD();
    }

    static function modificarUsuario($nombre, $ape, $rol, $email) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "UPDATE Usuario SET nombre=?, apellido=?, rol=? WHERE email=?";

        $stmt = mysqli_prepare($conexion, $consulta);

        $val1 = $nombre;
        $val2 = $ape;
        $val3 = $rol;
        $val4 = $email;

        mysqli_stmt_bind_param($stmt, "ssss", $val1, $val2, $val3, $val4);

        mysqli_stmt_execute($stmt);

        self::cerrarBD();
    }

    static function eliminarUsuario($email) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "DELETE FROM Usuario WHERE email=?";

        $stmt = mysqli_prepare($conexion, $consulta);

        $val1 = $email;

        mysqli_stmt_bind_param($stmt, "s", $val1);

        mysqli_stmt_execute($stmt);

        self::cerrarBD();
    }

    static function eliminarUsuarioRanking($email) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "DELETE FROM Ranking WHERE usuario=?";

        $stmt = mysqli_prepare($conexion, $consulta);

        $val1 = $email;

        mysqli_stmt_bind_param($stmt, "s", $val1);

        mysqli_stmt_execute($stmt);

        self::cerrarBD();
    }

    static function listarRanking() {

        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "SELECT * FROM Ranking ORDER BY victorias DESC";
        $vector;

        if ($resultado = mysqli_query($conexion, $consulta)) {

            while ($fila = mysqli_fetch_row($resultado)) {

                $ranking = new Ranking($fila[0], $fila[1], $fila[2]);
                $vector[] = $ranking;
            }

            mysqli_free_result($resultado);
        }

        self::cerrarBD();

        return $vector;
    }

    static function anadirVictoria($usuario) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "UPDATE Ranking SET victorias=victorias+1 WHERE usuario=?";

        $stmt = mysqli_prepare($conexion, $consulta);

        $val1 = $usuario;

        mysqli_stmt_bind_param($stmt, "s", $val1);

        mysqli_stmt_execute($stmt);

        self::cerrarBD();
    }

    static function anadirDerrota($usuario) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "UPDATE Ranking SET derrotas=derrotas+1 WHERE usuario=?";

        $stmt = mysqli_prepare($conexion, $consulta);

        $val1 = $usuario;

        mysqli_stmt_bind_param($stmt, "s", $val1);

        mysqli_stmt_execute($stmt);

        self::cerrarBD();
    }

    static function nuevaContrasena($email, $contraNueva) {
        self::iniciarBD();
        $conexion = self::$Conex;

        $consulta = "UPDATE Usuario SET contra=? WHERE email=?";

        $stmt = mysqli_prepare($conexion, $consulta);

        $val1 = $contraNueva;
        $val2 = $email;

        mysqli_stmt_bind_param($stmt, "ss", $val1, $val2);

        mysqli_stmt_execute($stmt);

        self::cerrarBD();
    }

}
