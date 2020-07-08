<?php 
    include_once"header.php";
    include_once"php_function.php";
    include_once"session.php";
    session::checkSession();

    $GLOBALS['logincheck']=1;
    $GLOBALS['stdregcheck']=1;
    $GLOBALS['uniregcheck']=1;
?>
    

    <div id="login">
        <div class="row">
            <div class="col-md-5">
                <div class="left ">
                    <div id="loginBox" class="pt-5 pr-5">
                    <img src="img/blackLogo.png" alt="">
                    <h1>Sign in</h1>
                    <p>Don't have an account? <a href="#" id="getUser">Sign up</a></p>
                    
                    
                        <form action="" method="post">
                       <?php
                            $phcls=new phpclass();
                            if (isset($_POST['logins'])) {
                                $res=$phcls->login($_POST); 

                                if($res){

                                    $logincheck=$res;
                                }
                                

                                 }?>
                                 <input style="display: none;" id="loginerror" value="<?php echo $logincheck; ?>">
                        
                        <div class="form-group mt-4">
                            <label class="mt-3" for="">Email address</label>
                            <input class="form-control" name="email" type="email" placeholder="Enter Email" >
                        </div>
                        <div class="form-group">
                            <label class="mt-1" for="">Password</label>
                            <input class="form-control" name="pass" type="password" placeholder="Enter password" >
                    </div>
                <input type="submit" value="Sign in" name="logins" class="form-control btn w-100 btn-info">
                       

            </form>
        <div  id="addUniversity">Or Add University</div>
    </div>
</div>


                




<div id="student">
  <p class="mt-2 pb-0 mb-0 text-center">Already have a account <span id="signFormStudent" class="text-center">Sign in</span></p>
    
    <form action="#" method="post" onsubmit="return stvelidetion()">
      
      <?php
        $pcls=new phpclass();
         if (isset($_POST["stdsubmit"])) {
             $res=$pcls->RegistrationStudent($_POST);
             if ($res) {
               $stdregcheck=$res;
             }
         }
      ?>
      <input style="display: none;" type="text" id="stdsubcheck" value="<?php echo $stdregcheck?>">
        
       <div class="row pl-5">
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter SSC Roll</label>
             <input type="text" class="form-control" name="sscroll" id="sscroll" placeholder="Enter SSC Roll">
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter SSC Registation</label>
             <input type="text" class="form-control" name="sscregis" id="sscregis" placeholder="SSC Registation Number">
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter HSC Roll</label>
             <input type="text" class="form-control" name="hscroll" id="hscroll" placeholder="Enter HSC Roll">
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter HSC Registation</label>
             <input type="text" class="form-control" name="hscreg" id="hscreg" placeholder="HSC Registation Number">
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Select Birth date</label>
             <input type="date" id="sdate" name="sdate" class="form-control" >
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter Email</label>
             <input type="email" class="form-control" id="semail" name="semail" placeholder="Enter email" >
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter First name</label>
             <input type="text" class="form-control" id="sfname" name="sfname" placeholder="Enter First name" >
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter Last Name</label>
             <input type="text" class="form-control" id="slname" name="slname" placeholder="Enter Last Name">
          </div>
          <div class="col-md-12 mt-2">
            <label><span style="color:red;">*</span>Select Gender</label><br>
             <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="radios" name="radio" value="Male" >
                <label class="form-check-label">
                Male
                </label>
             </div>
             <div class="form-check form-check-inline">
                <input class="form-check-input" name="radio" id="radios" type="radio" value="female" >
                <label class="form-check-label">
                Female
                </label>
             </div>
             <div class="form-check form-check-inline">
                <input class="form-check-input" name="radio" id="radios" type="radio" value="Other" >
                <label class="form-check-label">
                Other
                </label>
             </div>
          </div>
          <div class="col-md-12 mt-2">
            <label><span style="color:red;">*</span>Enter phone Number</label>
             <input type="text" class="form-control" id="sphone" name="sphone" placeholder="Enter phone" >
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter Password</label>
             <input type="password" class="form-control" id="spass" name="spass" placeholder="Enter password" >
          </div>
          <div class="col-md-6 mt-2">
            <label><span style="color:red;">*</span>Enter Re-Type Password</label>
             <input type="password" class="form-control" id="svpass" name="svpass" placeholder="Verify password" >
          </div>
       </div>
       <button type="submit" name="stdsubmit" value="Submit" class="btn btn-primary mt-2 ml-5">Submit</button>
    </form>
