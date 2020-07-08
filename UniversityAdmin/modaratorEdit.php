<?php
	include_once("sheader.php");
    $GLOBALS['editchek'] = 0;
?>



    <div class="p-5">
    <div class="noticeView p-5">
    <h4 class="text-center">Edit Modarator/Admin</h4>
    
    <hr>
        <?php
           
            $phpcls=new phpclass();
            if (isset($_POST['editmd'])) {
                 $res=$phpcls->editModaratorForUniversity($_POST,$_FILES,$_GET['id']);
                 $editchek=$res;
            }

        ?>
        
        <form name="modaaddform" onsubmit="return adminFormvalid2()"  method="post" enctype="multipart/form-data">
            <?php
            if ($_GET['id']) {
                $id=$_GET['id'];
            }
            $phpcls=new phpclass();
            $res=$phpcls->getModarator($id);
            if ($res) {
                while ($r=$res->fetch_assoc()) {
                    $GLOBALS['img'] = $r['img']; 
        ?>
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Upload Image</label><br>
                    
                    <input type="file" name="modaimgg" class="file-control"><br>
                    <img src="img/upload/<?php echo $r['img']?>" alt="" width="200" height="200">
                </div>
                <div class="form-group col-md-12">
                    <label>Modarator Name</label>
                    <input type="text" name="modaname"  class="form-control" value="<?php echo $r['name']?>">
                </div>

            </div>
            <div class="form-row">
				<div class="form-group col-md-6">
                    <label>Modarator Email</label>
                    <input type="text" name="modaemail" class="form-control"  value="<?php echo $r['email']?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Password</label>
                    <input type="text" name="modapass" class="form-control"  value="<?php echo $r['pass']?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Phone</label>
                    <input type="text" name="modaphone" class="form-control" value="<?php echo $r['phone']?>">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputState">Type</label>
                    <select name="modatype" class="form-control">
                        
                        <option <?php echo ($r['types'] == 'Modarator')?"selected":"" ?> value="Modarator">Modarator</option>
                        <option <?php echo ($r['types'] == 'Admin')?"selected":"" ?> value="Admin">Admin</option>
                    </select>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" value="<?php echo $r['adress']?>">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" value="<?php echo $r['city']?>">
                </div>

                <div class="form-group col-md-6">
                    <label>Zip</label>
                    <input type="text" name="zip" class="form-control" value="<?php echo $r['zip']?>">
                </div>
            </div>

            <button type="submit" name="editmd" class="btn btn-warning w-100">Edit Modarator</button>
        </form>
    <?php }}?>
    </div>


</div>


<?php
    

    include_once("sfooter.php");
?>
