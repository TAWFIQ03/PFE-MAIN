<?php include "./inclouds/db.php" ?>
<?php session_start() ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="stylehome.css">
  <link rel="stylesheet" href="  https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
  <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link href="  https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
  <style>
    .hull {
      border: 5px;
      background-color: black;
      padding: 10px;
    }
  </style>
</head>

<body id="body-pd">



  <!-- header + navbare -->


  <header class="header bg-dark" id="header">
    <div class="header_toggle " style="color:#fabd03;">
      <i class='bx bx-menu' id="header-toggle"></i>
    </div>
    <div class=" d-flex pt-4 justify-content-center">
      <a href="#" class="nav_logo">
        <img width="100vw" height="50vh" src="./myimgs/logocoi.png" alt="">
      </a>
    </div>
    <a href="index.php" class="nav_link">
      <i class='bx bx-user nav_icon'></i>
      <span class="nav_name">

        <?php
        if (!$_SESSION["lastName"]) {
          echo "<i class=' nav_icon mr-5'>sign up </i> ";
        } else {
        ?>
          <i class=' nav_icon mr-5'><?php echo $_SESSION['lastName'], ' ', $_SESSION['firstName'] ?> </i>
        <?php } ?>
      </span>
    </a>
    <!-- <div class="header_img"> <i class='bx bx-user nav_icon'></i> </div> -->

    <div class="l-navbar" id="nav-bar">
      <nav class="nav">
        <div>
          <div class="nav_list">
            <a href="#home" class="nav_link active">
              <i class='bx bx-home nav_icon'></i>
              <span class="nav_name">Home</span>
            </a>

            <a href="#about" class="nav_link">
              <i class='bx bx-message-square-detail nav_icon'></i>
              <span class="nav_name">About</span>
            </a>
            <a href="#services" class="nav_link">
              <i class='bx bx-bookmark nav_icon'></i>
              <span class="nav_name">Service</span>
            </a>
            <a href="contact.php" class="nav_link">
              <i class='fa fa-paper-plane nav_icon'></i>
              <span class="nav_name">Contact</span>
            </a>

          </div>
        

        <?php
        if (!$_SESSION["lastName"]) {
          echo " ";
        } else {
          echo
          "<a href='./inclouds/logout.php' class='nav_link'>
          <i class='bx bx-log-out nav_icon'></i>
          <span class='nav_name'>LogOut</span>
          </a>";
        }
        ?>


