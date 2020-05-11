<?php
   include_once"../session.php";
   include_once"../php_function.php";
   session::checklogin();
   
   if (isset($_GET['log']) && $_GET['log'] == 'out') {
       session::destroy();
   }
   
   ?>
<table class="table table-bordered">
   <thead>
      <th>Unit Name</th>
      <th>Depertment name</th>
	  <th>Number Of Seat</th>
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
         
         $res=$obj->getSeat($get_page,$limit);
         
         $GLOBALS['number_of_page']=ceil((implode($res[1]->fetch_assoc()))/$limit);
         
         if (isset($res) && !empty($res[0]) && !empty($res[1])) {
             while($r=$res[0]->fetch_assoc()){
         ?>
      <tr>
         <td>
            <?php 
			
				if(!empty($r['unitname'])){
					echo $r['unitname'];
				}else{
					echo "None";
				}
			
			?>
         </td>
         <td>
            <?php 
				if(!empty($r['deptname'])){
					echo $r['deptname'];
				}else{
					echo "None";
				}
			?>
         </td>
		 <td>
            <?php echo $r['numberOfSet']?>
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
         <?php echo '<span class="page-link" style="cursor: pointer;" onclick="getseat('.$i.')">'.$i.'</span>';?>
      </li>
      <?php }?>
   </ul>
</nav>