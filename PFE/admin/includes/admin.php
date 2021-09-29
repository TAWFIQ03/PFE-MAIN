
<div class="d-flex mt-5 flex-row">

    <div class="col-md-12 ">
        <div class="container-fluid">
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome With Admin
                    <small class="text-warning"><?php echo $_SESSION["firstName"] ?></small> 
                    <!-- <span style='font-size:100px;'>&#128526;</span> -->
                </h1>

            </div>
        </div>


    </div>
        <div style="height: 35vh;" class="card mt-5 rounded card-hover card2 p-2">
           
<div id="page-wrapper">
    
</div>
       <div class="row">
       <div class="col-lg-3 col-md-6">
               <div class="panel panel-yellow">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-users fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM client";
                                $select_all = mysqli_query($conn, $query);
                                $User_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$User_counts}</div>";
                                ?>

                               <div>Users</div>
                           </div>
                       </div>
                   </div>
                   <a href="users.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3  col-md-6">
               <div class="panel panel-green">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-user fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM coiffeur";
                                $select_all = mysqli_query($conn, $query);
                                $barber_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$barber_counts}</div>";
                                ?>

                               <div>Barbers</div>
                           </div>
                       </div>
                   </div>
                   <a href="coiffeur.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3  col-md-6">
               <div class="panel panel-red">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="fa fa-comments fa-5x"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM contact";
                                $select_all = mysqli_query($conn, $query);
                                $message_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$message_counts}</div>";
                                ?>

                               <div> Messages</div>
                           </div>
                       </div>
                   </div>
                   <a href="message.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
           <div class="col-lg-3  col-md-6">
               <div class="panel panel-yellow">
                   <div class="panel-heading">
                       <div class="row">
                           <div class="col-xs-3">
                               <i class="iconify  fa-5x" data-icon="ri:reserved-fill"></i>
                           </div>
                           <div class="col-xs-9 text-right">


                               <?php

                                $query = "SELECT * FROM reservation";
                                $select_all = mysqli_query($conn, $query);
                                $reservation_counts = mysqli_num_rows($select_all);
                                echo " <div class='huge'>{$reservation_counts}</div>";
                                ?>

                               <div>Reservations</div>
                           </div>
                       </div>
                   </div>
                   <a href="reservation.php">
                       <div class="panel-footer">
                           <span class="pull-left">View Details</span>
                           <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                           <div class="clearfix"></div>
                       </div>
                   </a>
               </div>
           </div>
      </div>
</div>
   
           <div class="row">
           <script type="text/javascript">
               google.charts.load('current', {
                   'packages': ['bar']
               });
               google.charts.setOnLoadCallback(drawChart);

               function drawChart() {
                   var data = google.visualization.arrayToDataTable([
                       ['date', 'count'],

                       <?php
                        $element = ['client', 'coiffeur', 'contact', 'reservation'];
                        $count = [$users_counts,$barber_counts ,  $message_counts,$reservation_counts];

                        for ($i = 0; $i < 4; $i++) {
                            echo "['{$element[$i]}'" . "," . "{$count[$i]}],";
                        }

                        ?>


                   ]);

                   var options = {
                       chart: {
                           title: '',
                           subtitle: '',
                       }
                   };

                   var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                   chart.draw(data, google.charts.Bar.convertOptions(options));
               }
           </script>
           <div class="table-responsive">
               <div id="columnchart_material" style="width: 'auto'; height: auto;"></div>
           </div>

       </div>
       </div></div>