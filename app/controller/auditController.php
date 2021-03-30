<?php 

class auditController extends Controller{
 
   //View officer history functions
   public function officerHistoryView(){
      $this->view('auditor/officerHistoryView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function officerHistoryModel(){
      $this->model('auditor/officerHistoryModel');
      
      $this->model->load(); 
   }



   //View person history functions
   public function personHistoryView(){
      $this->view('auditor/personHistoryView');
      
      $this->view->render(); // This is how load the view
   }

   public function personHistoryModel(){
      $this->model('auditor/personHistoryModel');
      
      $this->model->load(); 
   }



   public function indexModel(){ // load the model for index view of auditor
      $this->model('auditor/indexModel');
      
      $this->model->load(); 
   }

   public function eligibilityHistoryView(){
      $this->view('auditor/eligibilityHistoryView');
      
      $this->view->render(); // This is how load the view
   }

   public function eligibilityHistoryModel(){
      $this->model('auditor/eligibilityHistoryModel');
      
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
  
   public function ADhelpview(){
      $this->view('auditor/ADhelpView');

      $this->view->render();
   }
}