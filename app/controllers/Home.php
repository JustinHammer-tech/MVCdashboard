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

    public function Login()
    {

    }

    public function Logout()
    {

    }

    public function error_404()
    {
        $this->view_404();
    }
}