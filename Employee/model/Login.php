<?php
//creating the login model class 
class Login extends Database{
    //checks the user exists or not 
    public function checkUser($email,$password){
        $query="select * from login where email='$email' and password='$password'";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }
    //getting the table from the database
    public function getData($page){
        $query="select emp.employee_id,emp.name,emp.dob,emp.experience,emp.salary,emp.address,city.city_name,state.state_name,country.country_name,designation.Designation_name,
        emp.doj
        from employee as emp
        inner join city on city.city_id=emp.R_city
        inner join state on state.state_id=emp.R_state
        inner join country on country.country_id=emp.R_country
        inner join designation on designation.Designation_id=emp.R_Designation
        where emp.status='Y'
        order by emp.employee_id
        limit $page,4
       
        ";
        $result=mysqli_query($this->connection,$query);
        return $result;
    }
    public function readOneRecord($id){
        $query="select emp.employee_id,emp.name,emp.dob,emp.experience,emp.salary,emp.address,city.city_name,state.state_name,country.country_name,designation.Designation_name
        from employee as emp
        inner join city on city.city_id=emp.R_city
        inner join state on state.state_id=emp.R_state
        inner join country on country.country_id=emp.R_country
        inner join designation on designation.Designation_id=emp.R_Designation
        where emp.employee_id='$id'
        ";
        $result=mysqli_query($this->connection,$query);
        return $result;

    }
    //adding employees into the data
    public function addEmployees($values){
        $name=$values["name"];
        $dob=$values["dob"];
        $experience1=experience($values["doj"]);
        echo $experience1.'<br>';
        $designation=$values["designation"];
        $salary=$values["salary"];
        $address=$values["address"];
        $city=$values["city"];
        $state=$values["state"];
        $country=$values["country"];
        $doj=$values["doj"];
        $query="insert into employee(name,dob,experience,R_designation,salary,address,R_city,R_state,R_country,doj)
        values('$name','$dob','$experience1','$designation','$salary','$address','$city','$state','$country','$doj')";
        $result=mysqli_query($this->connection,$query);
       if($result){
         return true;
       }
       else{
         return false;
       } 

    }
    //deleting the employees from the data bases
    public function deleteEmployee($id){
        $query="update employee set status='N' where employee_id=$id";
        $result=mysqli_query($this->connection,$query);
        if($result){
            return true;
        }
        else{
            
            return false;
        }

    }
    //update the employee
    public function updateEmployee($values,$id){
        $name=$values["name"];
        $dob=$values["dob"];
        $experience1=experience($values["doj"]);
        $designation=$values["designation"];
        $salary=$values["salary"];
        $address=$values["address"];
        $city=$values["city"];
        $state=$values["state"];
        $country=$values["country"];
        $doj=$values["doj"];
        $query="update employee set name='$name',dob='$dob',experience='$experience1',
        R_designation='$designation',salary='$salary', address='$address',R_city='$city',R_state='$state',
        R_country='$country',doj='$doj' where employee_id=$id;
        ";
        $result=mysqli_query($this->connection,$query);
        if($result){
            return true;
        }
        else{
            return false;
        }

        
    }
    
  
}