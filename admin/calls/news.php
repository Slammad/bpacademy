<?php
$fetchnews = "SELECT * FROM `news`";
$getnews = $conn->query($fetchnews);


 if(isset($_GET['news'])){
 
?>
<a href="javascript:void(0)" data-toggle="modal" data-target="#add-new-event" class="btn m-t-20 btn-info btn-block waves-effect waves-light">
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
                    <span class="m-b-15 d-block"><?=$posted['content']?> </span>
                    <div class="comment-footer">
                        <span class="text-muted float-right">April 14, 2016</span>
                        <button type="button" name="edit" id="<?php echo $row['id']; ?>" class="btn btn-cyan btn-xs edit">Edit</button>
                     
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </div>
                </div>
            </div>
            <hr>
        <?php } ?>
           

        </div>
    </div>
</div>

<!-- BEGIN MODAL -->
<div class="modal none-border" id="my-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add Event</strong></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Add Category -->
<div class="modal fade none-border" id="add-new-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>News</strong> Post</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="" method="POST">
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
                                <textarea name="editor1" id="editor1" class="form-control form-white"></textarea>
                                <script>
		                    	CKEDITOR.replace( 'editor1' );
		                        </script>
                            </div>
                        </div>
                    </div>
                </div>

                    </div>
                    <div class="modal-footer">
                <button type="submit" name="post" class="btn btn-danger" >Post</button>
                <input type="submit" name="insert" id="insert" value="insert" class="btn btn-secondary">
                <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Close</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $(document).on('click', '.edit',function(){
            let news_id= $(this).attr("id");
            $.ajax({
                url:"dashboard.php?news=news.php"
                method:"POST",
                data:{news_id:news_id},
                dataType:"json",
                success:function(data){
                    $('#title').val(data.title);
                    $('#editor1').val(data.editor1);
                    $('#news_id').val(data.news_id);
                    $('#insert').val("update");
                    $('#add-new-event').modal('show');
                }
            });
        })
    });
</script>

<?php
 }

 if(isset($_POST['post'])){
    $title=$_POST['title'];
    $content=$_POST['editor1'];

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