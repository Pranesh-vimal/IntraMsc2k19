<?php 
	
	require 'db.php';
	session_start();
	if (isset($_SESSION['uname'])) {
		$field = $_SESSION['field'];
	}else{
		header("location:index.php");
		exit();
	}
  if ($field !== 'cultural') {
      $sql = "SELECT * from student where $field = 'yes' ORDER BY year Asc";
      $result = mysqli_query($con,$sql);
  }elseif ($field == 'cultural') {
      $sql = "SELECT * from student where $field = 'yes' or cultural1 = 'yes' ORDER BY year Asc";
      $result = mysqli_query($con,$sql);
  }
	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Dashboard - MSc Intra Department Function</title>
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> 
    <style type="text/css">
    	body{
    		font-family: 'Varela Round', sans-serif;
    	}

        input:focus, textarea:focus, select:focus{
        outline: none;
    }
    </style>
 </head>
 <body>
 <?php 
 	require 'header.php';
  ?>
  <div class="w3-panel w3-padding-32">
  	
  </div>
  <div class="w3-panel w3-red w3-hide-large w3-display-container">
  <span onclick="this.parentElement.style.display='none'"
  class="w3-button w3-large w3-display-topright">&times;</span>
  <h3>Alert!</h3>
  <p>Open In Desktop Site For Better View</p>
</div>
<div class="w3-container w3-right w3-padding w3-panel">
  <a class="w3-padding w3-button w3-round-large w3-green w3-text-white w3-hover-blue" href="export.php?export=<?php echo $field; ?>">Export</a>
