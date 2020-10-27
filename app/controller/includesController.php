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

}