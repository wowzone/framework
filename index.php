<?php
 
require 'config.php';
require 'helpers.php';

//llamar al controlador indicado

/*if (empty($_GET['url']))
{
    $_GET['url']='home';
}*/

controller($_GET['url']);


