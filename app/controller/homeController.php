<?php 

class homeController extends Controller{

   public function index(){           // This is how load the view of login
      $this->view('home/loginView');
      
      $this->view->render(); 
   }

   public function indexModel(){     // This is how load the model for login

      
      $this->model('home/loginModel');
      $this->model->load(); 
   }

   public function forgot(){          // This is how load the view of forgot password
      $this->view('home/forgotView');
      
      $this->view->render(); 
   }

   public function forgotModel(){          // This is how load the view of forgot password
      $this->model('home/forgotModel');
      
      $this->model->load(); 
   }

   public function reset(){           // This is how load the view of login
      $this->view('home/resetView');
      
      $this->view->render(); 
   }

   public function resetModel(){     // This is how load the model for login
      $this->model('home/resetModel');
      
      $this->model->load(); 
   }

   
   // public function index($id='',$name=''){  Example for send data to a view
   //    $this->view('home/loginView',[  
   //       'name' => $name,                    
   //       'id' => $id
   //    ]);
      
   //    $this->view->render(); 
   // }
  
}