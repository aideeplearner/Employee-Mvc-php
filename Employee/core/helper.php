
<?php
//helper function file
function redirect($controller="home",$method="index"){
    $file_name=ROOT."/index.php?controller=$controller &action=$method";
    header("Location:".$file_name);
    exit();

}
//validate email
function validateEmail($email){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        return true;
    }
    else{
        return false;
    }
}
//check empty for the post variable
function checkEmpty($arr){
    $filter_arr=array_filter($arr);
    if(count($arr)==count($filter_arr)){
        return true;
    }
    else{
        return false;
    }
}
//check login
function checkLogin(){
    if(isset($_SESSION["name"])){
        return true;

    }
    else{
        return false;
    }
}
//getting the user from the email
function getUserName($name){
    $name=explode("@",$name)[0];
    return $name;
}
//logout 
function logout(){
    unset($_SESSION["name"]);
    session_destroy();  
}
//calucalate the experience 
function experience($date){
    $difference=date("Y")-date("Y",strtotime($date));
    return $difference;

}
function process_address($address){
    

}


?>
