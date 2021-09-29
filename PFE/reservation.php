<?php include "./inclouds/db.php" ?>
<?php session_start() ?>

<?php

if (!$_SESSION["lastName"]) {
    header("location: index.php");
}


?>
<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table</title>
    <link rel="stylesheet" href="style.css" />
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body {
            color: #fff;
            overflow-x: hidden;
            height: 100%;
            background-color: default;
            background-repeat: no-repeat
        }

        .fieldlabels {
            color: #455A64 !important;
            text-align: left
        }

        #progressbar {
            margin-bottom: 30px;
            overflow: hidden;
            color: #455A64;
            padding-left: 0px;
            margin-top: 30px
        }

        #progressbar li {
            list-style-type: none;
            font-size: 13px;
            width: 33.33%;
            float: left;
            position: relative;
            font-weight: 400
        }

        #progressbar #step1:before {
            content: "1";
            color: #fff
        }

        #progressbar #step2:before {
            content: "2";
            color: #fff
        }

        #progressbar #step3:before {
            content: "3";
            color: #fff
        }

        #progressbar li:before {
            width: 40px;
            height: 40px;
            line-height: 45px;
            display: block;
            font-size: 20px;
            background: #455A64;
            border-radius: 50%;
            margin: auto;
            padding: 0px
        }

        #progressbar li:after {
            content: '';
            width: 100%;
            height: 2px;
            background: #455A64;
            position: absolute;
            left: 0;
            top: 21px;
            z-index: -1
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            position: absolute;
            left: -50%
        }

        #progressbar li:nth-child(2):after {
            left: -50%
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            position: absolute;
            left: 50%
        }

        #progressbar li:last-child:after {
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px
        }

        #progressbar li:first-child:after {
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px
        }

        #progressbar li.active:before,
        #progressbar li.active:after {
            background: #fdbc03
        }

        .card {
            background-color: #fdbc03;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
            padding: 60px 40px 40px 40px;
            z-index: 0;
            display: none;
            box-shadow: 1px 1px 5px 5px #000;
        }

        .card.show {
            display: block
        }

        .form-control-label {
            font-size: 22px !important;
            color: #fff;
            letter-spacing: 1px
        }

        ::placeholder {
            color: #fff;
            opacity: 1;
            font-weight: 300
        }

        :-ms-input-placeholder {
            color: #fff;
            font-weight: 300
        }

        ::-ms-input-placeholder {
            color: #fff;
            font-weight: 300
        }

        select,
        input,
        textarea,
        button {
            background-color: #fdbc03 !important;
            padding: 8px 15px 8px 15px;
            border-radius: 0px !important;
            margin-bottom: 25px;
            margin-top: 2px;
            width: 100%;
            box-sizing: border-box;
            color: #2C3E50;
            background-color: #ECEFF1;
            border: none;
            border-bottom: 1px solid #ccc;
            font-size: 18px !important;
            color: #fff !important;
            font-weight: 300
        }

        select:focus input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border-bottom: 1px solid #9FA8DA;
            outline-width: 0;
            font-weight: 400
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0
        }

        .circle {
            position: relative
        }

        .fa-long-arrow-right {
            color: #fdbc03;
            background-color: #fff;
            padding: 12px;
            margin: 5px;
            border-radius: 50%;
            border: 3px solid #fdbc03;
            position: absolute;
            left: -28px;
            top: 12px;
            cursor: pointer
        }

        .fa-long-arrow-right:hover {
            color: #FFF;
            background-color: #000
        }

        .fa-long-arrow-left {
            position: absolute;
            left: 20px;
            top: 20px;
            color: #fff;
            cursor: pointer
        }

        .check-mark {
            width: 180px;
            height: 180px
        }
    </style>
</head>

