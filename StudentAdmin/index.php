<?php
   include_once("sheader.php");
?>
<div class="hearo_area">
   <div class="row">
      <div class="col-md-3">
         <a href="profile.php">
            <div class="box bgone text-center">
               <h2>Profile</h2>
                     <?php
                        $sid=$_SESSION['sid'];
                        $phpcls=new phpclass();
                        $res=$phpcls->getStatus($sid)->fetch_assoc();
                        $_SESSION['chk']=$res['hscGpa'];
                        if (empty($chks)) {
                           ?>
                     <h6 class="text-info">20% Done</h6>
                     <?php }else{?>
                     <h6>100% Complete</h6>
                     <?php }?>
            </div>
         </a>
      </div>
      <div class="col-md-3">
         <a href="prospectus.php">
            <div class="box bgone text-center">
               <h2>Apply</h2>
                     <h6> 
                     
                     <?php 
                        $id=$_SESSION['sid'];
                        $resss=$phpcls->getappliedinfo($id)->fetch_assoc();
                        $resss=implode($resss);
                        echo $resss; 
                     ?>
                     
                     
                     University</h6>
            </div>
         </a>
      </div>
      <div class="col-md-3 ">
         <a href="Payment.php">
            <div class="box bgone text-center">
               <h2>Balance</h2>
               <h6>Available <span style="color:red"><?php echo $_SESSION['amoint']?></span> Tk</h6>
            </div>
         </a>
      </div>



      <div class="col-md-3 ">
         <a href="inbox.php">
            <div class="box bgone text-center">
               <h2>Message</h2>
               <h6>Start Conversation</h6>
            </div>
         </a>
      </div>
   </div>
</div>


<div  class="admitAndnotice ">
   <h1 class="text-center pt-3" >Some Notice Here</h1>
   <center><hr></center>
   <table style="background-color: white" class="col-md-10 offset-md-1  table table-bordered">
   <thead>
      <th>Title</th>
      <th>Message</th>
      <th>Publihs date</th>
      <th>Action</th>
   </thead>
   <tbody>
    <?php 
       $ress=$phpcls->getnoticeforhomepage();
       if($ress){
           while($r=$ress->fetch_assoc()){?>
      <tr>
         <td><?php echo $r['noticeTitle']?></td>
         <td><?php echo $r['noticeMessage']?></td>
         <td><?php echo $r['dates']?></td>
         <td>
            <a target="_blank" href="noticeView.php?id=<?php echo $r['noticeId']?>" class="btn btn-info">View</a>
         </td>
      </tr>
           <?php }}?>
   </tbody>
</div>

<?php
   include_once("sfooter.php");
?>