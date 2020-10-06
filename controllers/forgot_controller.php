<?php

    /**
    * The home login page controller
    */
    class ForgotController
    {
        private $model;

        function __construct($model)
        {
            // $this->model = $model;
           include("{$_SERVER['DOCUMENT_ROOT']}/FADTS/fadts/views/forgot_view.php");
        }

        public function setForgot()
        {   
            // print_r("{$_SERVER['DOCUMENT_ROOT']}");
            // exit();
            //include("{$_SERVER['DOCUMENT_ROOT']}/FADTS/fadts/views/forgot_view.php");
        }


    }