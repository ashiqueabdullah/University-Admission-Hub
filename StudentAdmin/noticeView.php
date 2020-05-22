<?php
    include_once("sheader.php");
	$id=$_GET['id'];
	$phpcls=new phpclass();
	$res=$phpcls->shownoticestudentview($id);
	if(!empty($res)){
		while($r=$res->fetch_assoc()){
	
?>
   <div class="notice">
       <div class="info_box">
           <h1><?php echo $r['noticeTitle']?></h1>
           <center>
               <img class="mt-2 img-thumbnail rounded" width="500" src="img/<?php echo $r['file']?>" alt="">
           </center>
           <p class="mt-2"><?php echo $r['noticeMessage']?></p>
       </div>
   </div> 

<?php
	} }
    include_once("sfooter.php");
   ?>
    