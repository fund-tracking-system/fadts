<?php 

class auditController extends Controller{

   public function indexModel(){          // load the model for index view of auditor
      $this->model('auditor/indexModel');
      
      $this->model->load(); 
   }



   public function ViewSearchPeople(){
      $this->view('auditor/searchPeopleView');
      
      $this->view->render(); // This is how load the view
   }

   public function ViewDisasterDetails(){
      $this->view('auditor/disasterDetailsView');

      $this->view->render();

   }
   public function ViewFundDetails(){
      $this->view('auditor/fundDetailsView');

      $this->view->render();
   }

   public function viewHistoryRecord(){
      $this->view('auditor/historyRecordView');

      $this->view->render();
   }


  
}