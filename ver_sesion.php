<?php
//session_start();

if ($_SESSION['usu_cod'] == null) {
    $_SESSION['error'] = "Inicie Sesión";
    header("location:http//localhost/lp3");
    exit();
}
