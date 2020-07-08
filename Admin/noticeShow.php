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
            <h6>Date: <?php echo $r['dates']?> <span>Time: <?php echo $r['times']?></span></h6>
            <p class="mt-1 mb-1"><?php echo $r['noticeTitle'] ?></h6>
            
        </div>
    </div>
<?php }}}?>

<?php
    include_once("sfooter.php");
?>