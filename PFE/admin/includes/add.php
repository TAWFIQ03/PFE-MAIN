<div class="mt-5" id="container">
    <img src="" alt="">
    <form name="formAdd" action="" method="POST" class="formulaire" enctype="multipart/form-data">
        <h2 align="center">Add a new Barber</h2>

        <p class="col-lg-5"><a href="admin.php" class="btn btn-warning submit">Back</a></p>



        <div class="form-group">
            <label for="inputsm">Name :</label>
            <input class="form-control col-lg input-lg" name="usernamee" placeholder="coiffeur Name" id="inputsm" type="text" required>
        </div>
        <div class="form-group">
            <label for="inputdefault">last name :</label>
            <input class="form-control col-lg input-lg" id="inputdefault" name="lname" placeholder="last name" required type="text">
        </div>
        <div class="form-group">
            <label for="inputlg">phone</label>
            <input class="form-control col-lg input-lg" required placeholder="phone" name="phone" type="number">
        </div>
        <div class="form-group">
            <label for="inputlg">Adress</label>
            <input class="form-control col-lg input-lg" type="text" name="adress" placeholder="address" required>
        </div>
        <div class="form-group">
            <label for="inputlg">email</label>
            <input class="form-control col-lg input-lg" name="email" placeholder="email" required type="email">
        </div>

        <div class="form-group">

            <input class="btn btn-warning " type="submit" name="save" value="save" class="submit">
        </div>


    </form>
</div>