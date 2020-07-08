<?php
    include_once("sheader.php");
    $GLOBALS['check'] = 0;
 ?>


    <div class="p-5">
        <div class="notice">
            <div class="row">
                <div class="col-md-9">
                    <ul>
                        <li><a id="modaratorallbtn" href="#">All Madarator</a></li>
                        <li><a id="modaratorapprove" href="#">Approved Modarator</a></li>
                        <li><a id="modaratoradd" href="#">Add New Modarator</a></li>    
                    </ul>
                    </div>
                <div class="col-md-3">
                    <input id="modaratorunisearch" class="p-3 form-control form-control-sm mr-3 w-100 " type="text" placeholder="Search...."
                        name="stdSearch">
                </div>
            </div>
            <hr>
            <div id="modaratorallshows">
                <p>All modarator</p>
            </div>
            <div id="modaratorapproveshows">
                <p>For approve</p>
            </div>
            <div id="modaratoraddsow">

             <?php
            $phpcls=new phpclass();
                if (isset($_POST['addmoda'])) {
                    $res=$phpcls->addModaratorFormUniversity($_POST,$_FILES);
                    $check=$res;
                }
            ?>
                <form name="modaaddform" action="" method="post" enctype="multipart/form-data" onsubmit="return adminFormvalid()">
                    <input style="display: none;" type="text" name="mdcceck" id="mdcceck" value="<?php echo $check ?>">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input type="text" name="modaname" class="form-control" placeholder="Enter Name" >
                        </div>
                        <div class="form-group col-md-6">
                            <label>Upload Image</label>
                            <br>
                            <input type="file" name="modaimg" class="file-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="text" name="modaemail" class="form-control" placeholder="Enter Email" >
                        </div>
                        <div class="form-group col-md-6">
                            <label>Password</label>
                            <input type="password" name="modapass" class="form-control" placeholder="Password" >
                        </div>
                        <div class="form-group col-md-6">
                            <label>Phone</label>
                            <input type="text" name="modaphone" class="form-control" placeholder="Enter Modarator phoen Number" >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputState">Type</label>
                            <select name="modatype" class="form-control" >
                                <option value="Modarator">Modarator</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter Address" >
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label>City</label>
                            <input type="text" name="city" class="form-control" >
                        </div>

                        <div class="form-group col-md-6">
                            <label>Zip</label>
                            <input type="text" name="zip" class="form-control" >
                        </div>
                    </div>

                    <button type="submit" name="addmoda" class="btn btn-success w-100">Add Modarator</button>
                </form>
               
            </div>
        </div>
    </div>

    <?php
    include_once("sfooter.php");
 ?>