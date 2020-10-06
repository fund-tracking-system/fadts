<?php

    /**
    * The home page model
    */
    class ForgotModel
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