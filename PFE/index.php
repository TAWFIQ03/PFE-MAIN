<?php include "./inclouds/db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div class="container">
        <div class="frame">
            <div class="nav">
                <ul class="links">
                    <li class="signin-active"><a class="btn">Sign in</a></li>
                    <li class="signup-inactive"><a class="btn">Sign up </a></li>
                </ul>
            </div>
            <div>


                <form class="form-signin" action="./inclouds/login.php" method="post" name="form">
                    <label for="username">Email</label>
                    <input class="form-styling" type="text" name="email" placeholder="username, or email" />
                    <label for="password">Password</label>
                    <input class="form-styling" type="password" name="passwoord" placeholder="PassWord" />
                    <input type="checkbox" id="checkbox" />
                    <label for="checkbox"><span class="ui"></span>Keep me signed in</label>
                    <div class="btn-animate">
                        <button class="btn-signin" type="submit" name="btlogin">Sign in</button>
                    </div>
                </form>



                <form class="form-signup" action="" method="post" name="form">

                    <?php
                    if (isset($_POST['btnsignup'])) {

                        $firstName =  $_POST['firstName'];
                        $lastName =  $_POST['lastName'];
                        $email =  $_POST['email'];
                        $password =  $_POST['password'];
                        $phone =  $_POST['phone'];



                        $query = " INSERT INTO `client` (`ID`, `firstName`, `lastName`, `email`, `password`, `signUpDate`, `phone`)
     VALUES (NULL, '{$firstName}', '{$lastName}', '{$email}', '{$password}',now(), '{$phone}');";
                        $add_sigup = mysqli_query($conn, $query);


                        if (!$add_sigup) {
                            die("QUERY FAILED" . mysqli_error($conn));
                        } else {
                            echo " 
                              <div class='valid'>
                               <div class='row d-flex justify-content-center '>
                                  <a class='btnV'>
                                    <div class='check'>
                                         <img src='https://i.imgur.com/g6KlBWR.gif' class='check-mark'>
                                     </div>

                                   </a>
                                </div>
                             </div>
                            ";
                        }
                    }
                    ?>


                    <label for="firstName">First name</label>
                    <input class="form-styling" type="text" name="firstName" placeholder="" />

                    <label for="lastName">Last name</label>
                    <input class="form-styling" type="text" name="lastName" placeholder="" />

                    <label for="email">Email</label>
                    <input class="form-styling" type="text" name="email" placeholder="" />

                    <label for="password">Password</label>
                    <input class="form-styling" type="text" name="password" placeholder="" />


                    <label for="fullname">Phone</label>
                    <input class="form-styling" type="number" name="phone" placeholder="" />


                    <button type="submit" name="btnsignup" class="btn-signup">Sign Up </button>

                </form>



            </div>
            <script src="./index.js"></script>

</body>

</html>