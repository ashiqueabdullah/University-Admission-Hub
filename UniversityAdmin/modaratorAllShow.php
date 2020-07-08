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
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Status</th>
                            <th>Type</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            $obj=new phpclass();
                            $limit=20;
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
                            
                            $res=$obj->getModaratorInfoForUniversity($get_page,$limit);
                            $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);
                            
                            if (isset($res) && !empty($res[0]) && !empty($res[1])) {
                                while($r=$res[0]->fetch_assoc()){
                        ?>
                        <tr>
                             <td><img src="img/upload/<?php echo $r['img']?>" height="70" width="70" alt=""></td>
                            <td><?php echo $r['name']?></td>
                            <td><?php echo $r['email']?></td>
                            <td><?php echo $r['pass']?></td>
                            <td><?php echo $r['phone']?></td>
                            <td>
                                <?php  
                                    if($r['status']==0){
                                        echo "Pending";
                                    }else if($r['status']==1){ ?>
                                       <button id="deact"  onclick="return deacts('<?php echo $r['morId']?>')"  class="btn btn-success">Active</button>  
                                    <?php }else if($r['status']==2){?>
                                        <button id="aact"  onclick="return activ('<?php echo $r['morId']?>')"  class="btn btn-secondary">Deactive</button>
                                    <?php } ?>
                        
                            </td>
                            <td><?php echo $r['types'] ?></td>
                            <td>
                                <a target="_blank" href="modaratorShow.php?id=<?php echo $r['morId']?>" class="btn btn-info float-right mr-1">View</a>

                                <button id="edt" onclick="return edit('<?php echo $r['morId']?>')" class="btn btn-warning float-right mr-1">Edit</button>

                                <button  id="dlt" onclick="return dlt('<?php echo $r['morId']?>')" class="btn btn-danger float-right mr-1">Delete</button>
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
                                <?php echo '<span class="page-link" style="cursor: pointer;" onclick="modaratorAllshow('.$i.')">'.$i.'</span>';?>
                            </li>
                            <?php }?>
                            

                    </ul>
                </nav>
      
