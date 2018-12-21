<?php
 if(isset($_GET['gallery'])){
$fetchgallery = "SELECT * FROM `gallery`";
$gallery = $conn->query($fetchgallery);
?>
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addImage">
  Add Image
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
                    <?php while($images = mysqli_fetch_assoc($gallery)){?>
                        <tr>

                            <td><?=$images['title']?></td>
                            <td><?=$images['image_desc']?></td>
                            <td><img src="..<?=$images['image_path']?>" style="width:100px;" s alt="" /></td>
                            <td><button type="button" class="btn btn-success">Edit</button></td>
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?=$images['id'];?>">
                                    <button type="submit" name="deleteimage" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php }?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
<?php 
}

if(isset($_POST['add'])){
    $imagetitle= $_POST['title'];
    $imagedesc= $_POST['desc'];

    if(isset($_FILES['photo'])){
      
        $file_name = $_FILES['photo']['name'];
        $file_size =$_FILES['photo']['size'];
        $file_tmp =$_FILES['photo']['tmp_name'];
        $file_type=$_FILES['photo']['type'];
        $file_ext=explode('.',$_FILES['photo']['name']) ;
        $file_ext=end($file_ext);
        $file_ext=strtolower(end(explode('.',$_FILES['photo']['name']))); 
        $uploadName = md5(microtime()).'.'.$file_ext;
        $uploadPath=BASEURL.'/bpacademy/uploads/gallery/'.$uploadName;
        $dbpath='/uploads/gallery/'.$uploadName;
        
        $check = "SELECT * FROM `gallery` WHERE `title`='$imagetitle' AND `image_desc`='$imagedesc'";
        $runcheck = $conn->$check;
        $row_cnt =$runcheck->num_rows;

        if($row_cnt > 0){
            echo "<script>console.log('Data Exists')</script>";
        }else{

            if(move_uploaded_file($file_tmp,$uploadPath)){
                echo "<script>console.log('Uploaded Picture')</script>";
                $insert = "INSERT INTO `gallery`(`id`, `title`, `image_desc`, `image_path`) VALUES (NULL,'$imagetitle','$imagedesc','$dbpath')";
    
                $insertdb = $conn->query($insert);
                 if($insertdb){
                    
                     echo "<script>window.location.href = window.location.href;</script>";

                 }
            }

        }
      
      
      
    }
        
}


if(isset($_POST['deleteimage'])){
    $id=$_POST['id'];

    $query = "DELETE FROM `gallery` WHERE `id`='$id'";
    $delete = $conn->query($query);

    if($delete){
       
        echo "<script>window.location.href = window.location.href;</script>";
    }

}

?>

<div class="modal fade" id="addImage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Image</h5>
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
                        <label class="col-md-3" for="TextInput">Image Title</label>
                        <div class="col-md-9">
                            <input type="text" id="TextInput" name="title" class="form-control" placeholder="Enter Title">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3" for="TextInput">Description</label>
                        <div class="col-md-9">
                        <textarea name="desc" class="form-control form-white"></textarea>
                                <script>
		                    	CKEDITOR.replace( 'desc' );
		                        </script>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3">File Upload</label>
                        <div class="col-md-9">
                            
                        <input type="file" name="photo" id="profile-img" required/><br><br>
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
                        <center><button type="submit" name="add" class="btn btn-primary">Add to Gallery</button></center>
                    </div>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
</div>