<?php

    /**
    * The home login page controller
    */
    class ForgotController
    {
        private $model;

        function __construct($model)
        {
            $this->model = $model;
        }

        public function setForgot()
        {   
            //print_r("test1");
            //exit();
            include("{$_SERVER['DOCUMENT_ROOT']}/FADTS/fadts/views/forgot_view.php");
            // return $this->view->logView();
        }


    }