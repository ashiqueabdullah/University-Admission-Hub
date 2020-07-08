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
                            <th>University Name</th>
                            <th>University Code</th>
                            <th>University Image</th>
                            <th>University Division</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						
						<?php
							$obj=new phpclass();
							$search=$_GET['stdsearch'];
							$res=$obj->universitySearch($search);
							
							
							if (isset($res) && !empty($res)) {
								while($r=$res->fetch_assoc()){
							?>
                        <tr>
                           
                            <td><?php echo $r['universityName']?></td>
                            <td><?php echo $r['universityCode']?></td>
                            <td><img src="../UniversityAdmin/img/upload/<?php echo $r['universityImg']?>" alt="" height="50" width="50"></td>
                            <td><?php echo $r['division']?></td>
                            <td>
                                <a target="_blank" href="universityInformation.php?id=<?php echo $r['universityId']?>" class="btn btn-info float-right"><i class="fas fa-eye"></i> View</a>
                                <?php if ($r['statuss']!=2) { ?>
                                <a href="universityDeleteApprove.php?approve=<?php echo $r['universityId']?>" class="btn btn-success float-right mr-1"><i class="fas fa-check-circle"></i> Approve</a>
                                <?php } ?>
                                <a href="universityDeleteApprove.php?delete=<?php echo $r['universityId']?>" class="btn btn-danger float-right mr-1"><i class="fas fa-trash-alt"></i> Delete</a>

                                <?php if ($r['hold']==0) { ?>
                                <a href="universityDeleteApprove.php?hold=<?php echo $r['universityId']?>" class="btn btn-warning float-right mr-1"><i class="far fa-stop-circle"></i> Hold</a>
                                <?php }else{ ?>
                                <a href="universityDeleteApprove.php?unhold=<?php echo $r['universityId']?>" class="btn btn-secondary float-right mr-1"><i class="far fa-stop-circle"></i> Hold</a>
                                <?php }?>
                                <a class="btn btn-info float-right mb-1 mr-1" href="inbox.php?id=<?php echo $r['universityId']?>"><i class="far fa-envelope"></i> chat</a>
                            </td>
                        </tr>
                    <?php }}else{echo "Data Not found";}?>

                    </tbody>
                </table>
               
      
