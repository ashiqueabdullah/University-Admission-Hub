 <?php 
 include_once"../session.php";
    include_once"../php_function.php";
 ?>
 <center>
                            <form method="post">
                                <?php 
            		     $id=$_GET['edit'];
               		 $phpcls=new phpclass();
            			if (isset($_POST['editpayment'])) {
            				$res=$phpcls->enterPayment($id,$_POST);
            			}
            		?>
                                    <h5>Enter Payment</h5>
                                    <input type="text" class="form-control w-75 mb-1 mt-1" value="<?php echo $_SESSION['amt']?>" placeholder="Enter Payment Ammount">
                                    <input type="submit" name="editpayment" class="btn btn-danger w-75 mb-5">
                            </form>

                        </center>