<?php

if(isset($_POST['submit'])){
$email = trim($_POST['email']);
$name = trim($_POST['name']);
$surname = trim($_POST['surname']);
$commentary = trim($_POST['commentary']);

$consulta = "E-mail: " . $email . " Nombre: " . $name . " Apellido: " . $surname . "Comentario: " . $commentary;
mail("santiagotarrab@gmail.com", "Contacto desde Formulario", $consulta);
header('Location:index.html');}
?>