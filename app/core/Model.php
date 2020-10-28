<?php

class Model{
   protected $model_file;
   protected $model_data;

   public function __construct($model_file,$model_data)
   {  
      $this->model_file = $model_file;
      $this->model_data = $model_data;
   }

   public function load(){
      // echo MODEL.$this->model_file.'.php';
      // exit();
      if(file_exists(MODEL.$this->model_file.'.php')){  // every model file should name with .php extension
      //    echo "test!";
      //  exit();
         include MODEL.$this->model_file.'.php';
      }
   }

   
}