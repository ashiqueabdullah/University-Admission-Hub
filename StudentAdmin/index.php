<?php
    include_once("sheader.php");
   ?>
    <div class="hearo_area">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <a href="profile.php">
                    <div class="box bgone">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-5">
                                <center>
                                    <i class="fas fa-user mr-3 text-right"></i>
                                </center>
                            </div>
                            <div class="col-lg-7 col-md-4 col-6 ">
                                
                                <h1>Profile</h1>
                                
                                <?php
                                    $sid=$_SESSION['sid'];
                                    $phpcls=new phpclass();
                                    $res=$phpcls->getStatus($sid);
                                    while($r=$res->fetch_assoc()){
                                    session::set('satuss',$r['satuss']);
                                }
                                    if ($_SESSION['satuss']==0) {
                                        ?>
                                       <h6 class="text-danger">20% Done</h6>
                                    <?php }else{?>
                                        <h6>100% Done</h6>
                                    
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="apply.php">
                    <div class="box bgtwo">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-5">
                                <center>
                                    <i class="fas fa-arrow-circle-right mr-3 text-right"></i>
                                </center>
                            </div>
                            <div class="col-lg-7 col-md-4 col-6 ">
                                <h1>Apply</h1>
                                <h6>5 University</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="inbox.php">
                    <div class="box bgone">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-5">
                                <center>
                                    <i class="far fa-envelope mr-3 text-right"></i>
                                </center>
                            </div>
                            <div class="col-lg-7 col-md-4 col-6 ">
                                <h1>Inbox</h1>
                                <h6>10 Message</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4">
                <a href="Payment.php">
                    <div class="box bgtwo">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-5">
                                <center>
                                    <i class="fas fa-money-bill-alt mr-3 text-right my"></i>
                                </center>
                            </div>
                            <div class="col-lg-8 col-md-8 col-6 ">
                                <h1>Balance</h1>
                                <h6>15,000 available</h6>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="admitAndnotice">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>Download your admit card</h3>
                <table class="table bgone">
                    <thead>
                        <tr>
                            <td>#</td>
                            <th>Image</th>
                            <th>Univarsity Name</th>
                            <th>Download</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>2</td>
                            <td><img src="img/admit.jpg" alt="" width="120"></td>
                            <td>North East university Bngladesh</td>
                            <td>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><img src="img/admit.jpg" alt="" width="120"></td>
                            <td>North East university Bngladesh</td>
                            <td>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><img src="img/admit.jpg" alt="" width="120"></td>
                            <td>North East university Bngladesh</td>
                            <td>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><img src="img/admit.jpg" alt="" width="120"></td>
                            <td>North East university Bngladesh</td>
                            <td>
                                <button class="btn btn-success">Download</button>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"></td>
                            <td colspan="2">
                                <a href="admitcard.php" class="btn btn-info">View All addmit card</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>Some Notice</h3>
                 <table class="table bgtwo">
                    <thead class="">
                        <tr>
                            <th>#</th>
                            <th>Notice Title</th>
                            <th>Author</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $phpcls=new phpclass();
                    $res=$phpcls->getNotice2();
                    $i=0;
                    if(isset($res)){
                        while($r=$res->fetch_assoc()){
                            $i++;
                ?>
                    <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $r['noticeTitle'] ?></td>
                    <td><?php echo $r['author'] ?></td>
                    <td><a href="viewNotice.php" class="btn btn-success">View Notice</a></td>
                    <?php }}?>
                    </tr>
                    </tbody>
                    </table>
            </div>
        </div>

        <?php
    include_once("sfooter.php");
   ?>