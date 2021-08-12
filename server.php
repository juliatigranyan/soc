<?php 
session_start();
include "db.php";
class Controller extends  Database{
	 function __construct(){
	  parent::__construct();
	  if($_SERVER['REQUEST_METHOD']=="POST"){
	  	if(isset($_POST["action"])){
 		  $action_name=$_POST["action"];
 		  call_user_func([$this,$action_name]);
 		 }
	  }
	}


	function register(){ 
	 $name=$_POST["name"];
	 $email=$_POST["email"]; 
	 $pass=$_POST["pass"];
	 $re_pass=$_POST["re_pass"];
	 $data=$this->db->query("SELECT * FROM `user` WHERE email='$email'")->fetch_all(true);
	 

	 if (empty($name) || empty($email)|| empty($pass)|| empty($re_pass) || !filter_var($email, FILTER_VALIDATE_EMAIL)|| $pass!=$re_pass || !empty($data) || strlen($pass)<6 || strlen($pass)>8 ) {

	 	if (empty($name)) {
	 		$_SESSION['name_error']="Please fill in the name field* ";
	 	}else{
	 		$_SESSION['name_value']=$name;
	 	}

	 	if (empty($email)) {
			$_SESSION["email_error"]="Please fill in the email field*";
		}else{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
 				$_SESSION["email_error2"]="fill in the correct email";

			}else if(!empty($data)){
				$_SESSION["email_error3"]="Ays emailov grancum ka";
			} else {
				$_SESSION["email_value"]=$email;
			}	
		}
 
        if (empty($pass)) {
			$_SESSION["pass_error"]="Please fill in the password field* ";
		}else if(strlen($pass)<6 || strlen($pass)>8){
			$_SESSION["pass_error1"]="min 6 max 8 ";
		}else{
			$_SESSION["pass_value"]=$pass;
		}

		if (empty($re_pass)) {
			$_SESSION["re_pass_error"]="Please fill in the repeat password field*";
		}else{
			$_SESSION["re_pass_value"]=$re_pass;
		}
		if ( $pass!=$re_pass) {
			$_SESSION["re_pass_error2"]="fill in the correct password";
		}






	 	header("location:index.php");
		}else {
			$pass=password_hash($pass, PASSWORD_DEFAULT);
			$this->db->query("INSERT INTO user (name, email, pass)
  							  VALUES ('$name', '$email', '$pass');");

			header("location:login.php");
		}
	}

	 
	function login(){

		$email=$_POST["email"]; 
	    $pass=$_POST["pass"];
	    $data=$this->db->query("SELECT * FROM `user` WHERE email='$email'")->fetch_all(true);
	    if (empty($email) || empty($pass)) {
	    	if (empty($email)) {
			   $_SESSION["email_error5"]="Please fill in the email field*";   		
	    	}else{
	    		if (!$data) {
	    			 $_SESSION["email_error6"]="Emailov grancum chka";   		
	    		}else{
	    			$_SESSION["email_value1"]=$email;
	    		}
	    	}
	    	if (empty($pass)) {
	    		$_SESSION["pass_error7"]="Please fill in the password field* ";
	    	}

	 		   header("location:login.php");

	    } else {
	    	if (!password_verify($pass, $data[0]["pass"])){
	    			$_SESSION["email_value1"]=$email;
	    			$_SESSION["pass_error8"]="Passwordy sxal e ";
	    			header("location:login.php");
	    		} else{
	    			$_SESSION["user"]=$data[0];
	    			$this->db->query("UPDATE user SET online = 1 WHERE email='$email';");
	    			header("location:profile.php");
	    		}
	    }


	}
	function status(){
		$status=$_POST["status_text"];
		$user_id=$_SESSION["user"]["id"];
		if (!empty($status)) {
			$this->db->query("INSERT INTO `status` (user_id, text) VALUES('$user_id','$status')");
	    header("location:profile.php");

		} else {
		    header("location:profile.php");
		}
	}



	function search(){
		$search=$_POST["search"];
		$user_id=$_SESSION["user"]["id"];
		if (!empty($status)) {
			$this->db->query("INSERT INTO `status` (user_id, text) VALUES('$user_id','$status')");
	    header("location:profile.php");

		}
	}


