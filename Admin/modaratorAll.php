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
                            <th>Image</th>
                            <th>Name</th>
                            <th>Type</th>
                            <th>University Name</th>
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
                            
                            $res=$obj->getalluniversitymodarators($get_page,$limit);
                            $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);
                            
                            if (isset($res) && !empty($res[0]) && !empty($res[1])) {
                                while($r=$res[0]->fetch_assoc()){
                        ?>
                        <tr>
                        <td><img  src="../UniversityAdmin/img/upload/<?php echo $r['img'] ?>" height="70" width="70" alt=""></td> 
                        <td><?php echo $r['name']?></td>
                        <td><?php 
                        
                        if($r['types']==0){
                            echo "Modarator";
                        }else{
                            echo "Admin";
                        }
                        
                        ?></td>
                        <td><?php 
                        
                            $uid=$r['uniid'];
                            $ress=$obj->getuniversitynameformoradaratorsoe($uid);
                            $ress=$ress->fetch_assoc();
                            echo $ress['universityName'];
                        
                        ?></td>


                        <td>
                        
                        <?php 
                    if ($r['status']==2) {?>
                    <a href="modaratoractive.php?active=<?php echo $r['morId']?>" class="btn btn-secondary"><i class="fas fa-check-circle"></i> Deaactive</a>
                     <?php }else if ($r['status']==1){?>
                    <a href="modaratoractive.php?deactive=<?php echo $r['morId']?>"  class="btn btn-success"><i class="fas fa-check-circle"></i> Active</a>

                     <?php }?>
                     <a href="modaratorView.php?id=<?php echo $r['morId']?>" class="viewmod btn btn-info float-right"><i class="fas fa-eye"></i> View</a>
                        <a href="modaratorEdit.php?id=<?php echo $r['morId']?>" class=" btn btn-warning float-right mr-1">Edit</a>
                        <a href="modaratordlt.php?id=<?php echo $r['morId']?>" class=" btn btn-danger  float-right mr-1"><i class="fas fa-trash-alt"></i> Delete</a>
                        
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
                                <?php echo '<span class="page-link" style="cursor: pointer;" onclick="modaratorAll('.$i.')">'.$i.'</span>';?>
                            </li>
                            <?php }?>
                            

                    </ul>
                </nav>
      
