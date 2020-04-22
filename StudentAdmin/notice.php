<?php
    include_once("sheader.php");
   ?>
    <div class="admitAndnotice">

        <h3>Some Notice</h3>
        <table class="table bgtwo">
            <thead class="">
                <tr>
                    <th>#</th>
                    <th>Notice Title</th>
                    <th>University Name</th>
                    <th>Notic Publish Date</th>
                    <th>Notic Publish Time</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                <?php 
                    $phpcls=new phpclass();
                    $res=$phpcls->getNotice();
                    $i=0;
                    if(isset($res)){
                        while($r=$res->fetch_assoc()){
                            $i++;
                ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $r['noticeTitle'] ?></td>
                    <td><?php echo $r['author'] ?></td>
                    <td><?php echo $r['dates'] ?></td>
                    <td><?php echo $r['times'] ?></td>
                    <td><a href="viewNotice.php" class="btn btn-success">View Notice</a></td>
                </tr>
                <?php }}?>
            </tbody>
        </table>
      

<?php include_once("sfooter.php")?>