<?php 

	include_once 'Session.php';
	include 'Database.php';

	class User{
		private $db;
		public function __construct(){
			$this->db = new Database();
		}


		public function userRegistration($data){
			$name = $data['name'];
			$username = $data['username'];
			$email = $data['email'];
			$pass = $data['password'];
			$repass = $data['repass'];
			$checkmail = $this->emailCheck($email);
			if($pass != $repass){
				 $msg="<div class='alert alert-danger'>Password didn't match</div>";
				 return $msg;
			}

			if($name==""||$username==""||$email==""||$pass==""){
				$msg = "<div class='alert alert-danger'>Fields must not be empty</div>";
				return $msg;
			}

			if(filter_var($email, FILTER_VALIDATE_EMAIL) ===false){
				 $msg="<div class='alert alert-danger'>Invalid Email address</div>";
				 return $msg;
			}

			if($checkmail){
				$msg="<div class='alert alert-danger'>Email already exists</div>";
				 return $msg;
			}

			else{
				$pass = md5($pass);
				$sql = "INSERT INTO tbl_user (name,username,email,password) VALUES ('$name','$username','$email','$pass')";
				$query = $this->db->pdo->prepare($sql);
				$query->execute();
				$msg="<div class='alert  alert-success'>Data inserted successfully</div>";
				 return $msg;
			}
		}


		public function emailCheck($email){
			$sql = "SELECT email FROM tbl_user WHERE email='$email'";
			$query = $this->db->pdo->prepare($sql);
			$query->execute();
			if($query->rowCount()>0){
				return true;
			}else{
				return false;
			}
		}

		public function getLoginUser($email, $password){
			$sql = "SELECT * FROM tbl_user WHERE email= '$email'";
			$query = $this->db->pdo->prepare($sql);
			$query->execute(); 
			$result = $query->fetch(PDO::FETCH_OBJ);
			return $result;
		}

		public function userLogin($data){
			$email = $data['email'];
			$pass = md5($data['password']);
			$checkmail = $this->emailCheck($email);
			if(md5(!$checkmail){
				 $msg="<div class='alert alert-danger'>Email doesn't exist</div>";
				 return $msg;
			}

			if($email==""||$pass==""){
				$msg = "<div class='alert alert-danger'>Fields must not be empty</div>";
				return $msg;
			}

			$result = $this->getLoginUser($email, $pass);
			if ($result) {
				Session::init();
				Session::set("login", true);
				Session::set("id", $result->id);
				Session::set("name", $result->name);
				Session::set("loginmsg", "<div class='alert alert-success'>You are now logged in</div>");
				header("Location: index.php");

			}else{
				$msg="<div class='alert alert-danger'>Data not found</div>";
				 return $msg;
			}
		}
	}
 ?>