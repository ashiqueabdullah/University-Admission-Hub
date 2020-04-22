<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }

?>
  
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						
						<?php
							$obj=new phpclass();
							$search=$_GET['adminmodasearch'];
							$res=$obj->adminMOdaraSearch($search);
							
							
							if (isset($res) && !empty($res)) {
								while($r=$res->fetch_assoc()){
							?>
                        <tr>
                    <td><img src="img/upload/<?php echo $r['img']?>" alt=""></td>
                    <td>
                        <?php echo $r['name']?>
                    </td>
                    <td>
                        <?php 
                    if ($r['types']==0) {
                       echo "Modarator";
                    }else{
                        echo "Admin";
                    }
                ?>
                    </td>
                    <td>
                        <?php 
                    if ($r['status']==1) {?>
                    <a href="modaratoractive.php?deactive=<?php echo $r['morId']?>" class="btn btn-secondary"><i class="fas fa-check-circle"></i> Deaactive</a>
                     <?php }else{?>
                    <a href="modaratoractive.php?active=<?php echo $r['morId']?>"  class="btn btn-success"><i class="fas fa-check-circle"></i> Active</a>

                     <?php }?>

                

                    </td>
                    <td>
                        <a href="modaratorView.php?id=<?php echo $r['morId']?>" class="viewmod btn btn-info float-right"><i class="fas fa-eye"></i> View</a>
                        <a href="modaratorEdit.php?id=<?php echo $r['morId']?>" class=" btn btn-warning float-right mr-1">Edit</a>
                        <a href="modaratordlt.php?id=<?php echo $r['morId']?>" class=" btn btn-danger  float-right mr-1"><i class="fas fa-trash-alt"></i> Delete</a>
                    </td>
                </tr>
                    <?php }}else{echo "Data Not found";}?>

                    </tbody>
                </table>
               
      
