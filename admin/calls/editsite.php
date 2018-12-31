<?php
 if(isset($_GET['editsite'])){
    $settings = "SELECT * FROM `settings` WHERE `id`=1";
    $run = $conn->query($settings);
    $edit = mysqli_fetch_assoc($run);
?>
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <form class="form-horizontal" action="" method="POST">
                <div class="card-body">
                    <h4 class="card-title">BPACADEMY SETTINGS</h4>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">School Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sname" id="fname" value="<?=$edit['school_name']?>" placeholder="Enter School Name">
                                </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">School Email</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="smail" id="lname" value="<?=$edit['school_mail']?>" placeholder="School Email">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">School Phone</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sphone" id="lname" value="<?=$edit['school_phone']?>" placeholder="School Phone">
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">School Phone 2</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="sphone2" id="lname" value="<?=$edit['tell2']?>" placeholder="School Phone">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Meta Title</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="mtitle" id="lname" value="<?=$edit['meta_title']?>" placeholder="Meta Title">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="lname" class="col-sm-3 text-right control-label col-form-label">Meta Description</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" value="<?=$edit['meta_desc']?>" placeholder="School Phone"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">#twitter</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="stwitter" id="email1" value="<?=$edit['twitter']?>" placeholder="twitter handle">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cono1" class="col-sm-3 text-right control-label col-form-label">#facebook</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="sfacebook" class="form-control" id="cono1" placeholder="facebook page">
                                    </div>
                                </div>
                                   
                            </div>

                            <div class="border-top">
                        <div class="card-body">
                        <center><button type="submit" name="submit" class="btn btn-primary">Update</button></center>
                    </div>
                </div>
            </form>
        </div>
</div>
<?php

 }

 
if(isset($_POST['submit'])){
    $sname=$_POST['sname'];
    $smail=$_POST['smail'];
    $sphone=$_POST['sphone'];
    $sphone1= $_POST['sphone2'];
    $stwitter= $_POST['stwitter'];
    $sfbook=$_POST['sfacebook'];



    $query1 ="UPDATE `settings` SET `school_name`='$sname', `school_phone`='$sphone',`school_mail`='$smail', `tell2`='$sphone1' WHERE `id`='1'";

    $update = $conn->query($query1);

    if($update){
        echo "<script>console.log('Update Successful')</script>";
         echo "<script>window.location.href = window.location.href;</script>";
        
    }else{
        echo "<script>console.log('failed query')</script>";
    }
  
}
?>