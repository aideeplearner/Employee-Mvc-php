<?php
//creating the base abstract controller class
class Controller{
    //load view method to render the view
    public function loadView($name,$data=[]){
       $file_name="./view/".$name.".view.php";
       if(file_exists($file_name)){
           require $file_name;

       }
       else{
          echo "404 not found";
       }

    }
    //function for loading the model 
    public function loadModel($name){
      $file_name="./model/".$name.".php";
      if(file_exists($file_name)){
           require $file_name;
           return new $name();
      }
      else{

        echo "model does not exists";

       
      }

    }


}




?>