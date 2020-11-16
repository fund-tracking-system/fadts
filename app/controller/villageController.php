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
 
   public function searchPeople(){
      $this->view('villageOfficer/searchPeopleView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function ViewDisasterDetails(){
      $this->view('villageOfficer/disasterDetailsView');
      
      $this->view->render(); // This is how load the view
   }

   public function fundRelease(){
      $this->view('villageOfficer/fundReleaseView');
      
      $this->view->render(); // This is how load the view
   }

   public function addDisasterVictim(){
      $this->view('villageOfficer/addDisasterVictimsViews'); 
      
      $this->view->render(); // This is how load the view
   }
   public function victimSelect(){
      $this->view('villageOfficer/victimSelectView'); 
      
      $this->view->render(); // This is how load the view
   }


   public function fundDetails(){
      $this->view('villageOfficer/fundDetailsView');
      
      $this->view->render(); // This is how load the view
   }
   
 
   
   
  
}