<?php
    include_once("sheader.php");
    $GLOBALS['chelcks'] = 0;
?>

    <div class="p-5">
        <div class="main">
           <div class="notice">

                <ul>
                    <li><a id="mymodarator" href="#">My modarator</a></li>
                    <li><a id="pendingModaraotr" href="#">Pending Modarator</a></li>
                    <li><a id="approvedModarator" href="#">Approved Modarator</a></li>
                    <li><a id="newModarator" href="#">Add Modarator</a></li>

                </ul>
                <hr>

            <div id="mymoda">
                
            </div>

            <div id="penmoda">
                
            </div>
            <div id="apmoda">
                as
            </div>
            <div id="addmoda">
                <div class="add_modarator">
            <?php
            $phpcls=new phpclass();
            if (isset($_POST['addmoda'])) {
                $res=$phpcls->addModarator($_POST,$_FILES);
                $chelcks=$res;
            }
        ?>
        <input id="chck" style="display: none" type="text" value="<?php echo $chelcks ?>">
                <form action="" method="post" enctype="multipart/form-data" name="modaratorAddform" onsubmit="return formvalidation()">
                    
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Modarator Name</label>
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
                            <label>Modarator Email</label>
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
                            <input type="text" name="address" class="form-control" placeholder="1234 Main St" >
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
                    <p id="errorShow"></p>
                    <input type="submit" name="addmoda" class="btn btn-success w-100" value="Add Modarator">
                </form>
        </div>
            </div>
            </div>
        </div>
    </div>

    <?php
    include_once("sfooter.php");
?>