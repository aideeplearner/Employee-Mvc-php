<?php include "./view/includes/modal.php"; ?>
<?php include "./view/includes/deletemodel.php"; ?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Main</title>
  <link rel="stylesheet" href="./assests/css/main.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="./assests/js/main.js"></script>
</head>
<body>
  <div class="total-content">
  <?php include "./view/includes/header.php" ?>
  <div class="content">

  <?php
    echo "<h1>Hello " . ucfirst($_SESSION["name"]) . "</h1>";
  ?>
  <div class="d-flex justify-content-start" style="gap:30%">
    <button type="button"onclick="addEmployee()" title="Add Employee"class="btn-outline-dark add" data-toggle="modal" data-target="#employeeModal">
      ADD EMPLOYEE
    </button>
    <nav  aria-label="...">
      <ul class="pagination">
        <li class="page-item">
          <a class="page-link" href="#!" tabindex="-1">Previous</a>
        </li>
        <?php
        $pages = $data["pages"];
        $count = 0;
        $con = 0;
        while ($count < $pages) {
          echo "<li onclick='makeact(this)' class='page-item'><a class='page-link' href='./index.php?controller=main&action=pagecontent&page=$count'>$con</a>";
          $count += 4;
          $con++;
        }
        ?>
        <li class="page-item">
          <a class="page-link" href="#!">Next</a>
        </li>
      </ul>
    </nav>
    </div>



    <?php

    echo "<table class='table table-striped'>";
    echo "<thead class='thead-dark'>
        <tr>
          <th>Employee_Id</th>
          <th>Name</th>
          <th>Date Of Birth</th>
          <th>Experience</th>
          <th>Salary</th>
          <th>Address</th>
          <th>City</th>
          <th>State</th>
          <th>Country</th>
          <th>Department</th>
          <th>Date Of Join </th>
          <th>Update</th>
          <th>Delete</th>
        </tr>
      </thead>";
    if (isset($data["table"])) {
      while ($row = mysqli_fetch_assoc($data["table"])) {
        echo "<tr>";
        foreach ($row as $value) {
          echo "<td>$value</td>";
        }
        $id = $row['employee_id'];
        $row["state_id"] = $states[$row["state_name"]];
        $row["country_id"] = $country[$row["country_name"]];
        $row["designation_id"] = $designation[$row["Designation_name"]];
        $row["city_id"] = $city[$row["city_name"]];
        $record = json_encode($row);
        $hit = ROOT . "index.php?controller=main&action=index&id=$id";
        if(isset($_SESSION["status"])){
        echo "<td><button onclick='trigger($id,$record)' id='modal$id' name='edit' type='button' class='btn btn-warning edit' data-target='#employeeModal'>
               EDIT</button></td>";
        echo "<td><button onclick=deleteRecord('$id') id='delete$id' data-target='#deleteModal' class='btn btn-danger'>DELETE</button></td>";
        }
        else{
          echo "<td><button type='button'title='Edit'class='btn btn-warning'data-toggle='modal' data-target='#exampleModalCentered' >
          EDIT</button></td>";
          echo "<td><button title='delete' data-toggle='modal' data-target='#exampleModalCentered' class='btn btn-danger'>DELETE</button></td>";

        }
        echo "</tr>";
      }

      echo "</table>";
    }

    if (isset($data["record"])) {
      print_r($data['record']);
    }


    ?>
    </div>

</body>

</html>