<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }

?>
  
                 <div class="row">
						
						<?php
							$obj=new phpclass();
							$search=$_GET['wantApproveModa'];
							$res=$obj->adminMOdaraSearch($search);
							
							
							if (isset($res) && !empty($res)) {
								while($r=$res->fetch_assoc()){
							?>
               
                <div class="col-md-3">
                    <div class="box">
                        <center>
                            <img src="img/upload/<?php echo $r['img']?>" alt="">
                            <h5><?php echo $r['name']?></h5>
                            <p>North East University</p>
                            <h5>
                            <a href="modaratorViewUniversity.php?id=<?php echo $r['morId']?>" class="viewmod btn btn-info "> <i class="fas fa-eye"></i> View</a>
                            <a href="modaratordlt.php?id=<?php echo $r['morId']?>" class=" btn btn-danger   mr-1"><i class="fas fa-trash-alt"></i> Delete</a>
                            <a href="modaratordlt.php?id=<?php echo $r['morId']?>" class=" btn btn-success   mt-1"><i class="fas fa-trash-alt"></i> Approve</a>
                        </h5>
                        </center>
                    </div>
                </div>
                       
                    <?php }}else{echo "Data Not found";}?>

                  </div>   
               
      
