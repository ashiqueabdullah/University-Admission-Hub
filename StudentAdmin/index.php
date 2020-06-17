<?php
   include_once("sheader.php");
?>
<div class="hearo_area">
   <div class="row">
      <div class="col-lg-4 col-md-4">
         <a href="profile.php">
            <div class="box bgone">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-5">
                     <center>
                        <i class="fas fa-user mr-3 text-right"></i>
                     </center>
                  </div>
                  <div class="col-lg-7 col-md-4 col-6 ">
                     <h1>Profile</h1>
                     <?php
                        $sid=$_SESSION['sid'];
                        $phpcls=new phpclass();
                        $res=$phpcls->getStatus($sid);
                        while($r=$res->fetch_assoc()){
                        session::set('satuss',$r['satuss']);
                        }
                        if ($_SESSION['satuss']==0) {
                            ?>
                     <h6 class="text-danger">20% Done</h6>
                     <?php }else{?>
                     <h6>100% Complete</h6>
                     <?php }?>
                  </div>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-4 col-md-4">
         <a href="apply.php">
            <div class="box bgtwo">
               <div class="row">
                  <div class="col-lg-4 col-md-4 col-5">
                     <center>
                        <i class="fas fa-arrow-circle-right mr-3 text-right"></i>
                     </center>
                  </div>
                  <div class="col-lg-7 col-md-4 col-6 ">
                     <h1>Apply</h1>
                     <h6> 
                     
                     <?php 
                        $id=$_SESSION['sid'];
                        $resss=$phpcls->getappliedinfo($id)->fetch_assoc();
                        $resss=implode($resss);
                        echo $resss; 
                     ?>
                     
                     
                     University</h6>
                  </div>
               </div>
            </div>
         </a>
      </div>
      <div class="col-lg-4 col-md-4">
         <a href="Payment.php">
            <div class="box bgone">
               <div class="row">
                  <div class="col-lg-3 col-md-3 col-5">
                     <center>
                        <i class="fas fa-money-bill-alt mr-3 text-right my"></i>
                     </center>
                  </div>
                  <div class="col-lg-8 col-md-8 col-6 ">
                     <h1>Balance</h1>
                     <h6>Available <span style="color:red"><?php echo $_SESSION['amoint']?></span> Tk</h6>
                  </div>
               </div>
            </div>
         </a>
      </div>
   </div>
</div>
<div class="admitAndnotice">
   <h2 class="text-center mb-2" style="color:white;">Some Notice Here</h2>
   <table class="table table-bordered">
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
            <a href="noticeView.php?id=<?php echo $r['noticeId']?>" class="btn btn-info">View</a>
         </td>
      </tr>
           <?php }}?>
   </tbody>
</div>

<?php
   include_once("sfooter.php");
?>