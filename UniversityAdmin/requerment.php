<?php
   include_once("sheader2.php");
   ?>
<div class="requer">
   <div class="inner">
      <ul>
         <li><a id="depertmentbtn" href="#">Depeartment</a></li>
         <li><a id="subjectbtn" href="#">Subject</a></li>
         <li><a id="quatabtn" href="#">Quata</a></li>
         <li><a id="addunitbtn" href="#">Add Unit</a></li>
         <li><a id="seatbtn" href="#">Seat</a></li>
         <li><a id="allUnitbtn" href="#">All Unit</a></li>
      </ul>
      <hr>
      <div id="depertment">
         <h4>Add New Depertment</h4>
         <div class="row">
            <div class="col-md-6">
               <form class="mt-2" action="" method="post">
                  <?php 
                     $phpcls=new phpclass();
                     if(isset($_POST['adddepertment'])){
                       $res=$phpcls->adddepertment($_POST);
                     }
                     ?>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label>Enter Depertment Name</label>
                        <input type="text" name="dptname" class="form-control" placeholder="Enter Depertment name">
                     </div>
                     <div class="form-group col-md-6">
                        <label>Enter Short Depertment Name</label>
                        <input type="text" name="dptshortname" class="form-control" placeholder="Enter Short Depertment name">
                     </div>
                  </div>
                  <input type="submit" name="adddepertment" class="btn btn-success w-100">
               </form>
            </div>
            <div class="col-md-6 ">
               <div id="depertmentshow">
               </div>
            </div>
         </div>
      </div>
      <div id="subject">
         <h4>Add New Subject</h4>
         <div class="row">
            <div class="col-md-6">
               <form class="mt-2" action="" method="post">
                  <?php 
                     $phpcls=new phpclass();
                     if(isset($_POST['subjectadd'])){
                       $res=$phpcls->addsubject($_POST);
                     }
                     ?>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label>Enter Subject Name</label>
                        <input type="text" name="subjecname" class="form-control" placeholder="Enter Depertment name">
                     </div>
                     <div class="form-group col-md-6">
                        <label>Enter Subject Pass Mraks</label>
                        <input type="text" name="subjectmark" class="form-control" placeholder="Enter Short Depertment name">
                     </div>
                  </div>
                  <input type="submit" name="subjectadd" class="btn btn-success w-100">
               </form>
            </div>
            <div class="col-md-6 ">
               <div id="subjectshow">
               </div>
            </div>
         </div>
      </div>
      <div id="quata">
         <h4>Add New Quata</h4>
         <div class="row">
            <div class="col-md-6">
               <form class="mt-2" action="" method="post">
                  <?php 
                     $phpcls=new phpclass();
                     if(isset($_POST['addquat'])){
                       $res=$phpcls->addquta($_POST);
                     }
                     ?>
                  <div class="form-row">
                     <div class="form-group col-md-6">
                        <label>Enter Quta Name</label>
                        <input type="text" name="qutaName" class="form-control" placeholder="Enter Depertment name">
                     </div>
                     <div class="form-group col-md-6">
                        <label>Enter Quata Seat</label>
                        <input type="text" name="qutaSeat" class="form-control" placeholder="Enter Short Depertment name">
                     </div>
                  </div>
                  <input type="submit" name="addquat" class="btn btn-success w-100">
               </form>
            </div>
            <div class="col-md-6 ">
               <div id="showquta">
               </div>
            </div>
         </div>
      </div>
      <div id="addunit">
         <h4>Add New Unit</h4>
         <form action="" method="post">
            <?php
               $phpcls=new phpclass();
               if(isset($_POST['addunits'])){
               	$res=$phpcls->addUnit($_POST);
               	echo $res;
               }
               ?>
            <h6>Enter Unit Name</h6>
            <input type="text" name="unitName" class="form-control" placeholder="Enter Unit Name">
            <div class="mt-3">
               <h6>Check Group name under this unit</h6>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="group" type="radio" value="Science">Science
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="group" type="radio" value="Arch">Arch
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="group" type="radio" value="Commerce">Commerce
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="group" type="radio" value="Science & Arch">Science & Arch
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="group" type="radio" value="Science & Commerce">Science & Commerce
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="group" type="radio" value="Commerce & Arch">Commerce & Arch
               </div>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="group" type="radio" value="Science Arch Commerce">Science Arch Commerce
               </div>
            </div>
            <div class="mt-4">
               <h6>Check Subject under this unit</h6>
               <?php 
                  $phpcls=new phpclass();
                  $res=$phpcls->getsubjectforUnit();
                  if(!empty($res)){
                    while($r=$res->fetch_assoc()){?>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="subject_list[]" value="<?php echo $r['subjectname']?>" type="checkbox" ><?php echo $r['subjectname']?>
               </div>
               <?php }}?>
            </div>
            <div class="mt-4">
               <h6>Check Depertment under this unit</h6>
               <?php 
                  $phpcls=new phpclass();
                  $res=$phpcls->getDepertmentForuni();
                  if(!empty($res)){
                    while($r=$res->fetch_assoc()){?>
               <div class="form-check form-check-inline">
                  <input class="form-check-input" name="depert_list[]" value="<?php echo $r['depertshortname']?>" type="checkbox" ><?php echo $r['depertshortname']?>
               </div>
               <?php }}?>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <h6 class="mt-2">Minimun SSC GPA</h6>
                  <input type="text" name="minimumSSCgpa" class="form-control" placeholder="Enter Unit Name">
               </div>
               <div class="col-md-6">
                  <h6 class="mt-2">Minimun HSC GPA</h6>
                  <input type="text" name="minimumHSCgpa" class="form-control" placeholder="Enter Unit Name">
               </div>
            </div>
            <h6 class="mt-2">Total GPA</h6>
            <input type="text" name="totalGPA" class="form-control" placeholder="Enter Unit Name">
            <div class="row">
               <div class="col-md-6">
                  <h6 class="mt-2">SSC GPA Mraks for Reguler Student</h6>
                  <input type="text" name="SSSCGPAForRegulerStudent" class="form-control" placeholder="Enter Unit Name">
               </div>
               <div class="col-md-6">
                  <h6 class="mt-2">SSC GPA Mraks for Ireguler Student</h6>
                  <input type="text" name="SSSCGPAForIegulerStudent" class="form-control" placeholder="Enter Unit Name">
               </div>
            </div>
            <div class="row">
               <div class="col-md-6">
                  <h6 class="mt-2">HSC GPA Mraks for Reguler Student</h6>
                  <input type="text" name="HSCGPAForRegulerStudent" class="form-control" placeholder="Enter Unit Name">
               </div>
               <div class="col-md-6">
                  <h6 class="mt-2">HSC GPA Mraks for Ireguler Student</h6>
                  <input type="text" name="HSCGPAForIregulerStudent"  class="form-control" placeholder="Enter Unit Name">
               </div>
            </div>
            <h6 class="mt-2">Allow</h6>
            <div class="form-check form-check-inline">
               <input class="form-check-input" name="allow" type="radio" value="2">2nd
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" name="allow" type="radio" value="3">3rd
            </div>
            <div class="form-check form-check-inline">
               <input class="form-check-input" name="allow" type="radio" value="4">4th
            </div>
            <h6 class="mt-2">Exam Duration</h6>
            <input type="text" name="examduration" class="form-control" placeholder="Enter Unit Name">
            <h6 class="mt-2">Special Note <small>(If Have)</small></h6>
            <textarea name="specialnote" id="" cols="70" rows="5"></textarea>
            <input type="submit" name="addunits" class="btn btn-success w-100 mt-2">
         </form>
      </div>
      <div id="seat">
         <div class="row">
            <div class="col-md-4">
               <h4>Add Seat</h4>
               <form action="" method="post">
			   <?php 
				if(isset($_POST['addseat'])){
					$phpcls=new phpclass();
					$res=$phpcls->addSeat($_POST);
				}
			   ?>
                  <div class="mt-4">
                     <h6>Select The Unit</h6>
                     <div class="form-check form-check-inline">
					 <?php
						$phpcls=new phpclass();
						$res=$phpcls->getUnit();
						if(!empty($res)){
							while($r=$res->fetch_assoc()){ ?>
								<input class="form-check-input" name="unit" value="<?php echo $r['unitName']?>" type="radio" ><span class="mr-2" ><?php echo $r['unitName']?></span>
						<?php }}?>
                        
                     </div>
                     <h6>Select The Depertment</h6>
                     <div class="form-check form-check-inline">
                        <?php
						$phpcls=new phpclass();
						$res=$phpcls->getdept();
						if(!empty($res)){
							while($r=$res->fetch_assoc()){ ?>
								<input class="form-check-input" name="dept" value="<?php echo $r['depertshortname']?>" type="radio" ><span class="mr-2" ><?php echo $r['depertshortname']?></span>
						<?php }}?>
                     </div>
                     <h6 class="mt-2">Enter Number Of seat</h6>
                     <input type="text" name="seatNumber" class="form-control" Placeholder="Add number of seat">
                     <input type="submit" name="addseat" class="btn btn-success w-100 mt-2" >
                  </div>
               </form>
            </div>
            <div class="col-md-8">
			<div id="showSeat">
			</div>
            </div>
         </div>
      </div>
      <div id="allunits">
         
      </div>
   </div>
</div>
<?php
   include_once("sfooter.php");
   ?>