</div>






<div id="univerity" class="pl-5">
  <p class="mt-2 pb-0 mb-4 text-center">Already have a account <span id="signFormUniversity" class="text-center mt-1">Sign in</span></p>
   <?php
         $pcls=new phpclass();
         if (isset($_POST["reg"])) {
             $res=$pcls->RegistationUniversity($_POST,$_FILES);
             if ($res) {
                $uniregcheck=$res;
             }
         }
         ?>
   <form action="#" method="post" onsubmit=" return unvelidetion()" enctype="multipart/form-data">
      
         <input style="display: none;" type="text" id="unisubcheck" value="<?php echo $uniregcheck?>">

      <div class="row">
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter university name</label>
             <input id="uname" name="uname" type="text" class="form-control mt-0" placeholder="Enter Your university name" >  
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter university code</label>
            <input id="rgcode" name="rgcode" type="text" class="form-control mt-0" placeholder="Enter university code" >   
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Upload university image</label>
            <input id="unimage" name="unimage" type="file" class="form-control-file mt-0" >  
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Select Divisition</label>
            <select id="division" name="division" class="form-control mt-0">
               <option value="">Select Divisition </option>
               <option value="Dhaka">Dhaka </option>
               <option value="Chittagong">Chittagong</option>
               <option nvalue="Rajshahi">Rajshahi</option>
               <option namvalue="Khulna">Khulna</option>
               <option value="Mymensingh">Mymensingh</option>
               <option value="Sylhet">Sylhet</option>
            </select>
         </div>
         
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter Zip code</label>
            <input id="zcode" name="zcode" type="text" class="form-control mt-0" placeholder="Enter university zip" >   
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter City</label>
            <input id="city" name="city" type="text" class="form-control mt-0" placeholder="Enter your city" >  
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter Phone Number</label>
            <input id="phone" name="phone" type="text" class="form-control mt-0" placeholder="Enter University phone" >   
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter Email</label>
            <input id="email" name="email" type="email" class="form-control mt-0" placeholder="Enter university email" >    
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter Passowrd</label>
            <input id="pass" name="pass" type="password" class="form-control mt-0" placeholder="Enter Password" >
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter Re-type password</label>
            <input id="vrpasss" name="vrpasss" type="password" class="form-control mt-0"  placeholder="Enter password again">
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter Google lat</label>
            <input id="lat" name="lat" type="text" class="form-control mt-0"  placeholder="Enter google location lat">
         </div>
         <div class="col-md-6">
          <label><span style="color:red;">*</span>Enter Google lan</label>
            <input id="lan" name="lan" type="text" class="form-control mt-0"  placeholder="Enter google location lng">
         </div>
         <div class="col-md-12">
          <label><span style="color:red;">*</span>Upload Signature</label>
            <input id="sing" name="single" type="file" class="form-control-file" >  
         </div>
      </div>
      <button type="submit" name="reg" value="Submit" class="btn btn-primary mt-2 w-100">Submit</button>
   </form>
</div>



</div>
<div class="col-md-7 loginRight">
   <div class="right">
      <div class="content">
         <h5>Education is the passport to the future, for tomorrow belongs to those who prepare for it today</h5>
         
      </div>
   </div>
</div>
</div>
</div>


    


<?php include_once"footer.php"?>