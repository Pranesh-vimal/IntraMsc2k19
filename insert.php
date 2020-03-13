<?php 
	
	if (isset($_POST['submit'])) {
		require_once 'db.php';
		$fname = ucfirst($_POST['fname']);
		$lname = ucfirst($_POST['lname']);
		$roll = $_POST['roll'];
		$year = $_POST['year'];
		$ppt = $_POST['ppt'];
		$quiz = $_POST['quiz'];
		$debug = $_POST['debug'];
		$market = $_POST['market'];
		$pstppt = $_POST['pstppt'];
		$cultural = $_POST['cultural'];
		$cultural1 = $_POST['cultural1'];
		// $pptteam = $_POST['pptteam'];
		// $pptteamname = $_POST['pptteamname'];
		// $quizteam = $_POST['quizteam'];
		// $quizteamname = $_POST['quizteamname'];
		// $debugteam = $_POST['debugteam'];
		// $debugteamname = $_POST['debugteamname'];
		// $marketteam = $_POST['marketteam'];
		// $marketteamname = $_POST['marketteamname'];
		// $pstpptteam = $_POST['pstpptteam'];
		// $pstpptteamname = $_POST['pstpptteamname'];
		// $culturalteam = $_POST['culturalteam'];
		// $culturalteamname = $_POST['culturalteamname'];
		if ($ppt == 'yes') {
			$pptteam = $_POST['pptteam'];
			if ($pptteam == 'yes') {
				$pptteamname = $_POST['pptteamname'];
			}else{
				$pptteamname ='no';
			}
		}else{
			$pptteam = 'no';
			$pptteamname ='no';
		}
		if ($quiz == 'yes') {
			$quizteam = $_POST['quizteam'];
			if ($quizteam == 'yes') {
				$quizteamname = $_POST['quizteamname'];
			}else{
				$quizteamname ='no';
			}
		}else{
			$quizteam = 'no';
			$quizteamname ='no';
		}
		if ($debug == 'yes') {
			$debugteam = $_POST['debugteam'];
			if ($debugteam == 'yes') {
				$debugteamname = $_POST['debugteamname'];
			}else{
				$debugteamname = 'no';
			}
		}else{
			$debugteam = 'no';
			$debugteamname = 'no';
		}
		if ($market == 'yes') {
			$marketteam = $_POST['marketteam'];
			if ($marketteam == 'yes') {
				$marketteamname = $_POST['marketteamname'];
			}else{
				$marketteamname = 'no';
			}
		}else{
			$marketteam = 'no';
			$marketteamname = 'no';
		}
		if ($pstppt == 'yes') {
			$pstpptteam = $_POST['pstpptteam'];
			if ($pstpptteam == 'yes') {
				$pstpptteamname = $_POST['pstpptteamname'];
			}else{
				$pstpptteamname = 'no';
			}
		}else{
			$pstpptteam = 'no';
			$pstpptteamname = 'no';
		}
		if ($cultural == 'yes') {
			$culturalteam = $_POST['culturalteam'];
			if ($culturalteam == 'yes') {
				$culturalteamname = $_POST['culturalteamname'];
			}else{
				$culturalteamname = 'no';
			}
		}else{
			$culturalteam = 'no';
			$culturalteamname = 'no';
		}
		if ($cultural1 == 'yes') {
			$culturalteam1 = $_POST['culturalteam1'];
			if ($culturalteam1 == 'yes') {
				$culturalteamname1 = $_POST['culturalteamname1'];
			}else{
				$culturalteamname1 = 'no';
			}
		}else{
			$culturalteam1 = 'no';
			$culturalteamname1 = 'no';
		}

 		if (empty($fname) || empty($lname) || empty($roll) || empty($year)) {
			header("location:register.php?error=fillall&fname=".$fname."&lname=".$lname."&roll=".$roll);
			exit();
		}
		elseif (strlen($roll) < 8 || strlen($roll) > 8) {
			header("location:register.php?error=rollerror&fname=".$fname."&lname=".$lname);
			exit();
		}else{
			date_default_timezone_set('Asia/Kolkata');
			$currentTime = date( 'd-m-Y h:i:s A', time () );
			$sql="INSERT INTO student  VALUES ('','$fname','$lname','$roll','$year','$ppt','$pptteam','$pptteamname','$quiz','$quizteam','$quizteamname','$debug','$debugteam','$debugteamname','$market','$marketteam','$marketteamname','$pstppt','$pstpptteam','$pstpptteamname','$cultural','$culturalteam','$culturalteamname','$cultural1','$culturalteam1','$culturalteamname1','$currentTime')";
			if (mysqli_query($con, $sql)) {
    			header("Location:register.php?success");
    			exit();
			} else {
    			header("location:register.php?error=sqlerror&fname=".$fname."&lname=".$lname."&roll=".$roll);
			}

			mysqli_close($con);
					// $stmt = mysqli_stmt_init($con);
					// if(!mysqli_stmt_prepare($stmt,$sql)){
					// 	header("Location:register.php?error=sqlerror&fname=".$fname."&lname=".$lname."&roll=".$roll);
					// 	exit();
					// }else{
					// 	$stmt->bind_param("ssssssssssssssssssssss",);
					// 	mysqli_stmt_execute($stmt);
					// 	header("Location:register.php?success");
					// 	exit();
			// }
		}
	}
	else{
		header("location:index.php");
		exit();
	}

 ?>