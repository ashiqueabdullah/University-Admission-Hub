<?php
    include_once("sheader2.php");
    $id=$_GET['id'];
 ?>

<div class="universityeditProfile">
    <div class="inner">
        
        <?php 
                $phpcls=new phpclass();
                $res=$phpcls->getUniversityInfo($id); if(isset($res)){ while($r=$res->fetch_assoc()){ ?>
                <h2 class="text-center mb-4">Edit <?php echo $r['universityName']?> Information</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <?php 
                if(isset($_POST['add'])){
                    $ress=$phpcls->edituniversity($id,$_POST,$_FILES); } ?>
            <center>
                <img class="img-thumbnail" src="img/upload/<?php echo $r['universityImg']?>" alt="" height="300" />
            </center>
            <label class="mb-0 mt-2">Chose New image</label>
            <input type="file" class="file-control mt-3" name="image" />
            <div class="row">
                <div class="col-md-12 mt-3">
                    <label>Enter University Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $r['universityName']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <label>Enter University Code</label>
                    <input type="text" class="form-control" name="code" value="<?php echo $r['universityCode']?>" />
                </div>
                
        <div class="col-md-6 mt-3">
          <label><span style="color:red;">*</span>Select Divisition</label>
            <select id="cnt" name="division" class="form-control mt-0">
               <option <?php if($r['city']=="Dhaka"){ echo "selected";}?> value="Dhaka">Dhaka </option>
               <option <?php if($r['city']=="Chittagong"){ echo "selected";}?>  value="Chittagong">Chittagong</option>
               <option <?php if($r['city']=="Rajshahi"){ echo "selected";}?>  nvalue="Rajshahi">Rajshahi</option>
               <option <?php if($r['city']=="Khulna"){ echo "selected";}?>  namvalue="Khulna">Khulna</option>
               <option <?php if($r['city']=="Mymensingh"){ echo "selected";}?>  value="Mymensingh">Mymensingh</option>
               <option <?php if($r['city']=="Sylhet"){ echo "selected";}?>  value="Sylhet">Sylhet</option>
            </select>
         </div>
                <div class="col-md-6 mt-3">
                    <label>Enter City</label>
                    <input type="text" class="form-control" name="city" value="<?php echo $r['city']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <label>Enter Zip</label>
                    <input type="text" class="form-control" name="zip" value="<?php echo $r['zip']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <label>Enter Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $r['pohne']?>" />
                </div>
                <div class="col-md-6 mt-3">
                    <label>Enter Email</label>
                    <input type="text" class="form-control" name="emil" value="<?php echo $r['email']?>" />
                </div>

                <div class="col-md-6 mt-3">
                    <label>Enter google latitude</label>
                    <input type="text" class="form-control" name="lat" value="<?php echo $r['lat']?>" />
                </div>

                <div class="col-md-6 mt-3">
                    <label>Enter google longaitude</label>
                    <input type="text" class="form-control" name="lng" value="<?php echo $r['lng']?>" />
                </div>

            </div>
            <input type="submit" class="btn w-100 mt-3 mycalorbtn" name="add" />
            <?php }} ?>
        </form>
    </div>
</div>

<?php
    include_once("sfooter.php");
?>
