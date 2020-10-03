<?php

    /**
    * The home login page controller
    */
    class LoginController
    {
        private $model;
        public $name = "thisara";

        function __construct($model)
        {
            $this->model = $model;
        }

        public function setLogin()
        {   
            //print_r("test1");
            //exit();
            include("{$_SERVER['DOCUMENT_ROOT']}/FADTS/fadts/views/login_view.php");
            // return $this->view->logView();
        }


    }