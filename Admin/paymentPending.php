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
                            <th>Payment Method</th>
                                <th>Ammount</th>
                                <th>Date</th>
                                <th>Status</th>
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
                            
                            $res=$obj->getPaymentHistoryForAdminPending($get_page,$limit);
                            $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);
                            if (isset($res) && !empty($res[0]) && !empty($res[1])) {
                                while($r=$res[0]->fetch_assoc()){
                        ?>
                        <tr>
                                <td><?php echo $r['method']?></td>
                                <td><?php echo $r['amount']?></td>
                                <td><?php echo $r['reDate']?></td>
                                <td><span style="color: red">Pending</span> </td>
                              <td>

                                       <a href="paymentDeleteApprove.php?approve=<?php echo $r['payId']?>" class="btn btn-success float-right mr-1"><i class="fas fa-check-circle"></i> Approve</a>
                                        <a href="paymentDeleteApprove.php?reject=<?php echo $r['payId']?>" class="btn btn-danger float-right mr-1"><i class="fas fa-trash-alt"></i> Reject</a> 
                                <a href="paymentView.php?view=<?php echo $r['payId']?>" class="btn btn-info float-right mr-1"><i class="fas fa-eye"></i> View</a> 
                
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
                                <?php echo '<span class="page-link mr-2" style="cursor: pointer;" onclick="paymentpending('.$i.')">'.$i.'</span>';?>
                            </li>
                            <?php }?>
                    </ul>
                </nav>
      
