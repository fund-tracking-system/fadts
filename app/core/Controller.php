<?php 
class Controller{
   protected $view;
   protected $model;

   public function view($viewName,$data=[]){

      $this->view = new View($viewName,$data);
      return $this->view;
   }

   public function model($modelName,$data=[]){

      $this->view = new Model($modelName,$data);
      return $this->model;
   }
}