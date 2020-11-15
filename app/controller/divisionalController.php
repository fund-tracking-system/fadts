<?php 

class divisionalController extends Controller{

   public function updatePeople(){
      $this->view('divisionalSec/updatePeopleView');
      
      $this->view->render(); // This is how load the view
   }
   public function updatePeopleModel(){
      $this->model('divisionalSec/updatePeopleModel');
      
      $this->model->load();
   }

   public function addDisaster(){
      $this->view('divisionalSec/addDisasterView');
      
      $this->view->render(); // This is how load the view
   }
   public function addDisasterModel(){
      $this->model('divisionalSec/addDisasterModel');

      $this->model->load();      
   }

   public function ViewDisasterDetails(){
      $this->view('divisionalSec/disasterDetailsFormView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function searchPeople(){
      $this->view('divisionalSec/searchPeopleView');
      
      $this->view->render(); // This is how load the view
   }
    
   public function fundDetailsSelectView(){
      $this->view('divisionalSec/fundDetailsSelectView');
      
      $this->view->render(); // This is how load the view
   }

   public function ViewAddPeople(){
      $this->view('divisionalSec/addPeopleView');
      
      $this->view->render(); // This is how load the view
   }

   
   public function fundRelease(){
      $this->view('divisionalSec/fundReleaseView');
      
      $this->view->render(); // This is how load the view
   }
   public function fundReleaseModel(){
      $this->model('divisionalSec/fundReleaseModel');
      
      $this->model->load();
   }

   // load the userProfile view of divisional Secratary
   public function userProfile(){
      $this->view('divisionalSec/userProfileView');
      
      $this->view->render();      
   }

   public function userProfileModel(){       // load the model for userProfile view of divisional Secratary
      $this->model('divisionalSec/userProfileView');
      
      $this->model->load();      
   }

   public function addPeopleModel(){ 
      $this->model('divisionalSec/addPeopleModel');
      
      $this->model->load();
   }

   public function addPeopleSaveModel(){ 
      $this->model('divisionalSec/addPeopleSaveModel');
    
      $this->model->load(); // This is how load the model
   }

   public function nicSearchModel(){
      $this->model('divisionalSec/nicSearchModel');

      $this->model->load();
   }
   
   public function assignRegionView(){ 
      $this->view('divisionalsec/assignRegionView');
    
      
      $this->view->render();
   }
   public function disasterRegionView(){ 
      $this->view('divisionalsec/disasterRegionView');
    
      $this->view->render();
   }


   public function assignRegionSelectModel(){ 
      $this->model('divisionalsec/addPeopleSelectRegion');

      $this->model->load();
      
   }
   

   public function ViewFundDetailsModel(){ 
      $this->model('divisionalsec/loadFundDetailsModel');

      $this->model->load();
   
   }


   
   public function fundDetailModel(){ 
      $this->model('divisionalsec/fundDetailModel');

      $this->model->load();
   
   }


   public function selectFundDetailsView(){ 
      $this->view('divisionalsec/selectFundDetailsView');
    
      
      $this->view->render();
   }


}