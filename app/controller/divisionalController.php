<?php 

class divisionalController extends Controller{

   public function ViewaddNewDisaster(){
      $this->view('divisionalSec/addNewDisasterView');
      
      $this->view->render(); // This is how load the view
   }
   public function ViewUpdatePeopleData(){
      $this->view('divisionalSec/UpdatePeopleDataView');
      
      $this->view->render(); // This is how load the view
   }
   public function ViewDisasterDetails(){
      $this->view('divisionalSec/disasterDetailsFormView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function ViewSearchBycriteria(){
      $this->view('divisionalSec/searchByCriteriaView');
      
      $this->view->render(); // This is how load the view
   }
    
   public function ViewFundDetails(){
      $this->view('divisionalSec/fundDeatailsView');
      
      $this->view->render(); // This is how load the view
   }

   public function ViewAddPeople(){
      $this->view('divisionalSec/addPeopleView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function ViewAlternativeRelease(){
      $this->view('divisionalSec/fundReleaseView');
      
      $this->view->render(); // This is how load the view
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

}