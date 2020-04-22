<?php
    include_once("sheader.php");
 ?>

   
   <div class="p-5">
       <div class="noticeView">
       <h4>Edit Notice</h4>
                    <hr>
                    
                    <form action="" method="post" class="mt-3" enctype="multipart/form-data">
                    <?php
                        $id=$_GET['id'];
                        $phpcls=new phpclass();
                        if (isset($_POST['addNoticeByuniversity'])) {
                            $res=$phpcls->noticeEdit($_POST,$_FILES,$id); 
                        }
                        $res=$phpcls->getNoticeInformationAdminPanale($id);
                        if(!empty($res)){
                            while($r=$res->fetch_assoc()){?>
                        <div class="form-group">
                            <label>Notice Title</label>
                            <input type="text" value="<?php echo $r['noticeTitle']?>" name="title" class="form-control" placeholder="Enter notice Title">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Image or file</label>
                                <img src="img/upload/<?php echo  $r['file']?>" alt="" width="100">
                                <input type="file" name="files" class="form-control-file">
                            </div>
                            <div class="form-group col-md-6">
                                <label>For whome</label>
                                <select  name="whome" class="form-control">
                                    <option >Choose...</option>
                                    <option <?php if($r['whome']==0)echo "selected"?> value="0">For All</option>
                                    <option <?php if($r['whome']==1)echo "selected"?> value="1">Only Student</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Notice Description</label>
                            <textarea   name="description" class="form-control" rows="3"><?php echo $r['noticeMessage']?></textarea>
                        </div>
                        <?php }}?>
                        <input type="submit" name="addNoticeByuniversity" class="btn w-100 btn-warning">
                    </form>
   </div>

<?php
    include_once("sfooter.php");
   ?>
    