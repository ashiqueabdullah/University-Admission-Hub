<?php
	include_once("sheader.php");
?>







    <div class="inner">
        <h5 class="text-center">Admin Information</h5>
        <hr>
        <center><img class="img-thumbnail mb-2" src="img/user.jpeg" alt="" width="300"></center>
        <div class="row">
            <div class="col-md-6">
                <p class="mt-3"><strong>Name: </strong>Ashique Abdullah</p>
                
                <p class="mt-3"><strong>Address: </strong>29 Rajar Golli</p>
                <p class="mt-3"><strong>City: </strong>Sylhet</p>
                <p class="mt-3"><strong>Zip: </strong>3100</p>
            </div>
            <div class="col-md-6">
                <p class="mt-3"><strong>Phone: </strong>01765109953</p>
                <p class="mt-3"><strong>Type: </strong>Admin</p>
                <p class="mt-3"><strong>Email: </strong>ashique@gmail.com</p>
                <p class="mt-3"><strong>Password: </strong>ashique</p>
            </div>
        </div>
        <p class="text-center mt-2"><strong>University Name: </strong>North East University Bangladesh</p>
        <div class="row mt-3">
            <div class="col-md-6">
                <button class="btn btn-warning">Edit</button>
            </div>
            <div class="col-md-6">
                <button class="btn btn-danger float-right">Delete</button>
            </div>
        </div>
    </div>


    <?php
    include_once("sfooter.php");
?>