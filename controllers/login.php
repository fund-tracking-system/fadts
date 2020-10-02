<?php

    /**
    * The home login page controller
    */
    class LoginController
    {
        private $model;

        function __construct($model)
        {
            $this->model = $model;
        }

        public function sayWelcome()
        {
            return $this->model->welcomeMessage();
        }


    }