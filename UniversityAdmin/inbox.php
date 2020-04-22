<?php
    include_once"../session.php";
    include_once"../php_function.php";
    session::checklogin();

    if (isset($_GET['log']) && $_GET['log'] == 'out') {
        session::destroy();
    }
?>
    
   <div class="chat">
       <div class="row">
            <div class="col-md-7 offset-md-2 main_box">
                <div class="left_box">
                    <div class="user_box">
                        <img src="img/1.jpg" alt="">
                        <h6>Halima Ashraf</h6>
                        <p>simply dummy...</p>
                    </div>
                    <div class="user_box">
                        <img src="img/5.jpg" alt="">
                        <h6>Ashique Abdullah</h6>
                        <p class="unred">Can i....</p>
                    </div>
                    <div class="user_box">
                        <img src="img/2.jpg" alt="">
                        <h6>Picchi</h6>
                        <p>look like readable...</p>
                    </div>
                    <div class="user_box">
                        <img src="img/1.jpg" alt="">
                        <h6>Sidra</h6>
                        <p>have suffered..</p>
                    </div>
                    <div class="user_box">
                        <img src="img/3.jpg" alt="">
                        <h6>Abdullah</h6>
                        <p class="unred">Lorem Ipsum is not..</p>
                    </div>
                    <div class="user_box">
                        <img src="img/4.jpg" alt="">
                        <h6>Sidra Ashraf</h6>
                        <p>Can i....</p>
                    </div>
                    <div class="user_box">
                        <img src="img/5.jpg" alt="">
                        <h6>Halima Ashraf</h6>
                        <p class="unred">Can i....</p>
                    </div>
                    <div class="user_box">
                        <img src="img/1.jpg" alt="">
                        <h6>Ashique</h6>
                        <p>Can i....</p>
                    </div>
                    <div class="user_box">
                        <img src="img/2.jpg" alt="">
                        <h6>Ashique Abdullah</h6>
                        <p>Can i....</p>
                    </div>
                </div>
                <div class="right_box">
                    <div class="disply_name">
                        <div class="row">
                            <div class="col-6">
                                <img src="img/5.jpg" alt="">
                                <p>Halima Ashraf</p>
                            </div>
                            <div class="col-4">
                                <h6>Active</h6>
                            </div>
                            <div class="col-2">
                                <p><i class="fas fa-info-circle"></i></p>
                            </div>
                        </div>
                    </div>
                    <div class="show_text">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                        <p class="float-right admin">It is a long established fact that a reader will be distracted by the readable content of </p>
                        <p class="float-left">Printing and typesetting industry.</p>
                        <p class="float-right admin">Reader will be distracted by the readable content of </p>

                    </div>
                    <div class="send_text">
                        <form action="">
                            <div class="text">
                            <input type="text" class="form-control">
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