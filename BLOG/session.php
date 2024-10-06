<?php

class Session{
    private $user;

    public function __construct(){
        session_start();
        if(isset($_SESSION["user"])){
            $this->user = $_SESSION["user"];
        }
    }

    public function isLoggedIn(){
        if($this->user) {
            return $this->user;
        } else {
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    public function login($userObj) {
        $this->user = $userObj;
        $_SESSION['user'] = $userObj;
    }

   



}