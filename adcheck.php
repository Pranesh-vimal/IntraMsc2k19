<?php 
	
	if (isset($_POST['login'])) {
		$uname = $_POST['admin'];
		$pass = $_POST['pass'];
		if (empty($uname) || empty($pass)) {
			header("location:admin.php?error=fillall");
			exit();
		}
		elseif ($uname !== "intra" && $uname !== "Intra") {
			header("location:admin.php?error=unameerr");
			exit();
		}
		elseif ($pass !== "ppt" && $pass !== "quiz" && $pass !== "debug" && $pass !== "market" && $pass !== "postppt" && $pass !== "cultural") {
			header("location:admin.php?error=passerr");
			exit();	
		}
		else{
			if (($uname == "intra" || $uname == "Intra") && ($pass == "ppt" || $pass == "quiz" || $pass == "debug" || $pass == "market" || $pass == "postppt" || $pass == "cultural")) {
				session_start();
				$_SESSION['uname'] = $uname;
				$_SESSION['field'] = $pass;
				header("location:dashboard.php");
				exit();
			}
		}
	}else{
		header("location:index.php");
		exit();
	}

 ?>