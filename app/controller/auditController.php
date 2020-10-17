<?php 

class auditController extends Controller{

   public function indexModel(){          // load the model for index view of auditor
      $this->model('auditor/indexModel');
      
      $this->model->load(); 
   }





  
}