<?php
    include_once("sheader.php");
   ?>
    <div class="admitAndnotice">
        <h3>Students who have taken admission to your university</h3>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th>Student name</th>
                    <th>Student Id</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Ashique Abdullda</td>
                    <td>160102030004</td>
                    <td>
                        <button class="btn btn-info">View Profile</button>
                        <button class="btn btn-danger">Delete Profile</button>
                    </td>
                </tr>
                <tr>
                    <td>Ashique Abdullda</td>
                    <td>160102030004</td>
                    <td>
                        <button class="btn btn-info">View Profile</button>
                        <button class="btn btn-danger">Delete Profile</button>
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

        <?php
    include_once("sfooter.php");
   ?>