<?php

class Home extends \Dashboard\Core\Controller
{

    public function __construct()
    {

    }

    public function index()
    {
       $user = $this->model("User");
       echo $user->GetUser();
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