<body class="">
    
<div class="container-fluid  px-4 mx-5 ">

    <!-- /#table -->

    <div class="row my-5">
        <h3 class="fs-4 mt-4 text-dark mx-5 "><strong> Recent Orders Of Reservations</strong></h3>
        <br><br>
        <br>
        <br>
        <div class="col">
            <table class="table table-responsive bg-white rounded shadow-sm shadow-lg p-3 mt-4 rounded  table-hover mx-5">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">id_coiffeur</th>
                        <th scope="col">id_client</th>
                        <th scope="col">id_service</th>
                        <th scope="col">dateR</th>
                        <th scope="col">status</th>
                        <th scope="col">date_client_reserved</th>
                        <th scope="col">heure_client_reserved</th>
                        <th scope="col">active</th>
                        <th scope="col">no active</th>
                        <th scope="col">delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM `reservation` ";
                    $select_all = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($select_all)) {
                        $id = $row['id'];
                        $id_coiffeur = $row['id_coiffeur'];
                        $id_client = $row['id_client'];
                        $id_service = $row['id_service'];
                        $dateR = $row['dateR'];
                        $status = $row['status'];
                        $date_client = $row['date_client'];
                        $heure_client = $row['heure_client'];


                    ?>

                        <tr>
                            <th scope="row"><?php echo $id ?></th>

                            <td>
                                <a href="" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal"> <strong><?php echo $id_coiffeur ?></strong></a>


                            </td>
                            <td>                                
                                <a href="" class="btn btn-dark" data-toggle="modall" data-target="#exampleModall"><strong><?php echo $id_client ?></strong></td></a>
                            <td><strong><?php echo $id_service ?></strong></td>
                            <td><strong><?php echo $dateR ?></strong></td>
                            <td><strong><?php echo $status ?></strong></td>
                            <td><strong><?php echo $date_client ?></strong></td>
                            <td><strong><?php echo $heure_client ?></strong></td>
                            <td><a class="btn btn-success" href="reservation.php?avtive=<?php echo $id ?>">ACTIVE</a></td>
                            <td><a class="btn btn-info" href="reservation.php?noavtive=<?php echo $id ?>">NO ACTIVE</a> </td>
                            <td><a class="btn btn-danger" href="reservation.php?delete=<?php echo $id ?>">DELETE </a></td>
                        </tr>

                    <?php } ?>



                </tbody>
            </table>
        </div>
    </div>




    <?php
    if (isset($_GET['delete'])) {
        $id_delete = $_GET['delete'];
        $query =   "DELETE from reservation WHERE id = {$id_delete}";
        $delete_query = mysqli_query($conn, $query);
        header("location:reservation.php");
    }
    if (isset($_GET['noavtive'])) {
        $noavtive = $_GET['noavtive'];
        $query =   "UPDATE reservation SET `status` = 'non'  WHERE id = {$noavtive}";
        $delete_query = mysqli_query($conn, $query);
        header("location:reservation.php");
    }
    if (isset($_GET['avtive'])) {
        $noavtive = $_GET['avtive'];
        $query =   "UPDATE reservation SET `status` = 'yes'  WHERE id = {$noavtive}";
        $delete_query = mysqli_query($conn, $query);
        header("location:reservation.php");
    }


    $query = "SELECT * FROM `coiffeur`  where  `ID`= {$id_coiffeur}";
    $all_select = mysqli_query($conn, $query);
    while ($now = mysqli_fetch_assoc($all_select)) {
        $ID = $now['ID'];
        $Namee = $now['Name'];
        $Lnamee = $now['Lname'];
        $postee = $now['poste'];
        $Emaile = $now['Email'];
        $phone = $now['phone'];

    ?>

        <!-- Modal -->
        <div class="modal fadehadow-lg   rounded" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Barber Shop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <?php
                        echo   "<h4>$Namee </h4>";
                        echo   "<h4>$Lnamee</h4>";
                        echo   "<h4>$postee</h4>";
                        echo   "<h4>$Emaile</h4>";
                        echo   "<h4>$phone</h4>";
                        ?>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
      <?php  

    // $queryyy = "SELECT * FROM `client`  where  $id_client";
    // $select_alll = mysqli_query($conn, $queryyy);
    // while ($rowb = mysqli_fetch_assoc($select_alll)) {
    //     $IbD = $rowb['jID'];
    //     $Nbamee = $rowb['jName'];
    //     $Lnbamee = $rowb['jLname'];
    //     $pobstee = $rowb['jposte'];
    //     $Embaile = $rowb['jEmail'];

    ?>

        <!-- Modal -->
        <!-- <div class="modall fadee" id="exampleModall" tabindex="-1" role="dialogg" aria-labelledby="exampleModalLabell" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Barber Shop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body"> -->

                       <?php 
                     
                        // echo   "<h4>$Nbamee </h4>";
                        // echo   "<h4>$Lbnamee</h4>";
                        // echo   "<h4>$pbostee</h4>";
                        // echo   "<h4>$Embaile</h4>";
                        ?>
                    <!-- </div><
                </div>
            </div>
        </div> -->
        </body>
