<?php 

class ministryController extends Controller{

   public function viewFund(){
      $this->view('ministry/fundDeatailsView');
      
      $this->view->render(); // This is how load the view
   }

   public function viewPeople(){
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

   public function ViewCreateFund(){
      $this->view('ministry/createFundView');
      
      $this->view->render(); // This is how load the view
   }

   public function ViewUpdateOfficer(){
      $this->view('ministry/updateOficerView');
      
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

   public function ViewDisasterDetails(){
      $this->view('ministry/disasterDetailsFormView');
      
      $this->view->render(); // This is how load the view
   }
   
}