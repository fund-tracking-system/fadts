<?php 

class ministryController extends Controller{



   //view & update officer section

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

   

   //create fund section
 
   public function createFundView(){
      $this->view('ministry/createFundView');
      
      $this->view->render(); // This is how load the view
   }

   public function createFundModel(){ 
      $this->model('ministry/createFundModel');
      
      $this->model->load(); // This is how load the model
   }

   public function searchRecipientView(){
      $this->view('ministry/searchRecipientView');
      
      $this->view->render(); // This is how load the view
   }

   public function criteriaSearchModel(){ 
      $this->model('ministry/criteriaSearchModel');
      
      $this->model->load(); // This is how load the model
   }

   public function createFundSaveModel(){ 
      $this->model('ministry/createFundSaveModel');
      
      $this->model->load(); // This is how load the model
   }



   //view eligibility section   

   public function viewEligibilityView(){
      $this->view('ministry/viewEligibilityView');
      
      $this->view->render(); // This is how load the view
   }

   public function viewEligibilityModel(){ 
      $this->model('ministry/viewEligibilityModel');
      
      $this->model->load(); // This is how load the model
   }



   //add to eligibility section

   public function addToEligibilityFundView(){
      $this->view('ministry/addToEligibilityFundView');
      
      $this->view->render(); // This is how load the view
   }

   public function addToEligibilityPersonView(){
      $this->view('ministry/addToEligibilityPersonView');
      
      $this->view->render(); // This is how load the view
   }

   public function addToEligibilityFindModel(){ 
      $this->model('ministry/addToEligibilityFindModel');
      
      $this->model->load(); // This is how load the model
   }

   public function addToEligibilitySaveModel(){ 
      $this->model('ministry/addToEligibilitySaveModel');
      
      $this->model->load(); // This is how load the model
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
      $this->view('ministry/selectFundDetailView');
      
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



   //view people

   public function searchPeople(){
      $this->view('ministry/searchPeopleView');
      
      $this->view->render(); // This is how load the view
   }


   public function disasterVictimsView(){
      $this->view('ministry/disasterVictimsView');
      
      $this->view->render(); // This is how load the view
   }


   public function MShelpview(){
      $this->view('ministry/MShelpView');
      
      $this->view->render(); // This is how load the view
   }
   
   
   public function selectFundDetailRegionView(){
      $this->view('ministry/selectFundDetailRegionView');
      
      $this->view->render(); // This is how load the view
   }
   

   public function sendApi(){
      $this->model('ministry/sendApi');

      $this->model->load();      
   }
  
}