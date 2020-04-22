<?php
    include_once("sheader.php");
?>

    <?php
        if ($_GET['id']) {
            $id=$_GET['id'];
            $phpcls=new phpclass();
            $res=$phpcls->getNoticeInformationAdminPanale($id);
            if (!empty($res)) {
                while ($r=$res->fetch_assoc()) {
                    
                
            
        
    ?>

    <div class="showNotice">
        <div class="inner">
            <center><img src="img/upload/<?php echo $r['file']?>" alt=""></center>
            <h4 class="mt-1 mb-1"><?php echo $r['noticeTitle']?></h4>
            <h6>1 Apr 2020 <span>NEUB</span></h6>
            <p class="mt-1 mb-1"><?php echo $r['noticeTitle'] ?></h6>
            <div class="row mt-3">
                <div class="col-md-6">
                    <?php 
                        if ($r['statuss']!=1) {?>
                            <a href="noticeRejectDeleteHolde.php?approve=<?php echo $r['noticeId']?>" class="btn btn-success">Approve</a>
                       <?php } ?>
                </div>
                <div class="col-md-6">
                    <a href="noticeRejectDeleteHolde.php?reject=<?php echo $r['noticeId']?>" class="btn btn-danger float-right">Reject</a>
                </div>
            </div>
        </div>
    </div>
<?php }}}?>

<?php
    include_once("sfooter.php");
?>