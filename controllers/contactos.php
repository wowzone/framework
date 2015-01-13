<?php
require "config.php";
//require "helpers.php";

$email ='mejorando@mejorando.la';
$titulo = 'Contactenos';

view('contactos', compact('titulo','email'));