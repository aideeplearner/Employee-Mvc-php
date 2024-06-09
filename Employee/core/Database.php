<?php
//base database abstract class
class Database{
protected $connection;
//database intialization 
     public function __construct(){
      try{
        $server=DBSERVER;
        $user=DBUSER;
        $password=DBPASS;
        $dbname=DBNAME;
        $this->connection=mysqli_connect($server,$user,$password,$dbname);
     }
     catch(Exception $err){

       $err->getMessage();

     }

     }
     //fetching the data from the table
     public function getTableData($table_name){
       $query="select * from $table_name";
       $result=mysqli_query($this->connection,$query);  
       return $result;
    
     
     }
     //calucalating the number of the records in the data base
     public function findTotalRecords($table_name){
        $query="select count(*) as count from $table_name where status='Y'";
        $total_pages=mysqli_query($this->connection,$query);
        return $total_pages;   
     } 
    
    //using of the destructor to close the database connection
    public function  __destruct(){
      mysqli_close($this->connection);
    }


}



?>