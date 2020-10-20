<?php 

class ministryController extends Controller{

   public function index(){
      $this->view('ministry/indexView');
      
      $this->view->render(); // This is how load the view
   }

   public function viewFund(){    
      $this->view('ministry/fundDeatailsView');
      
      $this->view->render(); // This is how load the view
   }

   public function viewPeople(){
      $this->view('ministry/searchPeopleView');
      
      $this->view->render(); // This is how load the view
   }

   


   
   public function ViewAddOfficer(){
      $this->view('ministry/addOfficerView');
      
      $this->view->render(); // This is how load the view
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