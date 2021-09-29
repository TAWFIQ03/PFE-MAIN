<?php include "./inclouds/db.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <link rel="stylesheet" href="  https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="  https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">


    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box
        }

        body,
        input,
        textarea {
            font-family: "Poppins", sans-serif
        }

        body {
            background-color: black;
        }

        ::placeholder {
            color: #fff;
            opacity: 1
        }

        .container {
            position: relative;
            width: 100%;
            min-height: 100vh;
            padding: 2rem;
            background-color: #000;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center
        }

        .form {
            width: 100%;
            height: 100%;
            max-width: 100%;
            background-color: #fff;
            border-radius: 4px;
            box-shadow: 0 0 20px 1px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            overflow: hidden;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
        }

        .contact-info-form {
            background-color: #fabd03;
            position: relative
        }

        .circle {
            border-radius: 50%;
            background: linear-gradient(135deg, white 20%, #fabd03);
            position: absolute
        }

        .circle.one {
            width: 130px;
            height: 130px;
            top: 130px;
            right: -40px
        }

        .circle.two {
            width: 80px;
            height: 80px;
            top: 10px;
            right: 30px
        }

        .contact-info-form:before {
            content: "";
            position: absolute;
            width: 26px;
            height: 26px;
            background-color: #fabd03;
            transform: rotate(45deg);
            bottom: 66px;
            left: -13px
        }

        form {
            padding: 2.3rem 2.2rem;
            z-index: 10;
            overflow: hidden;
            position: relative
        }

        .title {
            color: #fff;
            font-weight: 500;
            font-size: 1.5rem;
            line-height: 1;
            margin-bottom: 0.7rem
        }

        .social-input-containers {
            position: relative;
            margin: 1rem 0
        }

        .input {
            width: 100%;
            outline: none;
            border: 2px solid #fafafa;
            background: none;
            padding: 0.6rem 1.2rem;
            color: #fff;
            font-weight: 500;
            font-size: 0.95rem;
            letter-spacing: 0.5px;
            border-radius: 4px;
            transition: 0.3s
        }

        textarea.input {
            padding: 0.8rem 1.2rem;
            min-height: 150px;
            border-radius: 4px;
            resize: none;
            overflow-y: auto
        }

        .social-input-containers label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            padding: 0 0.4rem;
            color: #fafafa;
            font-size: 0.9rem;
            font-weight: 400;
            pointer-events: none;
            z-index: 1000;
            transition: 0.5s
        }

        .social-input-containers.textarea label {
            top: 1rem;
            transform: translateY(0)
        }

        .btn {
            padding: 0.6rem 1.3rem;
            background-color: #fff;
            border: 2px solid #fafafa;
            font-size: 1.05rem;
            color: #fabd03;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            line-height: 1;
            border-radius: 4px;
            outline: none;
            cursor: pointer;
            transition: 0.3s;
            margin: 0
        }

        .btn:hover {
            background-color: transparent;
            color: #fff
        }

        .social-input-containers span {
            position: absolute;
            top: 0;
            left: 25px;
            transform: translateY(-50%);
            font-size: 0.8rem;
            padding: 0 0.4rem;
            color: transparent;
            pointer-events: none;
            z-index: 500
        }

        .social-input-containers span:before,
        .social-input-containers span:after {
            content: "";
            position: absolute;
            width: 10%;
            opacity: 0;
            transition: 0.3s;
            height: 5px;
            background-color: #fabd03;
            top: 50%;
            transform: translateY(-50%)
        }

        .social-input-containers span:before {
            left: 50%
        }

        .social-input-containers span:after {
            right: 50%
        }

        .social-input-containers.focus label {
            top: 0;
            transform: translateY(-50%);
            left: 25px;
            font-size: 0.8rem
        }

        .social-input-containers.focus span:before,
        .social-input-containers.focus span:after {
            width: 50%;
            opacity: 1
        }

        .contact-info {
            padding: 2.3rem 2.2rem;
            position: relative
        }

        .contact-info .title {
            color: #fabd03;
        }

        .text {
            color: #333;
            margin: 1.5rem 0 2rem 0
        }

        .social-information {
            display: flex;
            color: #555;
            margin: 0.7rem 0;
            align-items: center;
            font-size: 0.95rem
        }

        .icon {
            width: 28px;
            margin-right: 0.7rem
        }

        .social-media {
            padding: 2rem 0 0 0
        }

        .social-media p {
            color: #333
        }

        .social-icons {
            display: flex;
            margin-top: 0.5rem
        }

        .social-icons a {
            width: 35px;
            height: 35px;
            border-radius: 43px;
            background: linear-gradient(45deg, #fabd03, #fabd03);
            color: black;
            text-align: center;
            line-height: 35px;
            margin-right: 0.5rem;
            transition: 0.3s
        }

        .social-icons a:hover {
            transform: scale(1.05)
        }

        .contact-info:before {
            content: "";
            position: absolute;
            width: 110px;
            height: 100px;
            border: 22px solid #fabd03;
            border-radius: 50%;
            bottom: -77px;
            right: 50px;
            opacity: 0.3
        }

        .social-information i {
            font-size: 22px;
            margin-bottom: 23px;
            margin-right: 8px;
            color: #fabd03
        }

        .big-circle {
            position: absolute;
            width: 500px;
            height: 500px;
            border-radius: 50%;
            background: linear-gradient(to bottom, #fabd03, #cb0b0b);
            bottom: 50%;
            right: 50%;
            transform: translate(-40%, 38%)
        }

        .big-circle:after {
            content: "";
            position: absolute;
            width: 360px;
            height: 360px;
            background-color: #fafafa;
            border-radius: 50%;
            top: calc(50% - 180px);
            left: calc(50% - 180px)
        }

        .square {
            position: absolute;
            height: 400px;
            top: 50%;
            left: 50%;
            transform: translate(181%, 11%);
            opacity: 0.2
        }

        @media (max-width: 850px) {
            .form {
                grid-template-columns: 1fr
            }

            .contact-info:before {
                bottom: initial;
                top: -75px;
                right: 65px;
                transform: scale(0.95)
            }

            .contact-info-form:before {
                top: -13px;
                left: initial;
                right: 70px
            }

            .square {
                transform: translate(140%, 43%);
                height: 350px
            }

            .big-circle {
                bottom: 75%;
                transform: scale(0.9) translate(-40%, 30%);
                right: 50%
            }

            .text {
                margin: 1rem 0 1.5rem 0
            }

            .social-media {
                padding: 1.5rem 0 0 0
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 1.5rem
            }

            .contact-info:before {
                display: none
            }

            .square,
            .big-circle {
                display: none
            }

            form,
            .contact-info {
                padding: 1.7rem 1.6rem
            }

            .text,
            .social-information,
            .social-media p {
                font-size: 0.8rem
            }

            .title {
                font-size: 1.15rem
            }

            .social-icons a {
                width: 30px;
                height: 30px;
                line-height: 30px
            }

            .icon {
                width: 23px
            }

            .input {
                padding: 0.45rem 1.2rem
            }

            .btn {
                padding: 0.45rem 1.2rem
            }
        }
    </style>
</head>

<body>


    <div class="container">
        <div class="form">
            <div class="contact-info">
                <h3 class="title text-center"><strong> Let's get in touch</h3></strong>
                <p class="text"> Contact us with the following details. and fillup the form with the details. </p>
                <div class="info">
                    <div class="social-information"> <i class="fa fa-envelope-o"></i>
                        <p>contact@atmosphair.com</p>
                    </div>
                    <div class="social-information"> <i class="fa fa-mobile-phone"></i>
                        <p>+212 636 548 148 </p>
                    </div>
                </div>
                <div class="social-media">
                    <p>Connect with us :</p>
                    <div class="social-icons"> 
                        <a href="#"> <i class="fa fa-facebook-f"></i> </a> 
                    <a href="#"> <i class="fa fa-twitter"></i> </a> 
                    <a href="#"> <i class="fa fa-instagram"></i> </a> 
                    <a href="#"> <i class="fa fa-linkedin"></i> </a> </div>

                </div><br>
                <iframe width="100%" height="100" frameborder="0" style="border-radius:20px;" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?client=firefox-a&ie=UTF8&q=ethane+web+technologies&fb=1&gl=in&hq=ethane+web+technologies&cid=8183905562449910042&t=m&ll=28.639225,77.390442&spn=0.052731,0.154495&z=13&iwloc=A&output=embed" style="border-radius:20px;"></iframe>
            </div>
            <div class="contact-info-form"> 
                <span class="circle one"></span> 
                <span class="circle two"></span>
                <form action=""
                 method="post" >

<?php
if (isset($_POST['submit'])) {

    $username =  $_POST['username'];
    $email =  $_POST['email'];             
    $phone =  $_POST['phone'];
    $message =  $_POST['message'];


    $query = " INSERT INTO `contact` (`id`, `name`, `email`,`phone` ,  `message`)
VALUES (NULL, '{$username}',  '{$email}', '{$phone}', '{$message}');";
    $sendmsg = mysqli_query($conn, $query);


    if (!$sendmsg) {
        die("QUERY FAILED" . mysqli_error($conn));
    } else {
        echo " 
          <div class='valid'>
           <div class='row d-flex justify-content-center '>
              
                <div class='check'>
                     <img src='https://i.imgur.com/g6KlBWR.gif' class='check-mark'>
                 </div>

            </div>
         </div>
        ";
    }
}
?>
                    <h3 class="title">Contact us</h3>
                    <div class="social-input-containers">
                         <input type="text" name="username" class="input" placeholder="Username" /> 
                        </div>
                    <div class="social-input-containers">
                         <input type="email" name="email" class="input" placeholder="Email" />
                         </div>
                    <div class="social-input-containers">
                         <input type="phone" name="phone" class="input" placeholder="Phone" /> 
                        </div>
                    <div class="social-input-containers textarea"> 
                        <textarea name="message" min="100" class="input" placeholder="Message minimum 100 characters"></textarea>
                    </div>
                     <input type="submit" name="submit" value="Send Message" class="btn" />
                </form>

            </div>

        </div>






    </div>
</body>

</html>