<body>

    <?php
    if (isset($_POST['submit'])) {
        $coiffeur = $_POST['coiffeur'];
        $service = $_POST['service'];
        $client = $_POST['client'];
        $date = $_POST['date'];
        $Time = $_POST['Time'];
        $query = " INSERT INTO `reservation` (`id`, `id_coiffeur`, `id_client`, `id_service`, `dateR`, `status`, `date_client`, `heure_client`) 
            VALUES (NULL, '{$coiffeur}',  '{$client}','{$service}', now(), 'non','{$date}', '{$Time}');";
        $add_resevation = mysqli_query($conn, $query);
        if (!$add_resevation) {
            die("QUERY FAILED" . mysqli_error($conn));
        } else {
            echo "reservation Created" . " " . "<a href='home.php'>go to back </a>";
        }
    }

    ?>


    <div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9">
                <ul id="progressbar" class="text-center">
                    <li class="active step0" id="step1">your informations</li>
                    <li class="step0" id="step2">date time</li>
                    <li class="step0" id="step3">CONFIRMATION</li>
                </ul>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="card b-0 show">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-11">
                                <div class="form-group">
                                    <label class="form-control-label text-dark "> Barber</label><br>
                                    <select id="coiffeur" name="coiffeur" onblur="validate1(1)">
                                        <?php
                                        $query = "SELECT * FROM `coiffeur` ";
                                        $select_all = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($select_all)) {
                                            $ID = $row['ID'];
                                            $Name = $row['Name'];
                                            $Lname = $row['Lname'];
                                            echo "<option value='{$ID}'>$Name  $Lname</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label text-dark ">service</label>
                                    <select id="service" name="service" onblur="validate1(2)">
                                        <?php
                                        $query = "SELECT * FROM `service` ";
                                        $select_all = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_assoc($select_all)) {
                                            $ID = $row['ID'];
                                            $NAMESER = $row['NAMESER'];
                                            echo "<option value='{$ID}'>$NAMESER</option>";
                                        }

                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label text-dark">your ID is </label>
                                    <input type="hidden" value="<?php echo $_SESSION['ID'] ?>" id="client" name="client" onblur="validate1(3)">

                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="circle">
                                <div class="fa fa-long-arrow-right next" id="next1" onclick="validate1(0)"></div>
                            </div>
                        </div>
                    </div>
                    <div class="card b-0">
                        <div class="fa fa-long-arrow-left prev"> </div>
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-md-11">
                                <div class="form-group">
                                    <label class="form-control-label text-dark">Date Reservation</label>
                                    <input type="date" id="date" name="date" placeholder="Enter your website title here ..." class="" onblur="validate2(1)">
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label text-dark">Time Reservation </label>
                                    <input type="time" id="Time" name="Time" placeholder="Enter description of website here ..." class="" onblur="validate2(2)">
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="circle">
                                <div class="fa fa-long-arrow-right next" id="next2" name="submit" onclick="validate2(0)">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card b-0">
                        <div class="row d-flex justify-content-center text-center">
                            <div class="confirm">
                                <h4 class="mb-2">Thank You !</h4>
                                <p>An estimation will be sent on your email address.</p>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center">
                            <a href="#">
                                <div class="check">
                                    <img src="https://i.imgur.com/g6KlBWR.gif" class="check-mark">
                                </div>
                                <button name="submit" type="submit">back home</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function validate1(val) {
            v1 = document.getElementById("coiffeur");
            v2 = document.getElementById("service");
            v3 = document.getElementById("client");


            flag1 = true;
            flag2 = true;
            flag3 = true;


            if (val >= 1 || val == 0) {
                if (v1.value == "") {
                    v1.style.borderColor = "red";
                    flag1 = false;
                } else {
                    v1.style.borderColor = "white";
                    flag1 = true;
                }
            }

            if (val >= 2 || val == 0) {
                if (v2.value == "") {
                    v2.style.borderColor = "red";
                    flag2 = false;
                } else {
                    v2.style.borderColor = "white";
                    flag2 = true;
                }
            }

            if (val >= 3 || val == 0) {
                if (v3.value == "") {
                    v3.style.borderColor = "red";
                    flag3 = false;
                } else {
                    v3.style.borderColor = "white";
                    flag3 = true;
                }
            }

            flag = flag1 && flag2 && flag3;

            return flag;
        }

        function validate2(val) {
            v1 = document.getElementById("date");
            v2 = document.getElementById("Time");

            flag1 = true;
            flag2 = true;

            if (val >= 1 || val == 0) {
                if (v1.value == "") {
                    v1.style.borderColor = "red";
                    flag1 = false;
                } else {
                    v1.style.borderColor = "white";
                    flag1 = true;
                }
            }

            if (val >= 2 || val == 0) {
                if (v2.value == "") {
                    v2.style.borderColor = "red";
                    flag2 = false;
                } else {
                    v2.style.borderColor = "white";
                    flag2 = true;
                }
            }

            flag = flag1 && flag2;

            return flag;
        }

        $(document).ready(function() {

            var current_fs, next_fs, previous_fs;

            $(".next").click(function() {

                str1 = "next1";
                str2 = "next2";

                if (!str1.localeCompare($(this).attr('id')) && validate1(0) == true) {
                    val1 = true;
                } else {
                    val1 = false;
                }

                if (!str2.localeCompare($(this).attr('id')) && validate2(0) == true) {
                    val2 = true;
                } else {
                    val2 = false;
                }

                if ((!str1.localeCompare($(this).attr('id')) && val1 == true) || (!str2.localeCompare($(this).attr('id')) && val2 == true)) {
                    current_fs = $(this).parent().parent().parent();
                    next_fs = $(this).parent().parent().parent().next();

                    $(current_fs).removeClass("show");
                    $(next_fs).addClass("show");

                    $("#progressbar li").eq($(".card").index(next_fs)).addClass("active");

                    current_fs.animate({}, {
                        step: function() {

                            current_fs.css({
                                'display': 'none',
                                'position': 'relative'
                            });

                            next_fs.css({
                                'display': 'block'
                            });
                        }
                    });
                }
            });

            $(".prev").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                $(current_fs).removeClass("show");
                $(previous_fs).addClass("show");

                $("#progressbar li").eq($(".card").index(next_fs)).removeClass("active");

                current_fs.animate({}, {
                    step: function() {

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });

                        previous_fs.css({
                            'display': 'block'
                        });
                    }
                });
            });

        });
    </script>


</body>

</html>