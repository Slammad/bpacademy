<?php
 if(isset($_GET['contents'])){
  $contentq = "SELECT * FROM `contents` WHERE `id`='1'";
  $runq = $conn->query($contentq);
  $content = mysqli_fetch_assoc($runq);
?>
<div class="row">
<div class="col-md-8 offset-md-2">
<form action="" method="POST">

    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">MISSION</h4>
            
        </div>
        
        <div class="comment-widgets scrollable">
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row m-t-0">
              
                <div class="comment-text w-100">
                <textarea name="mission"><?=$content['mission']?></textarea>
		        <script>
			        CKEDITOR.replace( 'mission' );
	        	</script>
                   
                </div>
            </div>
            <hr>
     

        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">VISSION</h4>
        </div>
        
        <div class="comment-widgets scrollable">
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row m-t-0">
              
                <div class="comment-text w-100">
                 
                <textarea name="vision"><?=$content['vision']?></textarea>
		        <script>
			        CKEDITOR.replace( 'vision' );
	        	</script>
                    
                </div>
            </div>
            <hr>
     

        </div>
    </div>


    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">About</h4>
        </div>
        
        <div class="comment-widgets scrollable">
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row m-t-0">
              
                <div class="comment-text w-100">
                 
                <textarea name="about"><?=$content['about']?></textarea>
		        <script>
			        CKEDITOR.replace( 'about' );
	        	</script>
                    
                </div>
            </div>
            <hr>
     

        </div>
    </div>
    <center><button type="submit" name="update" class="btn btn-primary">Update Contents</button></center><br>
    </form>
    </div>
 </div>
</div>
<?php

if(isset($_POST['update'])){
    $vission = $_POST['vision'];
    $mission = $_POST['mission'];
    $about = $_POST['about'];

    $query = "UPDATE `contents` SET `vision`='$vission',`mission`='$mission', `about`='$about' WHERE `id`='1'";
    $runit = $conn->query($query);

    if($runit){
        echo "<script>console.log('success')</script>";
        echo "<script>window.location.href = window.location.href;</script>";
    }
}
 }


?>