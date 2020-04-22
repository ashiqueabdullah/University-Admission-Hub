<?php
    include_once("sheader.php");
 ?>
    <div class="profile">
        <h3>Pending Student list</h3>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>Student ID</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Halima Ashraf</td>
                    <td>160103020032</td>
                    <td>Mirabazar</td>
                    <td>
                        <button class="btn btn-danger float-right mr-1">Approve</button>
                        <button class="btn btn-danger float-right mr-1">Reject</button>
                        <a href="studentApprove.php" class="btn btn-info float-right mr-1">View Profile</a>
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
    </div>
    <?php
    include_once("sfooter.php");
 ?>