<?php 

class villageController extends Controller{

   public function index(){
      $this->view('villageOfficer/indexView');
      
      $this->view->render(); // This is how load the view
   }
   public function ViewUpdatePeople(){
      $this->view('villageOfficer/UpdatePeopleView');
      
      $this->view->render(); // This is how load the view
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
 
  
}