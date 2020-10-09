<?php 

class villageController extends Controller{

   public function index(){
      $this->view('villageOfficer/indexView');
      
      $this->view->render(); // This is how load the view
   }

  
}