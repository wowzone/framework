<?php
require "config.php";
//require "helpers.php";

$confidential ="Wow this is a private sentence";
$language = "PHP";
$titulo = "Mejorandola";

view('home', compact('language','titulo'));


