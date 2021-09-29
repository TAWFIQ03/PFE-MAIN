<?php include "../inclouds/db.php" ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
    <link rel="stylesheet" href="../stylehome.css">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="  https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="https://your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="https://your-path-to-fontawesome/css/solid.css" rel="stylesheet">
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

</head>

<body id="body-pd">
    <header class="header bg-dark" id="header">
        <div class="header_toggle " style="color:#fabd03;"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class=" d-flex pt-4 justify-content-center"> <a href="#" class="nav_logo">
                <img width="100vw" height="50vh" src="../myimgs/logocoi.png" alt=""></a>
        </div>
        <div class="header_img">
            <a href="../inclouds/logout.php" class="nav_link">
                <span class="iconify nav_name" data-icon="entypo:log-out" data-inline="false"></span>

            </a>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div class="nav_list">
                    <a href="./admin.php" class="nav_link "> <i class='bx bx-grid-alt nav_icon'></i>
                        <span class="nav_name">Dashboard</span>
                    </a>
                    <a href="./coiffeur.php" class="nav_link">
                        <span class="iconify" data-icon="il:users" data-inline="false"></span>
                        <span class="nav_name">Barbers</span>
                    </a>
                    <a href="./message.php" class="nav_link active">
                        <i class='bx bx-message-square-detail nav_icon'>
                        </i> <span class="nav_name">Messages</span>
                    </a>
                    <a href="./reservation.php" class="nav_link ">
                        <span class="iconify" data-icon="ri:reserved-fill" data-inline="false"></span>
                        <span class="nav_name">Reservations</span>
                    </a>
                    <a href="./users.php" class="nav_link ">
                        <span class="iconify" data-icon="gis:globe-users" data-inline="false"></span>
                        <span class="nav_name">Users</span>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!--Container Main start-->



    <?php
    if (isset($_GET["source"])) {
        $source = $_GET["source"];
    } else {
        $source = "";
    };
    switch ($source) {
        case 'add';
            include "includes/add.php";
            break;
        case 'update';

            include "includes/update.php";
            break;
        default:
            include "includes/message.php";
            break;
    }

    ?>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {

            const showNavbar = (toggleId, navId, bodyId, headerId) => {
                const toggle = document.getElementById(toggleId),
                    nav = document.getElementById(navId),
                    bodypd = document.getElementById(bodyId),
                    headerpd = document.getElementById(headerId)

                // Validate that all variables exist
                if (toggle && nav && bodypd && headerpd) {
                    toggle.addEventListener('click', () => {
                        // show navbar
                        nav.classList.toggle('show')
                        // change icon
                        toggle.classList.toggle('bx-x')
                        // add padding to body
                        bodypd.classList.toggle('body-pd')
                        // add padding to header
                        headerpd.classList.toggle('body-pd')
                    })
                }
            }

            showNavbar('header-toggle', 'nav-bar', 'body-pd', 'header')

            /*===== LINK ACTIVE =====*/
            const linkColor = document.querySelectorAll('.nav_link')

            function colorLink() {
                if (linkColor) {
                    linkColor.forEach(l => l.classList.remove('active'))
                    this.classList.add('active')
                }
            }
            linkColor.forEach(l => l.addEventListener('click', colorLink))

            // Your code to run since DOM is loaded and ready
        });
    </script>

</body>

</html>