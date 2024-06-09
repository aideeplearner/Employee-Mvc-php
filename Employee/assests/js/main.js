function trigger(id,record){
  console.log(id);
  console.log(record);
  $id=id;
  var $modal=document.getElementById("modal"+id)
  $modal.setAttribute("data-toggle","modal");
  document.getElementById("employeeModalLabel").innerHTML="Update Employee";
  document.getElementById("name").value=record["name"];
  document.getElementById("dob").value=record["dob"];
  document.getElementById("address").value=record["address"];
  document.getElementById("salary").value=record["salary"];
  document.getElementById("state").value=record["state_id"];
  document.getElementById("country").value=record["country_id"];
  document.getElementById("city").value=record["city_id"];
  document.getElementById("department").value=record["designation_id"];
  console.log(record["doj"]);
  document.getElementById("doj").value=record["doj"];
  document.getElementById("employee").action="http://localhost/Employee/index.php?controller=main&action=update&id="+id;

}
function deleteRecord(id){
   var $del=document.getElementById("delete"+id);
   $del.setAttribute("data-toggle","modal");
   document.getElementById("deletemessage").innerHTML+=id+"?";
   document.getElementById("del").href+=id;
  
}
function addEmployee(){
  document.getElementById("employeeModalLabel").value="New Employee"
  document.getElementById("employee").reset();
  
}
function success(){
   console.log("success called");
   let alert=document.getElementById("success");
   setTimeout(() => {
    alert.style.display ='block';
   }, 3000);

}


