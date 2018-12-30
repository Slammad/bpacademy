<?php
 if(isset($_GET['banner'])){
?>
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addBanner">
  Add Banner
</button><br><br>
<div class="row">
    





    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Slides</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col">CAPTION</th>
                            <th scope="col">BODY</th>
                            <th scope="col">IMAGE</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="customtable">
                 
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
<?php 
}
if(isset($_POST['addbanner'])){
$caption = $_POST['caption'];
$body = $_POST['body'];
    if(isset($_FILES['banner'])){
      
        $file_name = $_FILES['banner']['name'];
        $file_size =$_FILES['banner']['size'];
        @$file_tmp =$_FILES['banner']['tmp_name'];
        $file_type=$_FILES['banner']['type'];
        $allowed = array('png','jpg','jpeg','gif');
        @$file_ext=explode('.',$_FILES['banner']['name']) ;
        $file_ext=end($file_ext);
        @$file_ext=strtolower(end(explode('.',$_FILES['banner']['name']))); 
        $uploadName = md5(microtime()).'.'.$file_ext;
        $uploadPath = BASEURL.'/uploads/slides/'.$uploadName;
        $dbpath='/uploads/slides/'.$uploadName;

        if (($file_size > 2097152)){      
            $message = 'File too large. File must be less than 2 megabytes.'; 
            echo '<script type="text/javascript">alert("'.$message.'");</script>'; 
        }else{
            $checkq = "SELECT * FROM `banner` WHERE `caption`='$caption'";
            $run =$conn->query($checkq);
            $row_cnt=mysqli_num_rows($run);

            if($row_cnt = 0){
                echo "<script>console.log('not exist')</script>";
                move_uploaded_file($file_tmp,$uploadPath);
                $query = "INSERT INTO `banner`(`id`, `caption`, `body`, `banner`) VALUES (NULL,'$caption','$body','$dbpath')";
                if($conn->query($query)){
                    echo "<script>console.log('worked')</script>";
                }   
            }
            

        }

       

        
    
    
    
    }
        
}

?>


<div class="modal fade" id="addBanner" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Banner/Slider</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="card">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                    <h5 class="card-title">Gallery</h5>

                    <div class="form-group row">
                        <label class="col-md-3" for="TextInput">Banner Caption</label>
                        <div class="col-md-9">
                            <input type="text" id="TextInput" name="caption" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3" for="TextInput">Banner Body</label>
                        <div class="col-md-9">
                        <textarea name="body" class="form-control form-white"></textarea>
                                <script>
		                    	CKEDITOR.replace( 'body' );
		                        </script>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3">File Upload</label>
                        <div class="col-md-9">
                            
                        <input type="file" name="banner" id="profile-img" required/><br><br>
                                    <img src="" id="profile-img-tag" width="200px" />
                                    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                                    <script type="text/javascript">
                                        function readURL(input) {
                                            if (input.files && input.files[0]) {
                                                var reader = new FileReader();
                                                
                                                reader.onload = function (e) {
                                                    $('#profile-img-tag').attr('src', e.target.result);
                                                }
                                                reader.readAsDataURL(input.files[0]);
                                            }
                                        }
                                        $("#profile-img").change(function(){
                                            readURL(this);
                                        });
                                    </script><br>
                               
                              
                        </div>
                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <center><button type="submit" name="addbanner" class="btn btn-primary">Add Slider</button></center>
                    </div>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
</div>