<?php 

class divisionalController extends Controller{

   public function index(){
      $this->view('divisionalSec/indexView');
      
      $this->view->render(); // This is how load the view
   }

   public function indexModel(){       // This is just a example for how to load a model
      $this->model('divisionalSec/indexModel');
      
      $this->model->load(); // This is how load the view
   }
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

}