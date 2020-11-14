<?php 

class villageController extends Controller{

   public function updatePeople(){
      $this->view('villageOfficer/updatePeopleView');
      
      $this->view->render(); // This is how load the view
   }
   public function updatePeopleModel(){
      $this->model('villageOfficer/updatePeopleModel');

      $this->model->load();
   }

   public function nicSearchModel(){
      $this->model('villageOfficer/nicSearchModel');

      $this->model->load();
   }
 
   public function ViewSearchPeople(){
      $this->view('villageOfficer/SearchPeopleDataView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function ViewDisasterDetails(){
      $this->view('villageOfficer/disasterDetailsView');
      
      $this->view->render(); // This is how load the view
   }
   public function ViewGetFundEligible(){
      $this->view('villageOfficer/getFundEligibleView');
      
      $this->view->render(); // This is how load the view
   }
   public function ViewGetAddVictimsToDisaster(){
      $this->view('villageOfficer/addDisasterVictimsViews');
      
      $this->view->render(); // This is how load the view
   }
   public function ViewViewFund(){
      $this->view('villageOfficer/ViewFundView');
      
      $this->view->render(); // This is how load the view
   }
   public function setUpdateModel(){
      $this->model('villageOfficer/setUpdateModel');

      $this->model->load();
   }
 
   
   
  
}