<?php
	include_once("sheader.php");
?>






<div class="vmd">
    <div class="inner">
        

        <?php
            if ($_GET['id']) {
                $id=$_GET['id'];
            }
            $phpcls=new phpclass();
            $res=$phpcls->getModarator($id);
            if ($res) {
                while ($r=$res->fetch_assoc()) {
                    
                
            
        ?>
        <h5 class="text-center">Information About <?php echo $r['name']?></h5>
        <hr>
        <center>

            <?php 
                if($r['uniid']==NULL){ ?>
                    <img class="img-thumbnail mb-2" src="img/upload/<?php echo $r['img']?>" alt="" width="300">
                <?php }else{?>
                    <img class="img-thumbnail mb-2" src="../UniversityAdmin/img/upload/<?php echo $r['img']?>" alt="" width="300">
               <?php }
            ?>
            </center>


        <div class="row">
            <div class="col-md-6">
                <p class="mt-3"><strong>Name: </strong><?php echo $r['name']?></p>
                
                <p class="mt-3"><strong>Address: </strong><?php echo $r['adress']?></p>
                <p class="mt-3"><strong>City: </strong><?php echo $r['city']?></p>
                <p class="mt-3"><strong>Zip: </strong><?php echo $r['zip']?></p>
            </div>
            <div class="col-md-6">
                <p class="mt-3"><strong>Phone: </strong><?php echo $r['phone']?></p>
                <p class="mt-3"><strong>Type: </strong>

 <?php 
                   echo $r['types']
                ?>

                </p>
                <p class="mt-3"><strong>Email: </strong><?php echo $r['email']?></p>
                <p class="mt-3"><strong>Password: </strong><?php echo $r['pass']?></p>
            </div>
        </div>
        
    <?php }}?>
    </div>
</div>

    <?php
    include_once("sfooter.php");
?>