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

   public function searchPeople(){
      $this->view('villageOfficer/searchPeopleView');
      
      $this->view->render(); // This is how render the view of searching people data
   }

   public function searchViewLoadModel(){
      $this->model('villageOfficer/searchViewLoadModel');
      
      $this->model->load(); // This is how load the model 
   }

   public function nicSearchModel(){
      $this->model('villageOfficer/nicSearchModel');

      $this->model->load();
   }
   public function criteriaSearchModel(){
      $this->model('villageOfficer/criteriaSearchModel');

      $this->model->load();
   }
   public function criteriaResult(){
      $this->view('villageOfficer/criteriaResultView');
      
      $this->view->render();
   }
    

   public function personDetails(){
      $this->view('villageOfficer/personDetailsView');
      
      $this->view->render();
   }
   public function personDetailsModel(){
      $this->model('villageOfficer/personDetailsModel'); 
      
      $this->model->load(); 
   }
   

   public function ViewDisasterDetails(){
      $this->view('villageOfficer/disasterDetailsView');
      
      $this->view->render(); // This is how load the view
   }

   public function fundRelease(){
      $this->view('villageOfficer/fundReleaseView');
      
      $this->view->render(); // This is how load the view
   }
   public function fundReleaseModel(){
      $this->model('villageOfficer/fundReleaseModel'); 
      
      $this->model->load(); // This is how load the view
   }


   
   public function addDisasterVictim(){
      $this->view('villageOfficer/addDisasterVictimsView'); 
      
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

   public function fundDetailsModel(){
      $this->model('villageOfficer/fundDetailsModel');

      $this->model->load();
   }
   
   public function selectFundDetailsView(){
      $this->view('villageOfficer/selectFundDetailView');
      
      $this->view->render(); // This is how load the view
   }

   public function recipientView(){ 
      $this->view('villageOfficer/recipientView');
    
      
      $this->view->render();
   }


   public function loadDisasterDetailsModel(){
      $this->model('villageOfficer/loadDisasterDetailsModel');

      $this->model->load();
   }
   public function disasterDetailModel(){
      $this->model('villageOfficer/disasterDetailModel');

      $this->model->load();
   }

   public function selectDisasterDetails(){
      $this->view('villageOfficer/selectDisasterDetailsView');
      
      $this->view->render();

   }

   public function victimsListView(){
      $this->view('villageOfficer/victimsListView');
      
      $this->view->render();

   }
   
   
   
   public function helpview(){
      $this->view('villageOfficer/helpView');
      
      $this->view->render();

   }

   public function releaseForm(){
      $this->view('villageOfficer/releaseForm');
      
      $this->view->render();

   }

    
   



   

    
}