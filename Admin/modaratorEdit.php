<?php
	include_once("sheader.php");
?>






<div class="editmodarator">

    <h4 class="text-center">Edit Modarator</h4>
    
    <hr>
     
        <form  method="post" enctype="multipart/form-data">
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
                <div class="form-group col-md-6">
                    <label>Modarator Name</label>
                    <input type="text" name="modaname"  class="form-control" value="<?php echo $r['name']?>">
                </div>
                <div class="form-group col-md-6">
                    <label>Upload Image</label>
                    <input type="file" name="modaimg" value="<?php echo $r['img']?>" class="file-control">
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
                        <option selected>Choose...</option>
                        <option>Admin</option>
                        <option>Modarator</option>
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

            <button type="submit" name="editmd" class="btn btn-warning">Edit Modarator</button>
        </form>
    <?php }}?>
    
    </div>

<?php
    $phpcls=new phpclass();

    if (isset($_POST['editmd'])) {
        $res=$phpcls->editModarator($_POST,$_FILES,$_GET['id'],$img);
    }
?>
    <?php
    include_once("sfooter.php");
?>
