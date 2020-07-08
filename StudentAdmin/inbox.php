<?php
    include_once("sheader.php");
     $phpcls=new phpclass();

     if(isset($_SESSION['admid'])){
        $id=$_SESSION['admid'];
                            
    }else if(isset($_SESSION['uid'])){
        $id=$_SESSION['uid'];
                            
    }
    
    if (isset($_POST['msz']) && isset($_GET['karjonne'])) {
    
     $res=$phpcls->getchatList2($_GET['karjonne'])->fetch_assoc();
     $tarname=$res['name'];
     $amike=$_SESSION['sid'];;

    $res=$phpcls->addmsz($_POST,$tarname,$amike);
     
   }
?>
    
   <div class="chat">
       <div class="row">
            <div class="col-md-10 offset-md-1 main_box">



                <div class="left_box">
                    <div id="user_box" class="mt-1">
                         <?php if(isset($_SESSION['admid'])){
                                 $id=$_SESSION['admid'];
                            
                             }else if(isset($_SESSION['uid'])){
                                 $id=$_SESSION['uid'];
                            
                             }
$id=$_SESSION['sid'];

                            $phpcls=new phpclass();

                            $res=$phpcls->getchatList($id);
                           
                            if($res){
                                while ($r=$res->fetch_assoc()) {

                        ?>

                        <a  style="text-decoration:none;" href="?karjonne=<?php echo $r['frinid']?>">
        <?php 

            if($r['karsathe']=="admin" || $r['karsathe']=="adminModarator"  || $r['karsathe']=="universityAdmin"){ 
                $id=$r['name'];
                $ress=$phpcls->getsingleInfo($id)->fetch_assoc();


                ?>
                <?php

                  if($ress['uniid']!=NULL){ ?>
                    <img class="ml-1" src="../UniversityAdmin/img/upload/<?php echo $ress['img']?>" alt="">
                  <?php }else{?>
                    <img class="ml-1" src="../Admin/img/upload/<?php echo $ress['img']?>" alt="">
                <?php  }

                ?>
                
                <h6><?php echo $ress['name']?></h6>
                <?php 

                  if($ress['uniid']!=NULL){ 
                    $ress=$phpcls->universitynameforchat($ress['uniid'])->fetch_assoc();

                    ?>
                    


                    <p><?php echo $ress['universityName'] ?> University Admin</p>
                 <?php  }else{ ?>
                    <p>Admin</p>
                  <?php }

                ?>




            <?php }else if($r['karsathe']=="university"){
                $id=$r['name'];
                $ress=$phpcls->getsingleuniname($id)->fetch_assoc();

                ?>
                <img class="ml-1" src="../UniversityAdmin/img/upload/<?php echo $ress['universityImg']?>" alt="">
                <h6><?php echo $ress['universityName']?></h6>
                <p> University Admin</p>


            <?php }else if($r['karsathe']=="universityModarator"){
                $id=$r['name'];
                $ress=$phpcls->getsingleInfo($id)->fetch_assoc();
                $id=$ress['uniid'];
                $resss=$phpcls->getsingleuniname($id)->fetch_assoc();
                ?>
                <img class="ml-1" src="../UniversityAdmin/img/upload/<?php echo $ress['img']?>" alt="">
                <h6><?php echo $ress['name']?></h6>
                <p><?php echo $resss['universityName']?> University Modarator</p>



            


            <?php } ?>

        
    </a>
    <hr>

    <?php }} ?>
                    </div>

                </div>











                <div class="right_box">

                    
                  
                  <?php
                      $phpcls=new phpclass();
                      if(isset($_GET['karjonne'])){
                        $id=$_GET['karjonne'];
                        $res=$phpcls->infoforchatHead($id);
                        if($res){
                          $res=$phpcls->infoforchatHead($id)->fetch_assoc();
                          $id=$res['name'];
                          if($res['karsathe']=="student"){
                             $ress=$phpcls->gtchatstudent($id);
                            if($ress){
                              $ress=$phpcls->gtchatstudent($id)->fetch_assoc();
                              $GLOBALS['name'] = $ress['fname']." ".$ress['lname'];
                              $GLOBALS['img'] = $ress['image'];
                              $GLOBALS['table'] ="student";

                              $GLOBALS['onlines'] = $ress['online'];
                              
                              $GLOBALS['imgpath'] = "../StudentAdmin/img/upload/";
                              //echo $name;
                              //echo $name;
                            }
                          
                          }else if($res['karsathe']=="university"){
                             $ress=$phpcls->getsingleuniname($id);
                            if($ress){
                              $ress=$phpcls->getsingleuniname($id)->fetch_assoc();
                              $GLOBALS['name'] = $ress['universityName'];
                              $GLOBALS['img'] = $ress['universityImg'];
                              $GLOBALS['onlines'] = $ress['online'];
                              $GLOBALS['table'] = "university";
                              $GLOBALS['imgpath'] = "../UniversityAdmin/img/upload/";
                              //echo $name;
                            }
                          }else{
                            $ress=$phpcls->gectadminInfoforchat($id);
                            if($ress){
                              $ress=$phpcls->gectadminInfoforchat($id)->fetch_assoc();
                              $GLOBALS['name'] = $ress['name'];
                              $GLOBALS['img'] = $ress['img'];
                              $GLOBALS['onlines'] = $ress['online'];
                              $GLOBALS['table'] = "modara";


                              if($ress['uniid']!=NULL){
                                //universityModa
                                $GLOBALS['imgpath'] = "../UniversityAdmin/img/upload/";
                                
                              }else{
                                //admin moda
                                $GLOBALS['imgpath'] = "../Admin/img/upload/";
                              }
                              
                            }
                          }
                          }
}

                    


                  ?>


                    <div class="disply_name">
                        <div class="row">
                            <div class="col-10">



                                <img src="<?php echo $imgpath.$img?>" alt="">
                                <p>
                                  <?php 
                                if(!empty($name)){
                                  echo $name;
                                } else{
                                  echo "Name";
                                }
                                 ?>
                                   
                                 </p>
                                
                            </div>
                            <div class="col-2">
                                <h6><?php 
                                if(!empty($onlines)){
                                  echo $onlines;
                                }
                                 ?></h6>
                                
                            </div>
                            
                        </div>
                    </div>




                    <div class="show_text">
                        <?php 
                        $phpcls=new phpclass();
                            if(isset($_GET['karjonne'])){
                                $id=$_GET['karjonne'];
                                $res=$phpcls->getatramarId($id)->fetch_assoc();
                                $id1=$res['name'];
                                $id2=$res['amarId'];
                                $res=$phpcls->getmsz($id1,$id2);
                                if($res){
                                    while($r=$res->fetch_assoc()){
                                        if($id1==$r['name']  && $id2==$r['amike']){ ?>
                                            <p style="background-color:#101924; "   class="float-right"><?php echo $r['msz']?></p>
                                        <?php }else{?>
                                           <p style="background-color:#798BFF; " class="float-left"><?php echo $r['msz']?></p>
                                       <?php }
                                    }
                                }
                            }else{
                              echo "<h1 class='text-center pt-5'>Start Conversation</h1>";
                            }
                         ?>
                    </div>




                    <div class="send_text">
                        <form action="" method="post">
                            <div class="text">
                            <input placeholder="Type you message..." class="w-100 p-2" type="text" name="msz">
                        </div>
                        <div class="send">
                            <button class="btn"><i class="fas fa-arrow-circle-right"></i></button>
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