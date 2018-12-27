<?php
$fetchnews = "SELECT * FROM `news`";
$getnews = $conn->query($fetchnews);


if(isset($_GET['news'])){
 
?>
<a href="javascript:void(0)" data-toggle="modal" data-target="#add-news" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
    <i class="ti-plus"></i> Add News
</a><br><br>

<div class="col-md-8 offset-md-2">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title m-b-0">ALL NEWS</h4>
        </div>
        <?php while($posted = mysqli_fetch_assoc($getnews)){ ?>
        <div class="comment-widgets scrollable">
            <!-- Comment Row -->
            <div class="d-flex flex-row comment-row m-t-0">
                <div class="p-2"><img src="assets/assets/images/users/1.jpg" alt="user" width="50" class="rounded-circle"></div>
                <div class="comment-text w-100">
                    <h6 class="font-medium"><?=strtoUpper($posted['title'])?></h6>
                    <span class="m-b-15 d-block"><script>

text_truncate = function(str, length, ending) {
    if (length == null) {
      length = 50;
    }
    if (ending == null) {
      ending = '...';
    }
    if (str.length > length) {
      return str.substring(0, length - ending.length) + ending;
    } else {
      return str;
    }
  };

                        document.write(text_truncate('<?=$posted['content']?>'))
                    </script>
                    </span>
                    <div class="comment-footer">
                        <span class="text-muted float-right">April 14, 2016</span>
                      
                        <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?=$posted['id'];?>">
                                    <button type="submit" name="deletepost" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                        
                    </div>
                </div>
            </div>
            <hr>
        <?php } ?>
           

        </div>
    </div>
</div>

<div class="modal fade none-border" id="add-news">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>News</strong> Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <label class="control-label">News Heading</label>
                            <input class="form-control form-white" placeholder="News Heading" type="text" id="title" name="title" />
                            <input type="hidden" name="news_id" id="news_id">
                        </div>
                        <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Contents</h4>
                                <!-- Create the editor container -->
                                <textarea name="content" id="content" class="form-control form-white"></textarea>
                                <script>
		                    	CKEDITOR.replace( 'content' );
		                        </script>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>
                    <div class="modal-footer">
                     <button type="submit" name="postnews" class="btn btn-danger" >Post</button>
               
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>


<?php
 }

 if(isset($_POST['deletepost'])){
    $id=$_POST['id'];

    $query = "DELETE FROM `news` WHERE `id`='$id'";
    $delete = $conn->query($query);

    if($delete){
       
        echo "<script>window.location.href = window.location.href;</script>";
    }

}
if(isset($_POST['postnews'])){
    $title=$_POST['title'];
    $content=$_POST['content'];

    $check = "SELECT * FROM `news` WHERE `content` = '$content'";
    $checkrun = $conn->query($check);
    $rowcount =    $checkrun->num_Rows;

    if($rowcount == 0 ){
        $newsquery = "INSERT INTO `news`(`id`,`title`,`content`,`img_path`) VALUES (NULL,'$title','$content','this.jpg')";
        $runnews = $conn->query($newsquery);
        if($runnews){
            echo "<script>console.log('success')</script>";
            echo "<script>window.location.href = window.location.href;</script>";
        }
    }else{
        echo "<script>console.log('exists')</script>";
    }
}
  
   
 
?>