</div>


      </nav>
    </div>
  </header>
  <!-- fin  header + navbare -->


  </div><br><br>

  <!-- Home -->

  <div id="home" class=" text-center justify-content-center">

    <div class="  mt-5 homebg ml-5 ">

      <div class="row ">

        <div class="col-lg-6 ">

          <div class="  bg-white ">
            <h1 class="display-4 text-dark  font-weight-bold">Hi,
              Communicate
              with <span class="text-warning"><strong> ATMOSP'</strong></span><span class="text-DARK">HAIR</span><span class="text-warning">.</span></h1>
            <br>
            <br>
            <h5>A <span class="text-warning"><strong> Place</strong></span> Where You Will<span class="text-warning"><strong> Find</strong> </span> Yourself And Your Style<span class="text-warning"><strong>.</strong></span></h5>
            <hr id="X" class="my-4 bg-warning">
            <br><br>
            <br><br>
            <a href="reservation.php"> <button class="btn btnfrel ml-5 btn-warning botton font-weight-bold ">Get reservation</button></a>


          </div>


        </div>




        <!-- carousel -->
        <div class="col-lg-6    ">
          <img width="800vw" height="500vh" padding="-200vh"   src="./myimgs/Capture-removebg-preview.svg" alt="">
          <!-- 
         


          </div> -->
        </div>
      </div>
    </div>
  </div>
  <!-- fin home -->
  <br><br><br><br>



  <!-- about -->
  <div id="about" class=" container">
    <div class="row ">
      <div class="col-12">
        <h1>About The Salon</h1>
      </div>

    </div>
    <div class="row ">
      <div class="col-12">
        <p class="text-center">For more than four years, we have been going through our experience with all professionalism and elegance with our customers.</p>
      </div>

    </div>
    <div class="row ml-5 ">
      <div class="col-6">
        <div class="card">
          <div class="card_img"> <i class="fas fa-rocket"></i> </div>
          <div class="card_title">Salon</div>
          <div class="card_body">
            <p>we have a best tools, best place when you find your self.</p>
          </div>
        </div>
      </div>
      <div class="col-6">
        <div class="card">
          <div class="card_img"> <i class="fab fa-cloudversify"></i> </div>
          <div class="card_title">decoration</div>
          <div class="card_body">
            <p>a nice colors with nice palce to drink cafe.</p>
          </div>
        </div>

      </div>

    </div>
    <div class="row  ">
      <div class="col-6">
        <div class="card">
          <div class="card_img"> <i class="fas fa-user-astronaut"></i> </div>
          <div class="card_title">parber's shop</div>
          <div class="card_body">
            <p>all barbers here have more than six years experience.</p>
          </div>
        </div>
      </div>

    </div>


  </div>

  <!-- fin about -->



  <br>
  <br>
  <br><br>
  <br>
  <br>
  <!-- our team -->
  <div class="container">
    <div id="heading">
      <h1>OUR TEAM</h1>
    </div>

    <?php
    $query = "SELECT * FROM `coiffeur` ";
    $select_all = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($select_all)) {

      $Name = $row['Name'];
      $Lname = $row['Lname'];

      $img = $row['img'];
      $poste = $row['poste'];

      $Email = $row['Email'];
      $fb = $row['fb'];

      $in = $row['in'];
      $tw = $row['tw'];
    ?>

      <div class="item">
        <div class="front">
          <img id="team1" class="team" src="./myimgs/<?php echo $img ?>">
        </div>
        <div class="back">
          <p class="title"><?php echo $Name, " ", $Lname ?> </p>
          <p class="job"><?php echo $poste ?> </p>
          <a href="<?php echo $fb ?> "><i class="fab fa-facebook-square social fa-2x"></i></a>
          <a href="<?php echo $in ?> "><i class="fab fa-linkedin social fa-2x"></i></a>
          <a href="<?php echo $tw ?> "><i class="fab fa-twitter-square social fa-2x"></i></a>
        </div>
      </div>
    <?php } ?>



  </div>
  <!-- fin team -->


  <!-- our service -->

  <div id="services" class="container ">

    <div class="row ml-4  ">
      <div class="text-center ">
        <h1>Our Services</h1>
      </div>
      <div class="col-md-4">
        <div class="box">
          <div class="our-services settings">
            <div class="icon"> </div>
            <h4>Barbershop </h4>
            <p>fast cake for our client</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <div class="our-services speedup">
            <div class="icon"> </div>
            <h4>Speedup on working</h4>
            <p>faster and high quality on work</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="box">
          <div class="our-services privacy">
            <div class="icon"> </div>
            <h4>Privacy our experience</h4>
            <p>we have more than 4 years experience</p>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!-- fin service -->
  <br>
  <br>



  <!-- our cleint -->
  <div>

    <h1>cleint say</h1>
    <div class="wrapper">


      <div class="carousel slide" id="mySlider" data-ride="carousel" data-interval="4000" data-pause="hover">
        <ol class="carousel-indicators">
          <li data-target="#mySlider" data-slide-to="0" class="active"></li>
          <li data-target="#mySlider" data-slide-to="1"></li>
          <li data-target="#mySlider" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner text-white">
          <div class="carousel-item active">
            <div class="content">
              <div class="employee">
                <div class="h3 text-uppercase">James Maddison</div>
                <div class="h6 text-mute">Customer</div>
              </div>
              <div class="testimonial bg-white text-dark"> <span class="fas fa-quote-left"></span>
                <div class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem error iusto aliquid laboriosam voluptas enim sint expedita architecto in voluptates!</div> <span class="fas fa-quote-right"></span>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="content">
              <div class="employee">
                <div class="h3 text-uppercase">mustapha esh-shahed</div>
                <div class="h6 text-mute">Director</div>
              </div>
              <div class="testimonial bg-white text-dark"> <span class="fas fa-quote-left"></span>
                <div class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem error iusto aliquid laboriosam voluptas enim sint expedita architecto in voluptates!</div> <span class="fas fa-quote-right"></span>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="content">
              <div class="employee">
                <div class="h3 text-uppercase">William Wendy</div>
                <div class="h6 text-mute">Supervisor</div>
              </div>
              <div class="testimonial bg-white text-dark"> <span class="fas fa-quote-left"></span>
                <div class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem error iusto aliquid laboriosam voluptas enim sint expedita architecto in voluptates!</div> <span class="fas fa-quote-right"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

    <?php
    
    include "./footer.php"
    ?>



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="./style.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <!-- navbar -->
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