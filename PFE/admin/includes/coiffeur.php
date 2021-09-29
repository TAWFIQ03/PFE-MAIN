<div class="container-fluid px-4 mx-5 ">

    <!-- /#table -->

    <div class="row my-5">
        <h3 class="fs-5 mt-3  mx-5 ">Recent Orders</h3>
        <br><br>
       
        <div class="col">
            <table class="table  bg-white rounded shadow-sm  table-hover shadow-lg p-3 mt-3 bg-body mx-5">
            <a href="form" class="fs-5 ml-5 mt-2  mx-5   btn btn-warning" data-toggle="modal" data-target="#exampleModal">Add New Barber</a>
                <thead>
                    <tr>
                       
                        <th scope="col">ID</th>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                      
                        <th scope="col">Poste</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> phone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                       
                  
                    $query = "SELECT * FROM `coiffeur` ";
                    $select_all = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($select_all)) {
                        $ID = $row['ID'];
                        $Name = $row['Name'];
                        $Lname = $row['Lname'];
                        $img = $row['img'];

                        $poste = $row['poste'];
                        $email = $row['Email'];
                        $phone = $row['phone'];



                    ?>
                        <tr>
                            <th scope="row"><?php echo $ID ?></th>
                           
                            <td><?php echo $Name ?></td>
                            <td><?php echo $Lname ?></td>
                           

                            <td><?php echo $poste ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $phone ?></td>
                            <td><a name="delete" class="btn btn-danger" href="coiffeur.php?delete=<?php echo $ID ?>">DELETE </a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
                <form action="" method="post" id="form">
                    <?php
                  // delete
                  if (isset($_GET['delete'])) {
                    $id_delete = $_GET['delete'];
                    $query =   "DELETE from `coiffeur` WHERE `id` = $id_delete";
                    $delete_query = mysqli_query($conn, $query);
                    header("location:coiffeur.php");
                }
                //    ad new barber
                    if (isset($_POST['submit'])) {

                        $firstName =  $_POST['firstName'];
                        $lastName =  $_POST['lastName'];

                        $barber_img = $_FILES['img']['name'];
                        $barber_img_tmp = $_FILES['barber_img']['tmp_name'];
                        move_uploaded_file($barber_img_tmp, "../myimags/$barber_img");

                        $poste =  $_POST['poste'];
                        $email =  $_POST['email'];
                        $phone =  $_POST['phone'];
                        $fb =  $_POST['fb'];
                        $in =  $_POST['in'];
                        $tw =  $_POST['tw'];



                        $query = " INSERT INTO `coiffeur` (`ID`, `Name`, `Lname`, `img`, `poste`, `Email`, `phone`,`fb`, `in`, `tw`)
                        VALUES (NULL,'{$firstName}','{$lastName}','{$barber_img}','{$poste}','{$email}','{$phone}','{$fb}','{$in}','{$tw}');";
                        $add_up = mysqli_query($conn, $query);


                        if (!$add_up) {
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



              

    <!-- Modal -->
    <div class="modal fade shadow-lg p-3  rounded" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Barber Shop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- up -->
                        <div class="container">
   
   <div class="row">
       <div class="col-md-6 mb-4 "> <input class="form-control" type="text" name="firstName" placeholder="First Name" require> </div>
       <div class="col-md-6 mb-4 "> <input class="form-control" type="text" name="lastName" placeholder="Last Name" require> </div>
   </div>
   
   <div class="row mb-3">
  <label for="formFile" class="form-label">Picture Of Barber</label>
  <input class="form-control"  name="img" type="file" id="formFile" require>
</div>
   <div class="row">
  
       <div class="col-6 mb-4"> <input type="text"  name="poste" placeholder="Your Poste" class="form-control" require> </div>
       <div class="col-6 mb-4"> <input type="email"  name="email" placeholder="Email address" class="form-control" require> </div>
   </div>
   <div class="row">
       <div class="col-12 mb-4"> <input type="phone"  name="phone" placeholder="Your Phone" class="form-control" require> </div>
   </div>
   <div class="row">
  
  <div class="col-4 mb-4"> <input type="link" name="fb" placeholder=" FB link" class="form-control" require> </div>
  <div class="col-4 mb-4"> <input type="link" name="in" placeholder=" IG link" class="form-control" require> </div>
  <div class="col-4 mb-4"> <input type="link" name="tw" placeholder=" TW link" class="form-control" require> </div>

</div>
  
   <div class="row">
       <div class="col-12 mb-4">
           <div >
           <input class="btn btn-primary "  name="submit" type="submit" value=" ADD UP"> </div>
       </div>
   </div>
                        </div>
                        <!-- down -->

                      
                    </div>
               
                </div>
            </div>
        </div>
        </form>
        
 