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
   public function victimSelectModel(){
      $this->model('villageOfficer/victimSelectModel'); 
      
      $this->model->load(); // This is how load the view
   }


   public function loadFundDetails(){
      $this->model('villageOfficer/loadFundDetails');

      $this->model->load();
   }




   public function fundDetails(){
      $this->view('villageOfficer/fundDetailsView');
      
      $this->view->render(); // This is how load the view
   }

   public function funddetailModel(){
      $this->model('villageOfficer/funddetailModel');

      $this->model->load();
   }




   public function personDetails(){
      $this->view('villageOfficer/personDetailsView');
      
      $this->view->render();
   }
   public function personDetailsModel(){
      $this->model('villageOfficer/personDetailsModel'); 
      
      $this->model->load(); // This is how load the view
   }

    
}