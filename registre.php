<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" integrity="sha256-3sPp8BkKUE7QyPSl6VfBByBroQbKxKG7tsusY2mhbVY=" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css">
    <title>Registre</title>
</head>
<body>
<?php 
$nameErr = $emailErr = $genderErr = $passErr = "";
$name = $email = $gender = $pass = "";
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["name"]);
      }

      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
      }
      if (empty($_POST["pass"])) {
        $passErr = "password is required";
      } else {
        $pass = test_input($_POST["pass"]);
      }
      if (empty($_POST["gender"])) {
        $genderErr = "gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
}

?>

<div class="container">
    <div class="row">
        <div class="col-md-11 mt-60 mx-md-auto">
            <div class="login-box bg-white pr-lg-5 pr-0">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-6 order-md-last">
                        <div class="form-wrap bg-white">
                            <h4 class="btm-sep pb-3 mb-5">Register</h4>
                            <form class="form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-account"></span>
                                            <input type="text" id="username" class="form-control" placeholder="Username" name="name">
                                            <p style="color:red; text-align: center;"><?php echo $nameErr; ?></p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-email"></span>
                                            <input type="email" id="email" class="form-control" placeholder="Email Address" name="email">
                                            <p style="color:red; text-align: center;"><?php echo $emailErr; ?></p>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="zmdi zmdi-lock"></span>
                                            <input type="password" id="password" class="form-control" placeholder="Password" name="pass">
                                            <p style="color:red; text-align: center;"><?php echo $passErr; ?></p>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group position-relative">
                                            <span class="form-check"></span>
                                            <input  type="radio" name="Radio" id="exampleRadios1" value="Male" name="gender" >Male
                                            <input  type="radio" name="Radio" id="exampleRadios2" value="Female" name="gender">Female
                                            <input  type="radio" name="Radio" id="exampleRadios3" value="Other" disabled name="gender">Other
                                            <p style="color:red; text-align: center;"><?php echo $genderErr; ?></p>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <input type="submit" id="submit" class="btn btn-lg btn-custom btn-dark btn-block">
                                    </div>
                                </div>
                            </form>
                         <?php
                          echo "<h2>Your Input:</h2>";
                          if(empty($name)){
                              echo "";
                          }else{
                            echo "your name is $name";
                            echo "<br>";
                          }
                          if(empty($email)){
                            echo "";
                        }else{
                          echo "your email is $email";
                          echo "<br>";
                        }
                        if(empty($pass)){
                            echo "";
                        }else{
                          echo "your name is $pass";
                          echo "<br>";
                        }
                        if(empty($gender)){
                            echo "";
                        }else{
                          echo "your name is $gender";
                          echo "<br>";
                        }
                         ?>
                        
                        </div>
                    </div>
                    <div class="col-md-6 order-md-first">
                        <div class="content text-center">
                            <div class="border-bottom pb-5 mb-5">
                                <h3 class="c-black">Already have an account?</h3>
                                <a href="login.html" class="btn btn-custom">sign In</a>
                            </div>
                            <h5 class="c-black mb-4 mt-n1">Or Sign Up With</h5>
                            <div class="socials">
                                <a href="#" class="zmdi zmdi-facebook"></a>
                                <a href="#" class="zmdi zmdi-twitter"></a>
                                <a href="#" class="zmdi zmdi-google"></a>
                                <a href="#" class="zmdi zmdi-instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>