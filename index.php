<?php
if (isset($_REQUEST["c"])){ //Se verificar si existe o mejor dicho, se esta llamando un controlador
  $controller = strtolower($_REQUEST["c"]); //Acá se inicia el controlador
  $action = isset($_REQUEST["a"]) ? $_REQUEST["a"]:"index"; //Y aquí la acción, en caso de no haber acción se inicia la funcion "Index"
  require_once "controller/$controller.controller.php"; //Desde acá se llama al controlador en la carpeta
  $controller = ucwords($controller).'Controller'; //Acá se llama a la clase de controllador
  $controller = new $controller;
  call_user_func(array($controller,$action));
}else{ //En caso que no exista, pasa lo siguiente:
  $controller = "main"; //Se llama al controlador "main", y este se guarda en la variable $controller
  require_once "controller/$controller.controller.php"; //Llamamos al controlador "main" desde la carpeta
  $controller = ucwords($controller).'Controller'; //Buscamos la clase
  $controller = new $controller; //Instanciamos el controlador
  $controller -> main(); //Y por ultimo llamamos la funcion "Main"
}
?>
