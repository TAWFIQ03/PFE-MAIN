<div class="container-fluid px-4 mx-5 ">

    <!-- /#table -->

    <div class="row my-5">
        <h3 class="fs-5 mt-3  mx-5 ">Recent Users</h3>
        <br><br>
       
        <div class="col">
            <table class="table  bg-white rounded shadow-sm  table-hover shadow-lg p-3 mt-3 bg-body mx-5">
                <thead>
                    <tr>
                        <th scope="col" width="50">Id</th>
                        <th scope="col">First Name</th>
                        <th scope="col"> last Name</th>
                        <th scope="col"> Email</th>
                        <th scope="col"> Sign Up Date</th>
                        <th scope="col"> Phone</th>


                    </tr>
                </thead>
                <tbody>
                    <?php
                       
                  
                    $query = "SELECT * FROM `client` ";
                    $select_all = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($select_all)) {
                        $ID = $row['ID'];
                        $Name = $row['firstName'];
                        $lastName = $row['lastName'];
                        $email = $row['email'];
                        $signUpDate = $row['signUpDate'];
                        $phone = $row['phone'];




                    ?>
                        <tr>
                            <th scope="row"><?php echo $ID ?></th>
                            <td><?php echo $Name ?></td>  
                            <td><?php echo $lastName ?></td>
                            <td><?php echo $email ?></td>
                            <td><?php echo $signUpDate ?></td>                           
                            <td><?php echo $phone ?></td>


                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</div>