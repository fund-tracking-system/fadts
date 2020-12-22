<?php 

class ministryController extends Controller{

   public function viewFund(){
      $this->view('ministry/fundDeatailsView');
      
      $this->view->render(); // This is how load the view
   }

   public function searchPeople(){
      $this->view('ministry/searchPeopleView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function addOfficerView(){
      $this->view('ministry/addOfficerView');
      
      $this->view->render(); // This is how load the view
   }

   public function addOfficerModel(){ 
      $this->model('ministry/addOfficerModel');
      
      $this->model->load(); // This is how load the model
   }

   public function addOfficerSaveModel(){ 
      $this->model('ministry/addOfficerSaveModel');
      
      $this->model->load(); // This is how load the model
   }

   public function updateOfficerView(){
      $this->view('ministry/updateOfficerView');
      
      $this->view->render(); // This is how load the view
   }

   public function updateOfficerView2(){
      $this->view('ministry/updateOfficerView2');
      
      $this->view->render(); // This is how load the view
   }

   public function updateOfficerFindModel(){ 
      $this->model('ministry/updateOfficerFindModel');
      
      $this->model->load(); // This is how load the model
   }

   public function updateOfficerSetRegionModel(){ 
      $this->model('ministry/updateOfficerSetRegionModel');
      
      $this->model->load(); // This is how load the model
   }

   public function updateOfficerSaveModel(){ 
      $this->model('ministry/updateOfficerSaveModel');
      
      $this->model->load(); // This is how load the model
   }

   public function ViewCreateFund(){
      $this->view('ministry/createFundView');
      
      $this->view->render(); // This is how load the view
   }

   public function viewAdddPeopleToFundElighibleList(){
      $this->view('ministry/addPeopleToFundEligiblListView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function ViewAddNewDisaster(){
      $this->view('ministry/addNewDisasterView');
      
      $this->view->render(); // This is how load the view
   }

   public function addDisaster(){
      $this->view('ministry/addDisasterView');
      
      $this->view->render(); // This is how load the view
   }
   
   public function addDisasterModel(){
      $this->model('ministry/addDisasterModel');

      $this->model->load();      
   }

   public function ViewDisasterDetails(){
      $this->view('ministry/disasterDetailsFormView');
      
      $this->view->render(); // This is how load the view
   }

   public function ViewFundDetailsModel(){ 
      $this->model('divisionalsec/loadFundDetailsModel');

      $this->model->load();
   
   }
  
}