</div>
      <div class="w3-card-4 w3-padding w3-round-large">
        <p class="w3-center w3-panel w3-padding w3-text-blue"><?php if ($field == 'ppt') {
          echo "Paper Presentation";
        }elseif ($field == 'quiz') {
          echo "Technical Quiz";
        }elseif ($field == 'debug') {
          echo "Debugging";
        }elseif ($field == 'market') {
          echo "Marketing";
        }elseif ($field == 'postppt') {
          echo "Poster Design";
        }elseif ($field == 'cultural') {
          echo "Cultural";
        } ?></p>

             <?php 
            if ($field == 'ppt') {?>
              <div class="w3-padding w3-center w3-responsive">
            <table class="w3-table-all w3-hoverable ">
            <thead>
              <tr class="w3-red ">
                <th class="w3-center">First Name</th>
                <th class="w3-center">Last Name</th>
                <th class="w3-center">Roll No.</th>
                <th class="w3-center">Year</th>
                <th class="w3-center">Team</th>
                <th class="w3-center">Team Name</th>
                </tr>
             </thead>
             <?php
              if (mysqli_num_rows($result)) {
              while ($rows = mysqli_fetch_assoc($result)) {  
            ?>
            <tr>
                <td class="w3-center"><?php echo ucwords($rows['fname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['lname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['roll']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['year']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['pptteam']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['pptteamname']); ?></td>                
              </tr>
              <?php 
                }
              } 
             } 
               ?>
              <?php 
            if ($field == 'quiz') {?>
              <div class="w3-padding w3-center w3-responsive">
            <table class="w3-table-all w3-hoverable ">
            <thead>
              <tr class="w3-red ">
                <th class="w3-center">First Name</th>
                <th class="w3-center">Last Name</th>
                <th class="w3-center">Roll No.</th>
                <th class="w3-center">Year</th>
                <th class="w3-center">Team</th>
                <th class="w3-center">Team Name</th>
                </tr>
             </thead>
             <?php
              if (mysqli_num_rows($result)) {
              while ($rows = mysqli_fetch_assoc($result)) {  
            ?>
            <tr>
                <td class="w3-center"><?php echo ucwords($rows['fname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['lname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['roll']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['year']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['quizteam']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['quizteamname']); ?></td>                
              </tr>
              <?php 
                }
              } 
             } 
               ?> 

               <?php 
            if ($field == 'debug') {?>
              <div class="w3-padding w3-center w3-responsive">
            <table class="w3-table-all w3-hoverable ">
            <thead>
              <tr class="w3-red ">
                <th class="w3-center">First Name</th>
                <th class="w3-center">Last Name</th>
                <th class="w3-center">Roll No.</th>
                <th class="w3-center">Year</th>
                <th class="w3-center">Team</th>
                <th class="w3-center">Team Name</th>
                </tr>
             </thead>
             <?php
              if (mysqli_num_rows($result)) {
              while ($rows = mysqli_fetch_assoc($result)) {  
            ?>
            <tr>
                <td class="w3-center"><?php echo ucwords($rows['fname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['lname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['roll']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['year']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['debugteam']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['debugteamname']); ?></td>                
              </tr>
              <?php 
                }
              } 
             } 
               ?> 

               <?php 
            if ($field == 'market') {?>
              <div class="w3-padding w3-center w3-responsive">
            <table class="w3-table-all w3-hoverable ">
            <thead>
              <tr class="w3-red ">
                <th class="w3-center">First Name</th>
                <th class="w3-center">Last Name</th>
                <th class="w3-center">Roll No.</th>
                <th class="w3-center">Year</th>
                <th class="w3-center">Team</th>
                <th class="w3-center">Team Name</th>
                </tr>
             </thead>
             <?php
              if (mysqli_num_rows($result)) {
              while ($rows = mysqli_fetch_assoc($result)) {  
            ?>
            <tr>
                <td class="w3-center"><?php echo ucwords($rows['fname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['lname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['roll']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['year']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['marketteam']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['marketteamname']); ?></td>                
              </tr>
              <?php 
                }
              } 
             } 
               ?> 

               <?php 
            if ($field == 'postppt') {?>
              <div class="w3-padding w3-center w3-responsive">
            <table class="w3-table-all w3-hoverable ">
            <thead>
              <tr class="w3-red ">
                <th class="w3-center">First Name</th>
                <th class="w3-center">Last Name</th>
                <th class="w3-center">Roll No.</th>
                <th class="w3-center">Year</th>
                <th class="w3-center">Team</th>
                <th class="w3-center">Team Name</th>
                </tr>
             </thead>
             <?php
              if (mysqli_num_rows($result)) {
              while ($rows = mysqli_fetch_assoc($result)) {  
            ?>
            <tr>
                <td class="w3-center"><?php echo ucwords($rows['fname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['lname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['roll']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['year']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['pstpptteam']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['pstpptteamname']); ?></td>                
              </tr>
              <?php 
                }
              } 
             } 
               ?> 

                <?php 
            if ($field == 'cultural') {?>
              <div class="w3-padding w3-center w3-responsive">
            <table class="w3-table-all w3-hoverable ">
            <thead>
              <tr class="w3-red ">
                <th class="w3-center">First Name</th>
                <th class="w3-center">Last Name</th>
                <th class="w3-center">Roll No.</th>
                <th class="w3-center">Year</th>
                <th class="w3-center">Singing</th>
                <th class="w3-center">Team</th>
                <th class="w3-center">Team Name</th>
                <th class="w3-center">Dance</th>
                <th class="w3-center">Team</th>
                <th class="w3-center">Team Name</th>
                </tr>
             </thead>
             <?php
              if (mysqli_num_rows($result)) {
              while ($rows = mysqli_fetch_assoc($result)) {  
            ?>
            <tr>
                <td class="w3-center"><?php echo ucwords($rows['fname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['lname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['roll']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['year']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['cultural']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['culturalteam']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['culturalteamname']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['cultural1']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['culturalteam1']); ?></td>
                <td class="w3-center"><?php echo ucwords($rows['culturalteamname1']); ?></td>                
              </tr>
              <?php 
                }
              } 
             } 
               ?> 
          </table>
        </div>
      </div>  
  <div class="w3-panel w3-padding w3-center">
    <form method="post" action="logout.php">
       <input class="w3-center w3-padding w3-button w3-red w3-round-large w3-hover-green" type="submit" name="logout" value="Logout">
    </form>
  </div>
 </body>
 </html>