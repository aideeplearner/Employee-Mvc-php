<?php
//creating the autoloader class for the project;
class App{
  public  $controller="home";
  public $method="index";
//auto loading method 
public function loadController(){
     //preprocessing the controller and method name from the get url;
     $controller=$_GET["controller"]?? "home";
     $method=$_GET["action"]??"index";
     $trim_controller=ucfirst(trim($controller));
     $trim_method=trim($method);
     $this->controller=$trim_controller;
     $this->method=$trim_method;
     //include the class file 
     $file_name="./controller/".$this->controller.".php";
    
     //checking the file exists or not 
     if(file_exists($file_name)){
      require $file_name;
     //creating the object for the controller
     $con_obj=new $this->controller();
     //auto calling the class and the method using call_user_func_array
     call_user_func_array([$con_obj,$this->method],[]);
     }
}


}






?>