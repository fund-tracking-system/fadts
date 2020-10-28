<?php 

class auditController extends Controller{
   
   public function indexModel(){          // load the model for index view of auditor
      $this->model('auditor/indexModel');
      
      $this->model->load(); 
   }
   public function officerHistoryView(){
      $this->view('auditor/officerHistoryView');
      
      $this->view->render(); // This is how load the view
   }
   public function officerHistoryModel(){          // load the model for index view of auditor
      $this->model('auditor/officerHistoryModel');
      
      $this->model->load(); 
   }




  
}