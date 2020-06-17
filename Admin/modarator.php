<?php
    include_once("sheader.php");
?>

    <div id="outer">
        <div id="cros">X</div>
        <div class="add_modarator">
            <?php
            $phpcls=new phpclass();
            if (isset($_POST['addmoda'])) {
                $res=$phpcls->addModarator($_POST,$_FILES);
            }
        ?>
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

    <div class="modarator pt-3 pl-5 pb-5">

        <div id="">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="myModarator">
                        <div class="row">
                            <div class="col-md-5">
                                <h5 class="pb-2 mt-1">All My Modarator and Admin</h5>
                            </div>
                            <div class="col-md-5 mb-1">
                                    
                                    <div class="input-group md-form form-sm form-2 pl-0">
                                    <input id="mymodasearch" class="form-control my-0 py-1 red-border" type="text" placeholder="Search Modarator">
                                    <div class="input-group-append">
                                        <span class="input-group-text red lighten-3" id="basic-text1"><i style="color: #798BFF" class="fas fa-search text-grey"
                        aria-hidden="true"></i></span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-2">
                                <a style="color: white" href="#" id="admod" class="asd btn btn-info float-right"><i class="fas fa-plus-square"></i> <span style="color: white">Modarator</span></a>
                            </div>
                        </div>

                        <div id="amidnMOdaratoList">

                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="wantapprove mt-5">

            <div class="row pb-1">
                <div class="col-md-7">
                    <h5>Modarator Want to Approve</h5>
                </div>
                
            </div>

            <hr class="pb-3">
            




                <div id="approveModarator">
                    
                </div>




                
        </div>

        <div class="allModarator">
            <div class="row pb-1">
                <div class="col-md-7">
                    <h5>All Modarator List</h5>
                </div>
                <div class="col-md-5">
                    <div class="form-row">

                        <div class="col-md-8 offset-md-4">
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input id="modaratorAllList" class="form-control my-0 py-1 red-border" type="text" placeholder="Search Modarator">
                                <div class="input-group-append">
                                    <span class="input-group-text red lighten-3" id="basic-text1"><i style="color: #798BFF" class="fas fa-search text-grey"
                        aria-hidden="true"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="modaratorAll">
                
            </div>
        </div>

    </div>

    <?php
    include_once("sfooter.php");
?>