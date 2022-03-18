<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .error{color:red};
</style>
</head>
<body>
    <?php

        include 'connection.php';

        $emailerr = $passworderr="";
        $email= $password="";

        if(isset($_POST ["login_btn"]))
        {
            if (empty($_POST["email"])) {
                $emailerr = "email is required";
              } else {
                $email = test_input($_POST["email"]);
              }

            if (empty($_POST["password"])) {
                $passworderr = "password is required";
              } else {
                $password = test_input($_POST["password"]);
              }
        }

    ?>
    <div class="container-xl">
        <form method="POST" action="index.php">
            <div class="mb-3 mt-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                <span class="error">*<?php echo $emailerr;?></span>
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                <span class="error">* <?php echo $passworderr;?></span>
            </div>
            <div class="form-check mb-3">
                <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
                </label>
            </div>
            <button type="submit" name="login_btn" class="btn btn-primary">Login</button>
        </form>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>