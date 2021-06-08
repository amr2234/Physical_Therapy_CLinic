<?php

require_once(__ROOT__ . "controller/Controller.php");

Class adminController  extends Controller{


    public function login(){
        $username = $_REQUEST['Adminname'];
        $password = $_REQUEST['password'];
        if(isset($_POST["login_employee"]))
        {
            $this->model->login_employee($username,$password);
        }

    }
public function Create_Doctor_Account()
{

}



}