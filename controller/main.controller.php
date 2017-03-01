<?php
class MainController{

  public function main(){
    require_once "views/include/header.php";
    require_once "views/module/inicio/index.php";
    require_once "views/include/footer.php";
  }

  public function qs(){
    require_once "views/include/header.php";
    require_once "views/module/menu/quienes_somos.php";
    require_once "views/include/footer.php";
  }

  public function mv(){
    require_once "views/include/header.php";
    require_once "views/module/menu/mision-vision.php";
    require_once "views/include/footer.php";
  }

  public function info(){
    require_once "views/include/header.php";
    require_once "views/module/menu/informacion.php";
    require_once "views/include/footer.php";
  }

  public function obj(){
    require_once "views/include/header.php";
    require_once "views/module/menu/objetivo.php";
    require_once "views/include/footer.php";
  }
}
?>
