<?php
	/**
	 * Session class
	 */
	class session
	{
		public function init(){
			session_start();
		}

		public function set($key,$value){
			$_SESSION["$key"]=$value;
		}

		public function get($key){
			if (isset($_SESSION["$key"])) {
				return $_SESSION["$key"];
			}else{
				return false;
			}
		}

		public function checklogin(){
			self::init();
			if (self::get("std")==false && self::get("uni")==false && self::get("admin")==false) {
				self::destroy();
			}
		}

		public function checkSession(){
			self::init();
			if (self::get("std")==true) {
				header("Location:StudentAdmin/index.php");
			}else if (self::get("uni")==true) {
				header("Location:UniversityAdmin/index.php");
			}else if (self::get("login")==true) {
				header("Location:Admin/index.php");
			}
		}

		public function destroy(){
			session_destroy();
			header("Location:../index.php");
		}
	}
?>