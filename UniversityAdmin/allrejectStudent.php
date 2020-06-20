<?php
   include_once"../session.php";
   include_once"../php_function.php";
   session::checklogin();
   
   if (isset($_GET['log']) && $_GET['log'] == 'out') {
       session::destroy();
   }
   
   ?>
<h3>Reject Addmisson list</h3>
<table class="table table-bordered">
   <thead>
      <th>Student Name</th>
      <th>Total GPA</th>
      <th>Phone</th>
      <th>Email</th>
      <th>Status</th>
      <th>Action</th>
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
         
         $res=$obj->getStudentwhoareReject($get_page,$limit);
         
         $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);
         
         if (isset($res) && !empty($res[0]) && !empty($res[1])) {
             while($r=$res[0]->fetch_assoc()){
				 $id=$r['studentId'];
				 $res2nd=$obj->sendstudentvalue($id);
				 while($rr=$res2nd->fetch_assoc()){
         ?>
      <tr>
         <td><?php echo $rr['fname']?></td>
         <td><?php echo $rr['sscGpa'] + $rr['hscGpa']?></td>
         <td><?php echo $rr['phone']?></td>
         <td><?php echo $rr['email']?></td>
         <td><?php 
            echo "<span style='color:red'>Reject</span>";
            ?></td>
         <td>
            <a href="studentApprove.php?id=<?php echo $rr['studentId']?>" target="_blank" class="viewmod btn btn-info float-right mr-1 mt-1"><i class="fas fa-eye"></i></a> 
            <a href="deleteApproveReject.php?admissondelete=<?php echo $r['addmissonId']?>" class="viewmod btn btn-danger float-right mr-1 mt-1"><i class="far fa-trash-alt"></i></a>
			<a href="deleteApproveReject.php?admissonactive=<?php echo $r['addmissonId']?>" class="viewmod btn btn-success float-right mr-1 mt-1"><i class="far fa-check-square"></i></a>
			
         </td>
      </tr>
		 <?php }}}?>
   </tbody>
</table>
<nav aria-label="Page navigation example">
   <ul class="pagination">
      <?php for($i=1; $i<=$number_of_page; $i++){
         ?>
      <li class="page-item mr-2">
         <?php echo '<span class="page-link" style="cursor: pointer;" onclick="showpendingstudent('.$i.')">'.$i.'</span>';?>
      </li>
      <?php }?>
   </ul>
</nav>