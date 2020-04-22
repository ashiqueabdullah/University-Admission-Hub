<?php
    include_once("sheader.php");
 ?>

   
   <div class="p-5">
       <div class="noticeView">
           <?php
                $id=$_GET['id'];
                $phpcls=new phpclass();
                $res=$phpcls->getNoticeInformationAdminPanale($id);
                if(!empty($res)){
                    while($r=$res->fetch_assoc()){?>
           <center>
            <?php 
                if(!empty($r['file'])){?>
                    <img src="img/upload/<?php echo $r['file']?>" alt="" class="img-thumbnail mb-3">
                <?php }else{?>
                   <img src="img/upload/notice.png" alt="" class="img-thumbnail mb-3">
                <?php }?>
           
           
           </center>
           <h1 class="mt-1"><?php echo $r['noticeTitle']?></h1>
           <h6 class="mt-1"><?php echo $r['dates']?></h6>
           <p class="mt-2"><?php echo $r['noticeMessage']?></p>
           <div class="row">
               <div class="col-md-6">
               <a href="noticeEdit.php?id=<?php echo $r['noticeId']?>" class="viewmod btn btn-warning "><i class="fas fa-eye"></i> Edit</a>
                        
               </div>
               <div class="col-md-6">
               <a href="noticeView.php?id=<?php echo $r['noticeId']?>" class="viewmod btn btn-danger float-right "><i class="fas fa-eye"></i> Delete</a>
               </div>
           </div>
            <?php }}?>
       </div>
   </div>

<?php
    include_once("sfooter.php");
   ?>
    