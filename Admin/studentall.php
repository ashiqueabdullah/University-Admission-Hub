<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }

?>
  
                <table id="load" class="table table-bordered">
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
							$limit=2;
							if (isset($_GET['page'])) {
								$get_page=$_GET['page'];
								if ($get_page=="" || $get_page=="1") {
									$get_page=0;
								}else{
									$get_page=($get_page*$limit)-$get_page;
								}
							}else{
								$get_page=0;
							}
							
							$res=$obj->getAllStudent($get_page,$limit);
							$GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);
							
							if (isset($res) && !empty($res[0]) && !empty($res[1])) {
								while($r=$res[0]->fetch_assoc()){
						?>
                        <tr>
                           
                            <td><?php echo $r['lname']?></td>
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
                    <?php }}?>

                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                   
                        <?php for($i=1; $i<=$number_of_page; $i++){
                    ?>
                            <li class="page-item mr-2">
                                <?php echo '<span class="page-link" style="cursor: pointer;" onclick="loadstudent('.$i.')">'.$i.'</span>';?>
                            </li>
                            <?php }?>
                            

                    </ul>
                </nav>
      
