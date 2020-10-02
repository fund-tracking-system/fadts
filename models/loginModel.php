<?php

    /**
    * The login page model
    */
    class LoginModel
    {

        private $message = 'Welcome to Home page.';

        function __construct()
        {

        }

        public function welcomeMessage()
        {
            return $this->message;
        }

    }