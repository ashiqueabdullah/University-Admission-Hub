<?php
    include_once("sheader.php");
 ?>
    <div class="p-5">
       

        
        <div class="main p-5">

            

            <div class="notice">

                <ul>
                    <li><a id="allnotice" href="#">Form University</a></li>
                    <li><a id="ntfstd" href="#">For University</a></li>
                    <li><a id="ntfuni" href="#">For Student</a></li>
                    <li><a id="aprntf" href="#">Approve Notice</a></li>
                    <li><a id="addntf" href="#">Add New Notice</a></li>

                </ul>
                <hr>

            </div>
            <div id="showall">
                
            </div>

            <div id="showstd">
                
            </div>
            <div id="showuni">
                
            </div>
            <div id="apnotic">
                
            </div>
            <div id="addnt">
                <div class="box">
                    <h4>Add new notice</h4>
                    <hr>
                    <form name="adminnotice" onsubmit="return chekform();" action="" method="post" class="mt-3" enctype="multipart/form-data">
                        <?php 
                            $phpcls=new phpclass();

                            if (isset($_POST['addposts'])) {
                                $res=$phpcls->addPost($_POST,$_FILES);
                                echo $res;
                            }
                        ?>
                        <div class="form-group">
                            <label>Notice Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter notice Title">
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Image or file</label>
                                <input type="file" name="files" class="form-control-file">
                            </div>
                            <div class="form-group col-md-6">
                                <label>For whome</label>
                                <select name="whome" class="form-control">
                                    <option value="Both">Both</option>
                                    <option value="Student">Student</option>
                                    <option value="University">University</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Notice Description</label>
                            <textarea  name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <input type="submit" name="addposts" class="btn">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php
    include_once("sfooter.php");
 ?>