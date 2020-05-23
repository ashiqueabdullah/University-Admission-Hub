<?php
    include_once("sheader2.php");
    $id=$_GET['id'];
 ?>

<div class="universityeditProfile">
    <div class="inner">
        <h1 class="text-center">Edit North East University Information</h1>
        <?php 
                $phpcls=new phpclass();
                $res=$phpcls->getUniversityInfo($id); if(isset($res)){ while($r=$res->fetch_assoc()){ ?>
        <form action="" method="post" enctype="multipart/form-data">
            <?php 
                if(isset($_POST['add'])){
                    $ress=$phpcls->edituniversity($id,$_POST,$_FILES); } ?>
            <center>
                <img class="img-thumbnail" src="img/upload/<?php echo $r['universityImg']?>" alt="" height="300" />
            </center>
            <input type="file" class="file-control mt-3" name="image" />
            <div class="row">
                <div class="col-md-6 mt-3">
                    <h5>Enter University Code</h5>
                    <input type="text" class="form-control" name="code" value="<?php echo $r['universityCode']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <h5>Enter University Name</h5>
                    <input type="text" class="form-control" name="name" value="<?php echo $r['universityName']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <h5>Enter Divisition</h5>
                    <input type="text" class="form-control" name="disision" value="<?php echo $r['division']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <h5>Enter District</h5>
                    <input type="text" class="form-control" name="district" value="<?php echo $r['district']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <h5>Enter City</h5>
                    <input type="text" class="form-control" name="city" value="<?php echo $r['city']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <h5>Enter Zip</h5>
                    <input type="text" class="form-control" name="zip" value="<?php echo $r['zip']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <h5>Enter Phone</h5>
                    <input type="text" class="form-control" name="phone" value="<?php echo $r['pohne']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <h5>Enter Email</h5>
                    <input type="text" class="form-control" name="emil" value="<?php echo $r['email']?>" />
                </div>
            </div>
            <input type="submit" class="btn btn-warning w-100 mt-3" name="add" />
            <?php }} ?>
        </form>
    </div>
</div>

<?php
    include_once("sfooter.php");
?>
