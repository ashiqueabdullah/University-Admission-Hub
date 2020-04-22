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
                    <h6>Enter Unit Name</h6>
                    <input type="text" class="form-control" placeholder="Enter Unit Name">
                    <div class="mt-3">
                        <h6>Check Group name under this unit</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="group" type="checkbox" value="Science">Science
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="group" type="checkbox" value="Arch">Arch
                            
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="group" type="checkbox" value="Commerce">Commerce
                            
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="group" type="checkbox" value="Science & Arch">Science & Arch
                            
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="group" type="checkbox" value="Science & Commerce">Science & Commerce
                            
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="group" type="checkbox" value="Commerce & Arch">Commerce & Arch
                            
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="group" type="checkbox" value="Science Arch Commerce">Science Arch Commerce
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
                            <input class="form-check-input" name="depert_list[]" value="<?php echo $r['subjectname']?>" type="checkbox" ><?php echo $r['depertshortname']?>
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
                            <input class="form-check-input" name="allow" type="checkbox" value="2">2nd
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="allow" type="checkbox" value="3">3rd
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="allow" type="checkbox" value="4">4th
                        </div>

                    <h6 class="mt-2">Exam Duration</h6>
                    <input type="text" name="examduration" class="form-control" placeholder="Enter Unit Name">
                    
                    <h6 class="mt-2">Special Note <small>(If Have)</small></h6>
                    <textarea name="specialnote" id="" cols="70" rows="5"></textarea>

                    <input type="submit" class="btn btn-success w-100 mt-2">
                    </form>                      
            </div>
            
        

        <div id="seat">
            <div class="row">
              <div class="col-md-4">
                <h4>Add Seat</h4>
                <form action="">
                <div class="mt-4">
                <h6>Cheack unit</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" >
                            <label class="form-check-label" >Bangla</label>
                        </div>

                        <h6>Cheack Group</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" >
                            <label class="form-check-label" >Bangla</label>
                        </div>

                        <h6>Cheack Depertment</h6>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" >
                            <label class="form-check-label" >Bangla</label>
                        </div>

                        <h6 class="mt-2">Enter Number Of seat</h6>
                        <input type="text" class="form-control" Placeholder="Add number of seat">
                        <input type="submit" class="btn btn-success w-100 mt-2" >
                    </div>
                </form>
              </div>
              <div class="col-md-8">
              <table class="table table-bordered mt-2">
                            <thead>
                                <tr>
                                    <th>Unit Name</th>
                                    <th>Group Name</th>
                                    <th>Depertment name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>A Unit</td>
                                    <td>Science</td>
                                    <td>CSE</td>
                                    <td>
                                        <a href="" class="btn btn-danger mb-1 w-100"><i class="fas fa-trash-alt"></i> Delete</a>
                                        <a href="" class="btn btn-warning mb-1 w-100"><i class="far fa-edit"></i> Edit</a>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
              </div>
            </div>
        </div>

        <div id="allunits">
            <table class="table table-bordered">
                <thead>
                <tr>
                  <th>Unit Name</th>
                  <th>Minimun SSC GPA</th>
                  <th>Minimun HSC GPA</th>
                  <th>Total GPA</th>
                  <th>Exam Duration</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>as</td>
                    <td>as</td>
                    <td>as</td>
                    <td>as</td>
                    <td>as</td>
                    <td>Pending</td>
                    <td>
                                        <a href="" class="btn btn-danger mb-1"><i class="fas fa-trash-alt"></i> Delete</a>
                                        <a href="" class="btn btn-warning mb-1"><i class="far fa-edit"></i> Edit</a>
                                        <a href="" class="btn btn-info mb-1"><i class="far fa-edit"></i> View</a>
                                    </td>
                  </tr>
                </tbody>
            </table>
        </div>
        
    </div>
    </div>
    <?php
    include_once("sfooter.php");
  ?>