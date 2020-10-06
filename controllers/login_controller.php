<?php

    /**
    * The home login page controller
    */
    class LoginController
    {
        private $model;
        //public $name = "thisara";

        function __construct($model)
        {
            $this->model = $model;
            include("{$_SERVER['DOCUMENT_ROOT']}/FADTS/fadts/views/login_view.php");
        }

        public function setLogin()
        {   
            //print_r("test1");
            //exit();
            //include("{$_SERVER['DOCUMENT_ROOT']}/FADTS/fadts/views/login_view.php");
            // return $this->view->logView();
        }
        public function getLoginfo()
        {   
            //print_r("test1");
            //exit();
            //include("{$_SERVER['DOCUMENT_ROOT']}/FADTS/fadts/views/login_view.php");
            // return $this->view->logView();
        }


    }