	function my_status(){
		$user_id=$_SESSION["user"]["id"];
		$data=$this->db->query("SELECT * from status 
								WHERE user_id='$user_id' ORDER BY id DESC")->fetch_all(true);
		for ($i=0; $i <count($data) ; $i++) {
		$a= $data[$i]["id"];
			$like_count=$this->db->query("SELECT SUM(status_like.`like`) as like_count from status_like WHERE status_id='$a'")->fetch_all(true);			
			$dislike_count=$this->db->query("SELECT SUM(status_like.`dislike`) as dislike_count from status_like WHERE status_id='$a'")->fetch_all(true);
			$data[$i][]=$like_count[0]["like_count"];
			$data[$i][]=$dislike_count[0]["dislike_count"];
		}

  		print json_encode($data);
	}

	function this_status_like(){
		$status_id=$_POST["status_id"];
		$user_id=$_SESSION["user"]["id"];
		$data=$this->db->query("SELECT * FROM status_like WHERE status_id='$status_id' and user_id='$user_id'")->fetch_all(true);
		if(!empty($data)){
			$this->db->query("UPDATE status_like
							SET `like` = 1, dislike = 0
							WHERE status_id='$status_id' and user_id='$user_id';");
			$like_count=$this->db->query("SELECT SUM(status_like.`like`) as like_count from status_like WHERE status_id='$status_id'")->fetch_all(true);			
			$dislike_count=$this->db->query("SELECT SUM(status_like.`dislike`) as dislike_count from status_like WHERE status_id='$status_id'")->fetch_all(true);
			$data1[]=$like_count;
			$data1[]=$dislike_count;
  			print json_encode($data1);

		} else {
			$this->db->query("INSERT INTO `status_like` (user_id, status_id,`like`,dislike) VALUES('$user_id','$status_id','1','0')");
			$like_count=$this->db->query("SELECT SUM(status_like.`like`) as like_count from status_like WHERE status_id='$status_id'")->fetch_all(true);			
			$dislike_count=$this->db->query("SELECT SUM(status_like.`dislike`) as dislike_count from status_like WHERE status_id='$status_id'")->fetch_all(true);
			$data1[]=$like_count;
			$data1[]=$dislike_count;
  			print json_encode($data1);


		}
    }
function this_status_dislike(){
		$status_id=$_POST["status_id"];
		$user_id=$_SESSION["user"]["id"];
		$data=$this->db->query("SELECT * FROM status_like WHERE status_id='$status_id' and user_id='$user_id'")->fetch_all(true);

        if(!empty($data)){
			$this->db->query("UPDATE status_like
							SET `like` = 0, dislike = 1
							WHERE status_id='$status_id' and user_id='$user_id';");
			$like_count=$this->db->query("SELECT SUM(status_like.`like`) as like_count from status_like WHERE status_id='$status_id'")->fetch_all(true);			
			$dislike_count=$this->db->query("SELECT SUM(status_like.`dislike`) as dislike_count from status_like WHERE status_id='$status_id'")->fetch_all(true);
			$data2[]=$like_count;
			$data2[]=$dislike_count;
  			print json_encode($data2);

		} else {
			$this->db->query("INSERT INTO `satus_like` (user_id, status_id,`like`,dislike) VALUES('$user_id','$status_id','0','1')");
			$like_count=$this->db->query("SELECT SUM(status_like.`like`) as like_count from status_like WHERE status_id='$status_id'")->fetch_all(true);			
			$dislike_count=$this->db->query("SELECT SUM(status_like.`dislike`) as dislike_count from status_like WHERE status_id='$status_id'")->fetch_all(true);
			$data2[]=$like_count;
			$data2[]=$dislike_count;
  			print json_encode($data2);

		}
		
	}

	function this_status_com(){
		$status_id=$_POST["status_id"];
		$data=$this->db->query("SELECT * FROM status_com join `user` ON user.id=status_com.user_id  WHERE status_id='$status_id' ")->fetch_all(true);
		print json_encode($data);
	}

	function add_com(){
		$status_id=$_POST["status_id"];
		$com_text=$_POST["com_text"];
		$user_id=$_SESSION["user"]["id"];
		var_dump($com_text);
		if (!empty($com_text)) {
			$this->db->query("INSERT INTO `status_com` (status_id,user_id, comment) VALUES('$status_id','$user_id', '$com_text')");
	    header("location:profile.php");
		} else {
		    header("location:profile.php");
		}
	}
    function this_status_delete(){
		$status_id=$_POST["status_id"];
		$data=$this->db->query("DELETE FROM `STATUS`
                                WHERE status_id='$status_id' ")->fetch_all(true);
		print json_encode($data);
	}
}


$a=new Controller();
 ?>