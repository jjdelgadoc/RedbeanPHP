<?php

require 'libreria/rb.php';

R::setup('mysql:host=localhost; dbname=employees', 'root', 'home9226');

if (R::testConnection()) {
    echo "<p><b>CONEXIÓN REALIZADA</b></p>";
} else {
    echo "<p><b>ERROR DE CONEXIÓN</b></p>";
    return;
}

$employees = R::dispense( 'employees' );
$employees->emp_no = 300037;
$employees->birth_date = '1953-09-02';
$employees->first_name = 'FELIPE';
$employees->last_name = 'PURE';
$employees->gender = 'M';
$employees->hire_date = '1953-09-02';
R::store($employees);

R::close();
?>