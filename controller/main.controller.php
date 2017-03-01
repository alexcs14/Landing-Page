<?php
class MainController{

  public function main(){
    require_once "views/include/header.php";
    require_once "views/module/inicio/index.php";
    require_once "views/include/footer.php";
  }

  public function qs(){
    require_once "views/include/header.php";
    require_once "views/module/inicio/quienes_somos.php";
    require_once "views/include/footer.php";
  }

}
?>
