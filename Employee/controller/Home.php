<?php
//creating the Home controller class for the home page 
class Home extends Controller{
    public $model;
    public function __construct(){
      $this->model=$this->loadModel("Login");
      if(checkLogin()){
        redirect("main");
      }
    }
    public function index(){
        $this->loadView("login");
    }
    //validating the user
    public  function validate(){
        if(checkEmpty($_POST)){
        $user=$_POST["email"];
        $password=$_POST["password"];
        $result=$this->model->checkUser($user,$password);
        if(mysqli_num_rows($result)>0){
            $row=mysqli_fetch_assoc($result);
            if($row["status"]=='Y'){
              $_SESSION["status"]='Y';
            }
            $_SESSION["name"]=getUserName($user);
            redirect("main");
        }
        else{

           $this->loadView("login");
        }
      }

    }
}