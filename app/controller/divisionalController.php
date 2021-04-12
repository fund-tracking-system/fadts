<?php 

class divisionalController extends Controller{

   
   
   // ***********************updatePeople functions************************


   public function updatePeople(){
      $this->view('divisionalSec/updatePeopleView');
      
      $this->view->render(); // This is how load the view
   }
   public function updatePeopleModel(){
      $this->model('divisionalSec/updatePeopleModel');
      
      $this->model->load();
   }












// ***************************add disaster functions***************************************


   public function addDisaster(){
      $this->view('divisionalSec/addDisasterView');
      
      $this->view->render(); // This is how load the view
   }
   public function addDisasterModel(){
      $this->model('divisionalSec/addDisasterModel');

      $this->model->load();      
   }










   


   // *************************view Disaster Details Functions***********************


   public function ViewDisasterDetails(){
      $this->view('divisionalSec/disasterDetailsFormView');
      
      $this->view->render(); // This is how load the view
   }
   public function disasterDetailModel(){
      $this->model('divisionalSec/disasterDetailModel');

      $this->model->load();      
   }

   public function selectDisasterDetailspast(){ 
      $this->view('divisionalsec/selectDisasterDetails1');
    
      
      $this->view->render();
   }

   
   public function selectDisasterDetails(){ 
      $this->view('divisionalsec/selectDisasterDetails');
    
      
      $this->view->render();
   }
   

   public function disasterVictimsView(){ 
      $this->view('divisionalsec/disasterVictimsView');
    
      
      $this->view->render();
   }









   // **************************search  people  functions **************************************

   public function searchPeople(){
      $this->view('divisionalSec/searchPeopleView');
      
      $this->view->render(); // This is how load the view
   }


   public function nicSearchModel(){
      $this->model('divisionalSec/nicSearchModel');

      $this->model->load();
   }


   public function criteriaSearchModel(){ 
      $this->model('divisionalsec/criteriaSearchModel');

      $this->model->load();
      
   }
   
   public function criteriaResultView(){
      $this->view('divisionalSec/criteriaResultView');
      
      $this->view->render(); // This is how load the view
   }









   // *******************************fund details functions*****************************************


    
   public function fundDetailsSelectView(){
      $this->view('divisionalSec/fundDetailsSelectView');
      
      $this->view->render(); // This is how load the view
   }


   

   public function ViewFundDetailsModel(){ 
      $this->model('divisionalsec/loadFundDetailsModel');

      $this->model->load();
   
   }
   public function selectFundDetailRegionModel(){
      $this->model('divisionalsec/selectFundRegionDetailsModel');
      
      $this->model->load();
   }


   
   public function fundDetailModel(){ 
      $this->model('divisionalsec/fundDetailModel');

      $this->model->load();
   
   }


   public function selectFundDetailsView(){ 
      $this->view('divisionalsec/selectFundDetailView');
    
      
      $this->view->render();
   }

   public function recipeintView(){ 
      $this->view('divisionalsec/recipeintView');
    
      
      $this->view->render();
   }












   // **********************************add people functions************************************************




   public function ViewAddPeople(){
      $this->view('divisionalSec/addPeopleView');
      
      $this->view->render(); // This is how load the view
   }

   public function addPeopleModel(){ 
      $this->model('divisionalSec/addPeopleModel');
      
      $this->model->load();
   }

   
   public function addPeopleSaveModel(){ 
      $this->model('divisionalSec/addPeopleSaveModel');
    
      $this->model->load(); // This is how load the model
   }


   public function ViewAddPeopleProfile(){
      $this->view('divisionalSec/ViewAddPeopleProfile');
      
      $this->view->render(); // This is how load the view
   }







   // *********************************fund release***********************************************


   
   public function fundRelease(){
      $this->view('divisionalSec/fundReleaseView');
      
      $this->view->render(); // This is how load the view
   }
   public function fundReleaseModel(){
      $this->model('divisionalSec/fundReleaseModel');
      
      $this->model->load();
   }










   //***************************************load the userProfile view of divisional Secratary


   public function userProfile(){
      $this->view('divisionalSec/userProfileView');
      
      $this->view->render();      
   }

   public function userProfileModel(){       // load the model for userProfile view of divisional Secratary
      $this->model('divisionalSec/userProfileView');
      
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


   


   



//  ****************************help*******

   public function DShelpview(){ 
      $this->view('divisionalsec/DShelpView');
    
      
      $this->view->render();
   }
   public function searchFund(){ 
      $this->view('divisionalsec/searchFund');
    
      
      $this->view->render();
   }

   
   public function searchFundModel(){ 
      $this->model('divisionalsec/searchFundModel');

      $this->model->load();
      
   }

   public function ViewSearchFund(){ 
      $this->view('divisionalsec/ViewSearchFund');
    
      
      $this->view->render();
   }

   


}