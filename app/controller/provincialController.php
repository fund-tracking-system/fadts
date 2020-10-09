<?php 

class provincialController extends Controller{

   public function index(){
      $this->view('provincialSec/indexView');
      
      $this->view->render(); // This is how load the view
   }

  
}