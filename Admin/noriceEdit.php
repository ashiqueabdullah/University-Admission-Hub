<?php
    include_once("sheader.php");
 ?>
    <div id="noticeEdit">
                <div class="box">
                    <h4>Add new notice</h4>
                    <hr>

                    <form action="" method="post" class="mt-3" enctype="multipart/form-data">
                        <?php 
                        if (isset($_POST['addposts'])) {
                            $id=$_GET['id'];
                            $phpcls=new phpclass();
                            $res=$phpcls->editNotice($_POST,$_FILES,$id);
                            
                        }
                    ?>
                        <?php
                        if ($_GET['id']) {
                            $id=$_GET['id'];
                            $phpcls=new phpclass();
                            $res=$phpcls->getNoticeInformationAdminPanale($id);
                            if ($res) {
                                while ($r=$res->fetch_assoc()) {
                                    

                        ?>
                        <div class="form-group">
                            <label>Notice Title</label>
                            <input type="text" name="title" class="form-control" value="<?php echo $r['noticeTitle']?>">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Image or file</label>
                                <h1><img src="img/upload/<?php echo $r['file']?>" alt="" width="100"></h1>
                                <input type="file" name="files" class="form-control-file">
                            </div>
                            <div class="form-group col-md-6">
                                <label>For whome</label>
                                <select name="whome" class="form-control">
                                    <option>Choose...</option>
                                    <option <?php echo ($r['whome']=="both")?"selected":""?> value="both">Both</option>
                                    <option <?php echo ($r['whome']=="student")?"selected":""?> value="student">Student</option>
                                    <option <?php echo ($r['whome']=="university")?"selected":""?> value="university">University</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Notice Description</label>
                            <textarea  name="description" class="form-control" rows="3"><?php echo $r['noticeMessage']?></textarea>
                        </div>
                    <?php }}}?>
                        <input type="submit" name="addposts" class="btn">
                    </form>
                </div>
            </div>

                <?php
    include_once("sfooter.php");
 ?>