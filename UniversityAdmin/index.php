<?php
    include_once("sheader2.php");
   include_once"../session.php";
   include_once"../php_function.php";
?>

    <div class="hearo_area p-5">
        <h3>Pending Addmisson list</h3>
<table style="background-color: white;" class="table table-bordered">
   <thead>
      <th>Student Name</th>
      <th>SSC Roll</th>
      <th>HSC Roll</th>
      <th>SSC GPA</th>
      <th>HSC GPA</th>
      <th>Total GPA</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Status</th>
      <th>Action</th>
   </thead>
   <tbody>
      <?php
         $obj=new phpclass();
         
         $res=$obj->getStudentwhoareappied2();
         
         
         if (isset($res) && !empty($res)) {
             while($r=$res->fetch_assoc()){
                 $id=$r['studentId'];
                 $res2nd=$obj->sendstudentvalue($id);
                 while($rr=$res2nd->fetch_assoc()){
         ?>
      <tr>
         <td><?php echo $rr['fname']." ".$rr['lname'] ?></td>
         <td><?php echo $rr['sscRoll']?></td>
         <td><?php echo $rr['hscRoll']?></td>
         <td><?php echo $rr['sscGpa']?></td>
         <td><?php echo $rr['hscGpa']?></td>
         <td><?php echo $rr['sscGpa'] + $rr['hscGpa']?></td>
         <td><?php echo $rr['phone']?></td>
         <td><?php echo $rr['email']?></td>
         <td><?php 
            if($r['statuss']==0){
                echo "<span style='color:#E0A800'>Pending</span>";
            }else if($r['statuss']==1){
                echo "<span style='color:#1E7E34'>Approve</span>";
            }else if($r['statuss']==2){
                echo "<span style='color:#C82333'>Reject</span>";
            }
            ?></td>
         <td>
            <a href="studentApprove.php?id=<?php echo $rr['studentId']?>" target="_blank" class="viewmod btn btn-info float-right mr-1 mt-1"><i class="fas fa-eye"></i></a> 
            <a href="deleteApproveReject.php?admissondelete=<?php echo $r['addmissonId']?>" class="viewmod btn btn-danger float-right mr-1 mt-1"><i class="far fa-trash-alt"></i></a>
            <a href="deleteApproveReject.php?admissonactive=<?php echo $r['addmissonId']?>" class="viewmod btn btn-success float-right mr-1 mt-1"><i class="far fa-check-square"></i></a>
            <a href="deleteApproveReject.php?admissonreject=<?php echo $r['addmissonId']?>" class="viewmod btn btn-warning float-right mr-1 mt-1"><i class="fas fa-cut"></i></a>
         </td>
      </tr>
         <?php }}}?>
   </tbody>
</table>
    </div>

    <?php
    include_once("sfooter.php");
   ?>