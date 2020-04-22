<?php 
    include_once"header.php";
    include_once"php_function.php";
    include_once"session.php";
    session::checkSession();
?>

<div class="mid_area">
	<div class="container">
		<div class="con_box">
			<div class="box">
				<form action="">
					<label for="">Enter Name</label>
					<input type="text" class="form-control"><br>
					<label for="">Enter Email</label>
					<input type="text" class="form-control"><br>
					<label for="">Enter Your Message</label><br>
					<textarea name="" id="" cols="60" rows="10"></textarea>
					<input type="submit" value="submit" class="btn btn-success">
				</form>
			</div>
		</div>
	</div>
</div>
<?php include_once"footer.php"?>