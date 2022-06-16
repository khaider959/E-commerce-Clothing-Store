<div>
    <div class="container">
    <form action="updatePersonalInfoQuery.php?userId=<?php echo $uId;?>" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlInput1">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="Username" value="<?php echo $row['Username']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Email</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" name="Email" value="<?php echo $row['Email']; ?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput3">Address</label>
        <input type="text" class="form-control" id="exampleFormControlInput3" name="billingAddress" value="<?php echo $row['billingAddress']; ?>">
    </div>
    <div class="form-group">
        <input type="submit" name="upload" value="Submit" >
    </div>
    </form>
    </div>
</div>