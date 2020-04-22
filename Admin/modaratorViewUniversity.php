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
        <center><img class="img-thumbnail mb-2" src="img/upload/<?php echo $r['img']?>" alt="" width="300"></center>
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
                    if ($r['types']==0) {
                       echo "Modarator";
                    }else{
                        echo "Admin";
                    }
                ?>

                </p>
                <p class="mt-3"><strong>Email: </strong><?php echo $r['email']?></p>
                <p class="mt-3"><strong>Password: </strong><?php echo $r['pass']?></p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="modaratoractive.php?active=<?php echo $r['morId']?>" class=" btn btn-warning  mr-1">Edit</a>
            </div>
            <div class="col-md-6">
                <a href="modaratordlt.php?id=<?php echo $r['morId']?>" class=" btn btn-danger  float-right mr-1">Delete</a>
            </div>




                        


        </div>
    <?php }}?>
    </div>
</div>

    <?php
    include_once("sfooter.php");
?>