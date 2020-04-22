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
                        <th>Notice Title</th>
                        <th>Publihs date</th>
                        <th>Status</th>
                        <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
						
						<?php
							$obj=new phpclass();
							$search=$_GET['modaratorSearch'];
							$res=$obj->modaratorSearch($search);
							
							
							if (isset($res) && !empty($res)) {
								while($r=$res->fetch_assoc()){
							?>
                        <tr>
                           
                            <td><?php echo $r['noticeTitle']?></td>
                            <td><?php echo $r['dates']?></td>
                            <td><?php 
                        if($r['statuss']==0){
                            echo "<span style='color:#E0A800'>Pending</span>";
                        }else if($r['statuss']==1){
                            echo "<span style='color:#1E7E34'>Approve</span>";
                        }else if($r['statuss']==2){
                            echo "<span style='color:#C82333'>Reject</span>";
                        }
                    ?></td>
                            <td>
                                <a href="noticeView.php?id=<?php echo $r['noticeId']?>" class="viewmod btn btn-info float-right mr-1"><i class="fas fa-eye"></i> View</a>
                                <a href="noticeEdit.php?id=<?php echo $r['noticeId']?>" class="viewmod btn btn-warning float-right mr-1"><i class="fas fa-eye"></i> Edit</a>
                                <a href="noticeDelete.php?id=<?php echo $r['noticeId']?>" class="viewmod btn btn-danger float-right mr-1"><i class="fas fa-eye"></i> Delete</a>
                            </td>
                            
                        </tr>
                    <?php }}else{echo "Data Not found";}?>

                    </tbody>
                </table>
               
      
