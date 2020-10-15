<?php 

class auditController extends Controller{

   // load the index view of auditor
   public function index(){
      $this->view('auditor/indexView');
      
      $this->view->render(); 
   }
   public function indexModel(){          // load the model for index view of auditor
      $this->model('auditor/indexModel');
      
      $this->model->load(); 
   }

   // load the userProfile view of auditor
   public function userProfile(){
      $this->view('auditor/userProfileView');
      
      $this->view->render();      
   }
   public function userProfileModel(){       // load the model for userProfile view of auditor
      $this->model('auditor/userProfileModel');
      
      $this->model->load();      
   }




  
}