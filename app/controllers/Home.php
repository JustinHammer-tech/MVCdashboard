<?php

class Home extends \Dashboard\Core\Controller
{

    public function __construct()
    {

    }

    public function index()
    {
       $user = $this->model("User");
       $this->view("Home", "SignIn" );
    }

    public function About()
    {
        echo "About";
    }

    public function SignIn()
    {

    }

    public function SignOut()
    {

    }

}