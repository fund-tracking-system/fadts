<?php 

class divisionalController extends Controller{

   public function index(){
      $this->view('divisionalSec/indexView');
      
      $this->view->render(); // This is how load the view
   }

   public function indexModel(){       // This is just a example for how to load a model
      $this->model('divisionalSec/indexModel');
      
      $this->model->load(); // This is how load the view
   }

  
}