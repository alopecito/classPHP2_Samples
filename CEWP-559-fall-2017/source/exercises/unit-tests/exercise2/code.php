<?php

class Email {

    protected $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function isValid() {
        $pattern ='/[a-z0-9]+@[a-z0-9]+\.[a-z]{2,3}/';

       if (preg_match($pattern, $this->email)=== 1) {
		return true;


       }
       return false;

    }
    
}
