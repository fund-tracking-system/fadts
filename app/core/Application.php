<?php

class Application{
   protected $controller = '';
   protected $action = '';
   protected $prams = [];

   public function __construct()
   {
      $this->prepareURL(); 

      if(file_exists(CONTROLLER . $this->controller . '.php')){

         $this->controller = new $this->controller;

         if(method_exists($this->controller,$this->action)){
            call_user_func_array([$this->controller,$this->action],$this->prams);
         }
      }
   }

   protected function prepareURL(){

// In our case $url[0] is project folder name 
//             $url[1] is controller name
//             $url[2] is methode name 


      $request = trim($_SERVER['REQUEST_URI'],'/');

      if(!empty($request)){
         $url = explode('/',$request);
         $this->controller = isset($url[1]) ? $url[1].'Controller':'homeController';
         $this->action = isset($url[2]) ? $url[2]:'index';
         unset($url[0],$url[1],$url[2]);
         $this->prams = !empty($url) ? array_values($url) : [];

      }
   }
}
