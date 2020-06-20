<?php
   include_once("sheader.php");
   $obj=new phpclass();


   if (isset($_POST['msz']) && isset($_GET['chatid'])) {
    $who="University";
    $kar="student";
       $res=$obj->addmsz($_POST,$_GET['chatid'],$who,$kar);
   }

?>
<div class="chat">
   <div class="row">
      <div class="col-md-8 offset-md-2 main_box bgone">





         <div class="left_box">
            <?php 

                    $res=$obj->getchatlist();
                    if($res){
                        while ($r=$res->fetch_assoc()){ 
                           $id=$r['otherId'];
                           if($_SESSION['sid']==$r['stdId']){
                           $res2=$obj->getindividualeUniversity($id); 
                           if($res2){
                                $res2=$res2->fetch_assoc();
                                $GLOBALS['chatuniname'] = $res2['universityName'];
                                $GLOBALS['active'] = $res2['onlines'];
                                $GLOBALS['image'] = $res2['universityImg'];
                           }
                    
                ?>
            <div class="user_box">
                
               
               <a href="?chatid=<?php echo $res2['universityId']?>">
                  <img src="../UniversityAdmin/img/upload/<?php echo $res2['universityImg']?>" alt="">
                  <h6><?php echo $res2['universityName']?></h6>
                  <p>simply dummy...</p>
               </a>

           
            </div>
            <?php }}} ?>
         </div>

        




         <div class="right_box bgtwo">


        

            <div class="disply_name">
               <div class="row">
                  <div class="col-10">
                     <img src="../UniversityAdmin/img/upload/<?php echo $image?>" alt="">
                     <p><?php echo $chatuniname?></p>
                  </div>
                  <div class="col-2">
                     <h6><?php
                        if($active=="offline"){
                            echo "offline";
                        }else{
                            echo "Active";
                        }
                      ?></h6>
                  </div>
               </div>
            </div>








<div class="show_text">
<?php 

            if(isset($_GET['chatid'])){
                $id=$_GET['chatid'];
                $res=$obj->getchaat($id);
                if ($res) {
                    while ($r=$res->fetch_assoc()) {
                        

        ?>



            
                <?php
                    if($r['cheacks']=="student"){ ?>
                        <p><?php echo $r['chats']?></p>
                   
                    <?php }else{ ?>
                        <p class="text-right">asd<?php echo $r['chats']?></p>
                    
                    <?php } ?>
               
               
            



<?php
         }
                }
            }
?>
</div>

            <div class="send_text">

               <form action="" method="post">
                  <div class="text">
                     <input placeholder="Type you message..." type="text" name="msz" class="form-control">
                  </div>
               </form>

            </div>





         </div>
      </div>
   </div>
</div>
<?php
   include_once("sfooter.php");
   ?>