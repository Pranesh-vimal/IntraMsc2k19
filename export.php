<?php 

require 'db.php';

if(isset($_GET['export'])){
if($_GET['export'] !== ''){
	$field = $_GET['export'];
	if ($field !== 'cultural') {
      $sql = "SELECT * from student where $field = 'yes' ORDER BY year Asc";
      $result = mysqli_query($con,$sql);
  	}elseif ($field == 'cultural') {
      $sql = "SELECT * from student where $field = 'yes' or cultural1 = 'yes' ORDER BY year Asc";
      $result = mysqli_query($con,$sql);
  	}
 
 
    $delimiter = ",";
    $filename = "significant_" . date('Ymd') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    if ($field !== 'cultural') {
    	$fields = array('First Name', 'Last Name', 'Roll No', 'Year','Team','Team Name');
	}elseif ($field == 'cultural') {
		$fields = array('First Name', 'Last Name', 'Roll No', 'Year','Singing','Team','Team Name','Dance','Team','Team Name');
	}
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    if ($field == 'ppt') {
    	while($row = mysqli_fetch_assoc($result)){
        
        $lineData = array($row['fname'], $row['lname'], $row['roll'], $row['year'], $row['pptteam'],$row['pptteamname']);
        fputcsv($f, $lineData, $delimiter);
    }
    }
    if ($field == 'quiz') {
    	while($row = mysqli_fetch_assoc($result)){
        
        $lineData = array($row['fname'], $row['lname'], $row['roll'], $row['year'], $row['quizteam'],$row['quizteamname']);
        fputcsv($f, $lineData, $delimiter);
    }
    }
    if ($field == 'debug') {
    	while($row = mysqli_fetch_assoc($result)){
        
        $lineData = array($row['fname'], $row['lname'], $row['roll'], $row['year'], $row['debugteam'],$row['debugteamname']);
        fputcsv($f, $lineData, $delimiter);
    }
    }
    if ($field == 'market') {
    	while($row = mysqli_fetch_assoc($result)){
        
        $lineData = array($row['fname'], $row['lname'], $row['roll'], $row['year'], $row['marketteam'],$row['marketteamname']);
        fputcsv($f, $lineData, $delimiter);
    }
    }
    if ($field == 'postppt') {
    	while($row = mysqli_fetch_assoc($result)){
        
        $lineData = array($row['fname'], $row['lname'], $row['roll'], $row['year'], $row['pstpptteam'],$row['pstpptteamname']);
        fputcsv($f, $lineData, $delimiter);
    }
    }
    if ($field == 'cultural') {
    	while($row = mysqli_fetch_assoc($result)){
        
        $lineData = array($row['fname'], $row['lname'], $row['roll'], $row['year'],$row['cultural'], $row['culturalteam'],$row['culturalteamname'],$row['cultural1'], $row['culturalteam1'],$row['culturalteamname1']);
        fputcsv($f, $lineData, $delimiter);
    }
    }
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
 	
 }
}

 ?>