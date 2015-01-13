<?php

function view( $template, $vars = array() )
{
    extract($vars);
	require "views/$template.tpl.php";
}

function controller($name)
{
    //en caso de que la url este vacia
    if(empty($name))
    {
        $name = 'home';
    }
    //si encuentra la url
    $file= "controllers/$name.php";
    //exit($file);
    
    if(file_exists ($file))
    {
       require $file;
    }
    //de no existir la url, se podria construir un controlador para esto.
    else
    {
        header("HTTP/1.0 404 Not Found");
        exit("pagina no encontrada");
    }
}