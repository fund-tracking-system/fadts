<?php 

class assignRegionController extends Controller{
   
   public function assignRegionView(){
      $this->view('assignRegion/assignRegionView');
      
      $this->view->render(); // This is how load the view
   }

   public function assignRegionModel(){ 
      $this->model('assignRegion/assignRegionModel');
      
      $this->model->load(); // This is how load the model
   } 

   public function assignRegionSelectModel(){ 
      $this->model('assignRegion/assignRegionSelectModel');
      
      $this->model->load(); // This is how load the model
   } 

}