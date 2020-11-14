<?php

class includesController extends Controller{

   public function index(){                          //load the index(main) view for every user
      $this->view('includes/indexView');

      $this->view->render();
   }

   public function userProfile(){                    //load the view for user profile
      $this->view('includes/userProfileView');
      
      $this->view->render(); 
   }
   public function resetModel(){                     // load the model for inner reset password
      $this->model('includes/innerResetModel');
      
      $this->model->load(); 
   }   


   public function notificationView(){                  
      $this->view('includes/notificationView');
      
      $this->view->render(); 
   }

   public function notificationViewModel(){                     
      $this->model('includes/notificationViewModel');
      
      $this->model->load(); 
   }   

   
   public function notificationTypeOneView(){                  
      $this->view('includes/notificationTypeOneView');
      
      $this->view->render(); 
   }
   public function updatePeople(){                     
      $this->view('includes/updatePeople');
      
      $this->view->render();
   }   

  
}