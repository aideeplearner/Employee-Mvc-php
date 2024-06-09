<?php //this is the login page 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assests/css/login.css" />
    <script src="./assests/js/login.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="main">
        <!-- <img src="assests\images\login.jpg"/> -->
        <div class="alert alert-danger" id="cred" role="alert">
        </div>
        <div class="page">
            <form id="loginform" method="POST">
                <h2>Login</h2>
                <input class="input" type="email" placeholder="Email" name="email" id="email">
                <input class="input" type="password" placeholder="password" name="password" id="password">
                <?php
                $action = ROOT . "/index.php?controller=home & action=validate";
                
                echo "<script>var actionUrl = '$action';</script>";
                echo "<button class='btn btn-default' onclick='login(actionUrl)'>LOGIN</button>"
                ?>
            </form>

        </div>

    </div>
</body>

</html>