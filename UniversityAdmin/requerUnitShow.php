<?php
   include_once"../session.php";
   include_once"../php_function.php";
   session::checklogin();
   
   if (isset($_GET['log']) && $_GET['log'] == 'out') {
       session::destroy();
   }
   
   ?>
<table class="table table-bordered" style="overflow-x: scroll;display:block">
   <thead>
		<tr>
            <th>Unit Name</th>
            <th>Min SSC GPA</th>
            <th>Min HSC GPA</th>
			<th>Reguler HSC GPA</th>
			<th>Reguler SSC GPA</th>
            <th>Total GPA</th>
            <th>Exam Duration</th>
            <th>Allow</th>
			<th>Depertment</th>
			<th>Subject</th>
			<th>Group</th>
			<th>Status</th>
            <th>Action</th>
		</tr>
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
         
         $res=$obj->getUnits($get_page,$limit);
         
         $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);
         
         if (isset($res) && !empty($res[0]) && !empty($res[1]) && !empty($res[2]) && !empty($res[3])) {
             while($r=$res[0]->fetch_assoc()){
         ?>
      <tr>
         <td>
            <?php echo $r['unitName'];?>
         </td>
         <td>
            <?php echo $r['minSSCGpa'];?>
         </td>
		 <td>
            <?php echo $r['minHSCGpa'];?>
         </td>
		 <td>
            <?php echo $r['hscReg'];?>
         </td>
		 <td>
            <?php echo $r['sscReguler'];?>
         </td>
		 <td>
            <?php echo $r['TotalGpa'];?>
         </td>
		 <td>
            <?php echo $r['examDuration'];?>
         </td>
		 <td>
            <?php echo $r['allow'];?>
         </td>
		 <td>
            <?php 
				
				while($dp=$res[2]->fetch_assoc()){
					if($r['uniId']==$dp['unitId']){
						echo $dp['deptname'].'</br>';
					}else{
						echo "no";
					}
				}
				
				
			?>
         </td>
		 <td>
            <?php 
			
				while($sub=$res[3]->fetch_assoc()){
					if($r['uniId']==$sub['unitId']){
						echo $sub['subName'].'</br>';
					}{
						echo "no";
					}
				}
				
				
			?>
         </td>
		  <td>
            <?php echo $r['groups'];?>
         </td>
		 <td>
            <?php echo $r['statuss'];?>
         </td>
         <td>
            <a href="?id=<?php echo $r['setId ']?>" class="btn btn-danger mb-1 w-100"><i class="fas fa-trash-alt"></i> Delete</a>
            <a href="?id=<?php echo $r['setId ']?>" class="btn btn-warning mb-1 w-100"><i class="far fa-edit"></i> Edit</a>
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
         <?php echo '<span class="page-link" style="cursor: pointer;" onclick="getUnit('.$i.')">'.$i.'</span>';?>
      </li>
      <?php }?>
   </ul>
</nav>