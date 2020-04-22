<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }

?>


<div class="row">



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

                            $res=$obj->getModaratorInfo($get_page,$limit);
                           
                            
                            $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);

                            if (isset($res) && !empty($res[0]) && !empty($res[1])) {
                                while($r=$res[0]->fetch_assoc()){
                        ?>

                <div class="col-md-3">
                    <div class="box">
                        <center>
                            <img src="img/upload/<?php echo $r['img']?>" alt="">
                            <h5><?php echo $r['name']?></h5>
                            <p>North East University</p>
                            <h5>
                            <a href="modaratorViewUniversity.php?id=<?php echo $r['morId']?>" class="viewmod btn btn-info "> <i class="fas fa-eye"></i> View</a>
                            <a href="modaratordlt.php?id=<?php echo $r['morId']?>" class=" btn btn-danger   mr-1"><i class="fas fa-trash-alt"></i> Delete</a>
                            <a href="modaratordlt.php?id=<?php echo $r['morId']?>" class=" btn btn-success   mt-1"><i class="fas fa-trash-alt"></i> Approve</a>
                        </h5>
                        </center>
                    </div>
                </div>

<?php }}?>
          



</div>
 <nav class="mt-3" aria-label="Page navigation example">
                    <ul class="pagination">
                   
                        <?php for($i=1; $i<=$number_of_page; $i++){
                    ?>
                            <li class="page-item mr-2">
                                <?php echo '<span class="page-link" style="cursor: pointer;" onclick="approveModarator('.$i.')">'.$i.'</span>';?>
                            </li>
                            <?php }?>
                            

                    </ul>
                </nav>