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
                        <th>Unit Name</th>
                        <th>Addmisson date</th>
                        <th>Passed/Fail</th>
                        </tr>
                    </thead>
                    <tbody>
						
						<?php
							$obj=new phpclass();
							$search=$_GET['resultSearch'];
							$res=$obj->resultsearchs($search);
							
							
							if (isset($res) && !empty($res)) {
								while($r=$res->fetch_assoc()){
                                    if($r['statuss']==1){
							?>
                        <tr>
                           
                            <td><?php 
                                $id=$r['universityId'];
                                $ress=$obj->getuniveristynameForaddmisson($id);
                                $ress=$ress->fetch_assoc();
                                echo $ress['universityName'];
                            ?></td>
                            
                            <td><?php 
                                $id=$r['unitId'];
                                $ress=$obj->getunitnameForaddmisson($id);
                                $ress=$ress->fetch_assoc();
                                echo $ress['unitName'];
                            ?></td>
                            <td><?php echo $r['dates']?></td>
                            <td>
                                <?php 
                                    if($r['results']==0 || $r['results']==2){?>
                                        <a href="deleteApproveReject.php?passed=<?php echo $r['addmionId']?>" class="btn btn-success">Pass</a>
                                    <?php }else{?>
                                        <a href="deleteApproveReject.php?fail=<?php echo $r['addmionId']?>" class="btn btn-danger">Fail</a>
                                    <?php }?>
                            
                            </td>
                            
                        </tr>
                    <?php }}}else{echo "Data Not found";}?>

                    </tbody>
                </table>
               
      
