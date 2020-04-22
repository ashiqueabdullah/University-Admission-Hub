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
                            <th>Name</th>
                            <th>SSC GPA</th>
                            <th>SSC Bord Name</th>
                            <th>HSC GPA</th>
                            <th>HSC Bord Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						
						<?php
							$obj=new phpclass();
							$search=$_GET['wantApproveMod'];
							$res=$obj->studentSearch($search);
							
							
							if (isset($res) && !empty($res)) {
								while($r=$res->fetch_assoc()){
							?>
                        <tr>
                           
                            <td><?php echo $r['fname']?></td>
                            <td><?php echo $r['lname']?></td>
                            <td><?php echo $r['lname']?></td>
                            <td><?php echo $r['lname']?></td>
                            <td><?php echo $r['lname']?></td>
                            <td>
                                <a href="studentView.php?id=<?php echo $r['std_one']?>" class="btn btn-info float-right"><i class="fas fa-eye"></i> View</a>
                                <?php if ($r['satuss']!=2) { ?>
                                <a href="studentDeleteApprove.php?approve=<?php echo $r['std_one']?>" class="btn btn-success float-right mr-1"><i class="fas fa-check-circle"></i> Approve</a>
                                <?php } ?>
                                <a href="studentDeleteApprove.php?delete=<?php echo $r['std_one']?>" class="btn btn-danger float-right mr-1"><i class="fas fa-trash-alt"></i> Delete</a>

                                <?php if ($r['hold']==0) { ?>
                                <a href="studentDeleteApprove.php?hold=<?php echo $r['std_one']?>" class="btn btn-warning float-right mr-1"><i class="far fa-stop-circle"></i> Hold</a>
                                <?php }else{ ?>
                                <a href="studentDeleteApprove.php?unhold=<?php echo $r['std_one']?>" class="btn btn-secondary float-right mr-1"><i class="far fa-stop-circle"></i> Hold</a>
                                <?php }?>
                            </td>
                        </tr>
                    <?php }}else{echo "Data Not found";}?>

                    </tbody>
                </table>
               
      
