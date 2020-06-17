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
            <th>University Name</th>
			<th>Unit Name</th>
            <th>Addmisson date</th>
            <th>Status</th>
			<th>Passed/Fail</th>
        </thead>
        <tbody>

            <?php
                            $obj=new phpclass();
                            $limit=10;
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
                            
                            $res=$obj->resultShows($get_page,$limit);

                            $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);

                            if (isset($res) && !empty($res[0]) && !empty($res[1])) {
                                while($r=$res[0]->fetch_assoc()){
                                    if($r['universityId']==$_SESSION['uid']){
                        ?>

                <tr>
                    <td>
                    <?php 
                        $id=$r['universityId'];
                        $ress=$obj->getuniveristynameForaddmisson($id);
                        $ress=$ress->fetch_assoc();
                        echo $ress['universityName'];
                    ?></td>
                    <td>
                    <?php 
                    $id=$r['unitId'];
                    $ress=$obj->getunitnameForaddmisson($id);
                    $ress=$ress->fetch_assoc();
                    echo $ress['unitName'];
                    ?></td>
                    <td><?php echo $r['dates']?></td>
                    <td>
                        <?php
                        
                        if($r['statuss']==1){
                            echo '<span style="color:green;font-weight:bold">Approve</span>';
                        }else if($r['statuss']==2){
                            echo '<span style="color:red;font-weight:bold">Reject</span>';
                        }else{
                            echo '<span style="color:yellow;font-weight:bold">Pending</span>';
                        }
                                
                        
                        ?>
                    </td>
					<td>
                        <?php 
                            if($r['statuss']==1){?>

                                <a href="deleteApproveReject.php?passed=<?php echo $r['addmionId']?>" class="btn btn-success">Pass</a>
                                <a href="deleteApproveReject.php?fail=<?php echo $r['addmionId']?>" class="btn btn-danger">Fail</a>

                           <?php  }else{?>
                                <span class="text-center">None</span>
                           <?php }?>
						
					</td>
         
                </tr>
<?php }}}?>
        </tbody>
    </table>

    <nav aria-label="Page navigation example">
        <ul class="pagination">

            <?php for($i=1; $i<=$number_of_page; $i++){
                    ?>
                <li class="page-item mr-2">
                    <?php echo '<span class="page-link" style="cursor: pointer;" onclick="showapplieds('.$i.')">'.$i.'</span>';?>
                </li>
                <?php }?>

        </ul>
    </nav>