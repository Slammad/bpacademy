<?php
if(isset($_GET['candidates'])){
    $query = "SELECT * FROM `admissions`";
    $candidates = $conn->query($query);
?>

<div class="row">
    





    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title m-b-0">Applied Pupils</h5>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>

                            <th scope="col">S/N</th>
                            <th scope="col">Full Name</th>
                            <th scope="col">State</th>
                            <th scope="col">Tribe</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                            <th scope="col"></th>
                      
                           
                        </tr>
                    </thead>
                    <tbody class="customtable">
                    <?php while($candidate = mysqli_fetch_assoc($candidates)){?>
                        <tr>

                           <td><?=$candidate['id']?></td>
                           <td><?=$candidate['full_name']?></td>
                           <td><?=$candidate['state']?></td>
                           <td><?=$candidate['tribe']?></td>
                           <td><span class="printed">printed</span></td>
                           <td> <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?=$candidate['id'];?>">
                                    <button type="submit" name="deletecandidate" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                </form></td>
                           <td><button class="btn btn-info"><i class="fas fa-print"></i></button></td>
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
 if(isset($_POST['deletecandidate'])){
    $id=$_POST['id'];

    $query = "DELETE FROM `admissions` WHERE `id`='$id'";
    $delete = $conn->query($query);

    if($delete){
       
        echo "<script>window.location.href = window.location.href;</script>";
    }
 }
?>