<?php

class calenderController extends Controller{

    public function ViewCalender(){
        $this->view('includes/calenderView');
        
        $this->view->render(); // This is how load the view
    }

    public function loadEventModel(){                     // load the model for add event
        $this->model('calender/loadModel');
        
        $this->model->load(); 
      } 

    public function addEventModel(){                     // load the model for add event
      $this->model('calender/insertModel');
      
      $this->model->load(); 
    } 
    public function deleteEventModel(){                     // load the model for delete event
        $this->model('calender/deleteModel');
        
        $this->model->load(); 
      }
      
      public function updateEventModel(){                     // load the model for update event
        $this->model('calender/updateModel');
        
        $this->model->load(); 
      } 
  


}