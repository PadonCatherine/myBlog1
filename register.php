<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
    <?php
    session_start();
    include 'connection.php';


    $firstnameerr = $lastnameerr = $emailerr = $passworderr="";
    $firstname = $lastname = $email= $password="";

        if(isset($_POST ['register_btn']))
        {
            if (empty($_POST["firstname"])) {
                $firstnameerr = "firstname is required";
              } else {
                $firstname = test_input($_POST["firstname"]);
              }

            if (empty($_POST["lastname"])) {
                $lastnameerr = "lasname is required";
              } else {
                $lastname = test_input($_POST["lastname"]);
              }

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

              $query ="INSERT INTO tbl_register (id,firstname, lastname, email,password)
              VALUES ('$id','$firstname', '$lastname', '$email','$password')";

              
        }

    ?>
    <div class="container">
        <form action="index.php">
            <div class="mb-3 mt-3">
                <label for="firstname" class="form-label">Firstname</label>
                <input type="text" class="form-control" id="firstname" placeholder="Enter your firstname" name="firstname">
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname</label>
                <input type="text" class="form-control" id="lastname" placeholder="Enter your lastname" name="lastname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="email address" name="email">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Password</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter your password" name="pwd">
            </div>
            <div class="mb-3">
                <label for="pwd" class="form-label">Confirm Password</label>
                <input type="cpassword" class="form-control" id="cpassword" placeholder="repeat password" name="cpwd">
            </div>

            <button type="submit" name="register_btn" class="btn btn-primary">Register</button>
        </form>
    </div>



        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>