<?php
 if(isset($_GET['fees'])){
$fetchitems = "SELECT * FROM `fees`";
$itemsq = $conn->query($fetchitems);
?>
<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addFees">
  Add Item
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

                            <th scope="col">S/N</th>
                            <th scope="col">ITEM</th>
                            <th scope="col">COST</th>
                            <th scope="col">REMARK</th>
                           
                        </tr>
                    </thead>
                    <tbody class="customtable">
                    <?php while($item = mysqli_fetch_assoc($itemsq)){?>
                        <tr>

                           <td><?=$item['id']?></td>
                           <td><?=$item['item']?></td>
                           <td><?=$item['cost']?></td>
                           <td><?=$item['remark']?></td>
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

if(isset($_POST['additem'])){
    $itemname= $_POST['item'];
    $cost= $_POST['cost'];
    $remark= $_POST['remark'];
    $check = "SELECT * FROM `fees` WHERE `remark`='$remark'";
    $runcheck = $conn->query($check);
    $num_rows = $runcheck->num_rows;

    if($num_rows == 0){
        echo "<script>console.log('item exists')</script>";
    }else{
        $query ="INSERT INTO `fees`(`id`, `item`, `cost`, `remark`) VALUES (NULL,'$itemname','$cost','$remark')";
        $insertitem = $conn->query($query);
    
        if($insertitem){
            echo "<script>console.log('inserted)</script>";
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

<div class="modal fade" id="addFees" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <label class="col-md-3" for="TextInput">Item</label>
                        <div class="col-md-9">
                            <input type="text" id="TextInput" name="item" class="form-control" placeholder="Enter item">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label class="col-md-3" for="TextInput">Cost</label>
                        <div class="col-md-9">
                            <input type="text" id="TextInput" name="cost" class="form-control" placeholder="Enter Cost">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3" for="TextInput">Remark</label>
                        <div class="col-md-9">
                        <textarea name="remark" class="form-control form-white"></textarea>
                                
                        </div>
                    </div>


                </div>
                <div class="border-top">
                    <div class="card-body">
                        <center><button type="submit" name="additem" class="btn btn-primary">Add to Items</button></center>
                    </div>
                </div>
            </form>
        </div>
      </div>
      
    </div>
  </div>
</div>