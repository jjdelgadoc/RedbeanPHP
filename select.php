<?php

require 'libreria/rb.php';

R::setup('mysql:host=localhost; dbname=employees', 'root', 'home9226');

if (R::testConnection()) {
    echo "<p><b>CONEXIÓN REALIZADA</b></p>";
} else {
    echo "<p><b>ERROR DE CONEXIÓN</b></p>";
    return;
}

echo "Registros<hr>";
$result = R::findAll("employees", "limit 100");
Foreach ($result as $registro) {
    echo $registro["id"] . " - " . $registro["first_name"] . "<br>";
}

R::close();
?>