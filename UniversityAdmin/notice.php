<?php
    include_once("sheader.php");
 ?>


    <div class="p-5">
        <div class="notice">
            <div class="row">
                <div class="col-md-9">
                    <ul>
                        <li><a id="noticeallbtn" href="#">Notice I Created</a></li>
                        <li><a id="noticeformebtn" href="#">Notice For Me</a></li>
                        <li><a id="noticeaddbtn" href="#">Add New Notice</a></li>    
                    </ul>
                    </div>
                <div class="col-md-3">
                    <input id="noticeSearch" class="p-4 form-control form-control-sm mr-3 w-100 " type="text" placeholder="Search...."
                        name="stdSearch">
                </div>
            </div>
            <hr>
            <div id="NoticeAll">
                <p>All Notice</p>
            </div>
            <div id="NoticeForMe">
                <p>For Me</p>
            </div>
            <div id="NoticeAdd">
            <h4>Add new notice</h4>
                    <hr>
                    <?php 
                        $phpcls=new phpclass();
                         if (isset($_POST['addNoticeByuniversity'])) {
                            $res=$phpcls->AddNoticeByUniversity($_POST,$_FILES);
                            
                        }
                    ?>
                    <form action="" method="post" class="mt-3" enctype="multipart/form-data">
                       
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
                                    <option selected>Choose...</option>
                                    <option value="0">For All</option>
                                    <option value="1">Only Student</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Notice Description</label>
                            <textarea  name="description" class="form-control" rows="3"></textarea>
                        </div>
                        <input type="submit" name="addNoticeByuniversity" class="btn w-100 btn-success">
                    </form>
            </div>
        </div>
    </div>

    <?php
    include_once("sfooter.php");
 ?>