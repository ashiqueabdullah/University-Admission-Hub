<?php
   include_once"../session.php";
   include_once"../php_function.php";
   session::checklogin();
   
   if (isset($_GET['log']) && $_GET['log'] == 'out') {
       session::destroy();
   }
   
  ?>
  <div class="container">
				<div class="row">
  <?php
   
  
         $obj=new phpclass();
         $limit=5;
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
					
					
					
					<div class="col-md-3">
					<a class="unitshow" href="unitFullIformation.php?id=<?php echo $r['uniId']?>">
						<div class="unitBox">
							<div class="top">
								<h1><?php echo $r['unitName']?></h1>
							</div>
							<div class="bottom">
								<p>Groups: <strong style="color:#A4CFFF"><?php echo $r['groups']?></strong></p>
								<p>Exam Duration: <strong style="color:#A4CFFF"><?php echo $r['examDuration']?></strong></p>
								<?php if($r['statuss']==1){?>
								<p>Status: <strong style="color:green">Active</strong></p>
								<?php }else{ ?>
								<p>Status: <strong style="color:#A4CFFF">Deactive</strong></p>
								<?php } ?>
								<p>Total GPA: <strong style="color:#A4CFFF"><?php echo $r['TotalGpa']?></strong></p>
								
								
								
							</div>
						</div>
					
					</a>
					</div>
					<?php }}?>
				</div>
			</div>
		

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