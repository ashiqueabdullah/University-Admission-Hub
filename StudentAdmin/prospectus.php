<?php
    include_once("sheader.php");
 ?>
    <div class="pros">
        <h3>Requirement of each university</h3>
        <div class="row">

            <?php 
                $phpcls=new phpclass();
                $res=$phpcls->getUniversity();
                if(isset($res)){
                    while($r=$res->fetch_assoc()){
            ?>

            <div class="col-md-3">
                <Button class="btn btn-info">
                    <?php echo $r['universityName']?>
                </Button>
            </div>
                    <?php }}?>
        </div>
    </div>
    <?php
    include_once("sfooter.php");
 ?>