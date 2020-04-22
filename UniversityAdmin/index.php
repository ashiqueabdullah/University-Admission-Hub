<?php
    include_once("sheader2.php");
   ?>
    <div class="hearo_area">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h3>Pending Addmission</h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Student name</th>
                            <th>University name</th>
                            <th>Student Id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>Ashique Abdullda</td>
                            <td>North East University</td>
                            <td>160103</td>
                            <td>
                                <button class="btn btn-warning">Approve</button>
                                <button class="btn btn-warning">View profile</button>
                                <button class="btn btn-danger mt-1">Delete</button>
                            </td>
                        </tr>
                        <tr>

                            <td>Ashique Abdullda</td>
                            <td>North East University</td>
                            <td>160103</td>
                            <td>
                                <button class="btn btn-warning">Approve</button>
                                <button class="btn btn-warning">View profile</button>
                                <button class="btn btn-danger mt-1">Delete</button>
                            </td>
                        </tr>
                        <tr>

                            <td>Ashique Abdullda</td>
                            <td>North East University</td>
                            <td>160103</td>
                            <td>
                                <button class="btn btn-warning">Approve</button>
                                <button class="btn btn-warning">View profile</button>
                                <button class="btn btn-danger mt-1">Delete</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
                
            </div>
            <div class="col-md-10 offset-md-1">
                <h3>Notice For You</h3>
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Messaget</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                            $phpcls=new phpclass();
                            $res=$phpcls->getNoticeForUni();
                            if(!empty($res)){
                                while($r=$res->fetch_assoc()){
                                    if($r['whome']=="university"){
                                    ?>
                                    <tr>
                                        <td><?php echo $r['noticeTitle']?></td>
                                        <td><?php echo $r['noticeMessage']?></td>
                                        <td><?php echo $r['dates']?></td>
                                        <td>
                                            <a href="#" class="btn btn-info"><i class="fas fa-eye"></i> View</a>
                                        </td>
                                    </tr>
                                <?php }}}?>
                        
                   
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>

    <?php
    include_once("sfooter.php");
   ?>