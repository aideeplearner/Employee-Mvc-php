<?php
class Main extends Controller{
   public $model;
   public function __construct()
   {
     //checking whether the user is login or not
     if(!checkLogin()){
        redirect("home");
     }
     $this->model=$this->loadModel("Login");
   }
   //public function loadAlldata
   public function fetchData(){
         $city_result=$this->model->getTableData("city");
         $state_result=$this->model->getTableData("state");
         $country=$this->model->getTableData("country");
         $designation=$this->model->getTableData("designation");
         $total_pages=$this->model->findTotalRecords("employee");
         $pages=mysqli_fetch_assoc($total_pages)['count'];
         $data=["city"=>$city_result,"state"=>$state_result,"country"=>$country,"designation"=>$designation,"pages"=>$pages];
         return $data;
   }
   //index method to load the main page
   public function index(){
      $page=$_GET["page"]??0;
      $result_table=$this->model->getData($page);
      if(mysqli_num_rows($result_table)>0){
         $result=$this->fetchData();
         $result["table"]=$result_table;
         $this->loadView("main",$data=$result);
      }
      
      else{
         echo "no user exists";
      }
   }
   //function to read the data
   public function read(){
      $id=$_GET["id"];
      $result=$this->model->readOneRecord($id);
      $result_pro=mysqli_fetch_row($result);
      $this->loadView("main",$data=["record"=>$result_pro]);   
       
   }
   //function for logout 
   public function loggedout(){
       logout();
       redirect("home");
   }
   //function add Employee
   public function addEmployee(){
      if(!checkEmpty($_POST)){
         echo "details not filled";
         redirect("main");
      } 
      $result=$this->model->addEmployees($_POST);
      if($result){
         redirect("main");
      }
      else{
         echo "not added employee";
      }
   }
   public function delete(){
      $id=$_GET["id"];
      $result=$this->model->deleteEmployee($id);
      if($result){
          $this->index();
      }
      else{
         echo "not deleted";
      }

   }
   //pagination
   public function pageContent(){
      $this->index();

   }
   //update the employee details 
   public function update(){
      $id=$_GET["id"];
      $result=$this->model->updateEmployee($_POST,$id);
      if($result){
         redirect("main");
      }
      else{
         echo "not updated";
      }
   }

  
}