<?php

require 'libreria/rb.php';

R::setup('mysql:host=localhost; dbname=employees', 'root', 'home9226');

if (R::testConnection()) {
    echo "<p><b>CONEXIÓN REALIZADA</b></p>";
} else {
    echo "<p><b>ERROR DE CONEXIÓN</b></p>";
    return;
}

$employees = R::load( 'employees', 300037);
$employees->first_name = 'ANA';
$employees->last_name = 'PURE';
$employees->gender = 'F';
R::store($employees);

R::close();
?>