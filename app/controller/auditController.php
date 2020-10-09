<?php 

class auditController extends Controller{

   public function index(){
      $this->view('auditor/indexView');
      
      $this->view->render(); // This is how load the view
   }

   public function indexModel(){
      $this->model('auditor/indexModel');
      
      $this->model->load(); // This is how load the model
   }

  
}