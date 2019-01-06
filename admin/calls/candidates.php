<?php
if(isset($_GET['candidates'])){
    $query = "SELECT * FROM `admissions`";
    $candidates = $conn->query($query);
?>

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
                            <th scope="col">Full Name</th>
                            <th scope="col">State</th>
                            <th scope="col">Tribe</th>
                      
                           
                        </tr>
                    </thead>
                    <tbody class="customtable">
                    <?php while($candidate = mysqli_fetch_assoc($candidates)){?>
                        <tr>

                           <td><?=$candidate['id']?></td>
                           <td><?=$candidate['full_name']?></td>
                           <td><?=$candidate['state']?></td>
                           <td><?=$candidate['tribe']?></td>
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

 
?>