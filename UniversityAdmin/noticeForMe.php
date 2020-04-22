<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }

?>

    <p>Showing all notice thus are created university</p>

    <table class="table table-bordered">
        <thead>
            <th>Notice Title</th>
            <th>Publihs date</th>
            <th>Action</th>
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

                            $res=$obj->noticeForUniversity($get_page,$limit);

                            $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);

                            if (isset($res) && !empty($res[0]) && !empty($res[1])) {
                                while($r=$res[0]->fetch_assoc()){
                        ?>

                <tr>
                    <td><?php echo $r['noticeTitle']?></td>
                    <td><?php echo $r['dates']?></td>
                    <td>
                        <a href="noticeView.php?id=<?php echo $r['noticeId']?>" class="viewmod btn btn-info float-right"><i class="fas fa-eye"></i> View</a>
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
                    <?php echo '<span class="page-link" style="cursor: pointer;" onclick="noticeForMes('.$i.')">'.$i.'</span>';?>
                </li>
                <?php }?>

        </ul>
    </nav>