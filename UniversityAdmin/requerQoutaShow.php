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
        <th>Quta Name</th>
                                    <th>Quta Seat</th>
                                    <th>Action</th>
        </thead>
        <tbody>

            <?php
                            $obj=new phpclass();
                            $limit=5;
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

                            $res=$obj->gequta($get_page,$limit);

                            $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);

                            if (isset($res) && !empty($res[0]) && !empty($res[1])) {
                                while($r=$res[0]->fetch_assoc()){
                        ?>

                <tr>
                    <td>
                        <?php echo $r['quotaName']?>
                    </td>
                    <td>
                        <?php echo $r['soutaseat']?>
                    </td>
                    <td>
                        <a href="deleteApproveReject.php?quatDelete=<?php echo $r['quotaId']?>" class="btn btn-danger mb-1 w-100"><i class="fas fa-trash-alt"></i> Delete</a>
                        <a href="requermentQutaEdit.php?id=<?php echo $r['quotaId']?>" class="btn btn-warning mb-1 w-100"><i class="far fa-edit"></i> Edit</a>
						
						<?php if($r['statuss']==1){ ?> 
						<a href="deleteApproveReject.php?qutadeactive=<?php echo $r['quotaId']?>" class="btn btn-success mb-1 w-100"><i class="far fa-edit"></i> Active</a>
						<?php }else{ ?> 
						<a href="deleteApproveReject.php?quataactive=<?php echo $r['quotaId']?>" class="btn btn-secondary mb-1 w-100"><i class="far fa-edit"></i> Deactive</a>
						<?php } ?>
						
						
						
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
                    <?php echo '<span class="page-link" style="cursor: pointer;" onclick="getqutas('.$i.')">'.$i.'</span>';?>
                </li>
                <?php }?>

        </ul>
    </nav>