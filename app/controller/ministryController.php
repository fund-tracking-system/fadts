<?php 

class ministryController extends Controller{



   //view officer section

   public function viewOfficerView(){
      $this->view('ministry/viewOfficerView');
      
      $this->view->render(); // This is how load the view
   }

   public function viewOfficerFindModel(){ 
      $this->model('ministry/viewOfficerFindModel');
      
      $this->model->load(); // This is how load the model
   }



   //add officer section
   
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



   //update officer section

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



   //view eligibility section   

   public function viewEligibilityView(){
      $this->view('ministry/viewEligibilityView');
      
      $this->view->render(); // This is how load the view
   }

   public function viewEligibilityFindModel(){ 
      $this->model('ministry/viewEligibilityFindModel');
      
      $this->model->load(); // This is how load the model
   }

   public function viewEligibilitySelectModel(){ 
      $this->model('ministry/viewEligibilitySelectModel');
      
      $this->model->load(); // This is how load the model
   }



   //add to eligibility section

   public function viewAdddPeopleToFundElighibleList(){
      $this->view('ministry/addPeopleToFundEligiblListView');
      
      $this->view->render(); // This is how load the view
   }

   

   //--------------------------------------------------------------------------------------------------------------------------------------------
   //end of my functions
   //--------------------------------------------------------------------------------------------------------------------------------------------



   //fund details

   public function fundDetails(){
      $this->view('ministry/fundDetailsView');
      
      $this->view->render(); // This is how load the view
   }

   public function loadFundDetails(){ 
      $this->model('ministry/loadFundDetails');
      
      $this->model->load(); // This is how load the model
   }   

   public function funddetailModel(){ 
      $this->model('ministry/funddetailModel');
      
      $this->model->load(); // This is how load the model
   }   

   public function selectFundDetailsView(){
      $this->view('ministry/selectFundDetailsView');
      
      $this->view->render(); // This is how load the view
   }



   // disaster details functions
   
   public function loadDisasterDetailsModel(){ 
      $this->model('ministry/loadDisasterDetailsModel');
      
      $this->model->load(); // This is how load the model
   }
   
   public function viewDisasterDetails(){
      $this->view('ministry/viewDisasterDetails');
      
      $this->view->render(); // This is how load the view
   }
   
   public function disasterDetailModel(){ 
      $this->model('ministry/disasterDetailModel');
      
      $this->model->load(); // This is how load the model
   }
   
   public function selectDisasterDetails(){
      $this->view('ministry/selectDisasterDetails');
      
      $this->view->render(); // This is how load the view
   }



   //view people

   public function searchPeople(){
      $this->view('ministry/searchPeopleView');
      
      $this->view->render(); // This is how load the view
   }
 
   public function ViewCreateFund(){
      $this->view('ministry/createFundView');
      
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
  
}