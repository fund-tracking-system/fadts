<?php

class Model{
   protected $model_file;
   protected $model_data;

   public function __construct( $model_file,$model_data)
   {  
      $this->model_file = $model_file;
      $this->model_data = $model_data;
   }

   public function load(){
      if(file_exists(MODEL.$this->model_file.'.php')){  // every model file should name with .php extension
         include VIEW.$this->model_file.'.php';
      }
   }

   public function getAction(){
      return (explode('/',$this->model_file)[1]);
   }
}