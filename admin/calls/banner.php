<?php
 if(isset($_GET['banner'])){
?>
<div class="row">
    <div class="col-md-8 offset-md-2">

        <div class="card">
            <form action="" method="POST">
                <div class="card-body">
                    <h5 class="card-title">Banner/Slider</h5>

                    <div class="form-group row">
                        <label class="col-md-3" for="TextInput">Caption</label>
                        <div class="col-md-9">
                            <input type="text" id="TextInput" name="caption" class="form-control" placeholder="Enter Caption">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3" for="TextInput">Body</label>
                        <div class="col-md-9">
                            <input type="text" id="TextInput" name="body" class="form-control" placeholder="Enter Body Msg">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3">File Upload</label>
                        <div class="col-md-9">
                            <div class="custom-file">
                                <input type="file" name="photo" class="custom-file-input" id="validatedCustomFile" required>
                                <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                <div class="invalid-feedback">Example invalid custom file feedback</div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="border-top">
                    <div class="card-body">
                        <center><button type="button" name="add" class="btn btn-primary">Add Slider</button></center>
                    </div>
                </div>
            </form>
        </div>


    </div>

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
                        <tr>

                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td><button type="button" class="btn btn-success">Edit</button></td>
                            <td><button type="button" class="btn btn-danger">Delete</button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

</div>
<?php 
}
if(isset($_POST['add'])){

    if(isset($_FILES['photo'])){
      
        $file_name = $_FILES['photo']['name'];
        $file_size =$_FILES['photo']['size'];
        @$file_tmp =$_FILES['photo']['tmp_name'];
        $file_type=$_FILES['photo']['type'];
        $allowed = array('png','jpg','jpeg','gif');
        @$file_ext=explode('.',$_FILES['photo']['name']) ;
        $file_ext=end($file_ext);
        @$file_ext=strtolower(end(explode('.',$_FILES['photo']['name']))); 
        $uploadName = md5(microtime()).'.'.$file_ext;
        $uploadPath = BASEURL.'/uploads/slides/'.$uploadName;
        $dbpath='/uploads/slides/'.$uploadName;
        move_uploaded_file($file_tmp,$uploadPath);
        
    
    
    }
        
}

?>