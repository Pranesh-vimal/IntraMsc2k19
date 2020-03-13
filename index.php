<?php 

	session_start();
	if (isset($_SESSION['uname'])) {
		header("location:dashboard.php");
		exit();
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Msc - Intra Department Function</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet"> 
    <style type="text/css">
    	h3,body{
    		font-family: 'Lobster', cursive;
    	}
    	.buttons {
    text-align: center;
}

.btn-hover {
    width: 200px;
    font-size: 16px;
    color: #fff;
    cursor: pointer;
    margin: 20px;
    height: 55px;
    text-align:center;
    border: none;
    background-size: 300% 100%;

    border-radius: 50px;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}
.btn-hover:hover {
    background-position: 100% 0;
    moz-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    -webkit-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}

.btn-hover:focus {
    outline: none;
}

.btn-hover.color-3 {
    background-image: linear-gradient(to right, #667eea, #764ba2, #6B8DD6, #8E37D7);
    box-shadow: 0 4px 15px 0 rgba(116, 79, 168, 0.75);
}
.btn-hover.color-1 {
    background-image: linear-gradient(to right, #25aae1, #40e495, #30dd8a, #2bb673);
    box-shadow: 0 4px 15px 0 rgba(49, 196, 190, 0.75);
}
.btn-hover.color-2 {
    background-image: linear-gradient(to right, #f5ce62, #e43603, #fa7199, #e85a19);
    box-shadow: 0 4px 15px 0 rgba(229, 66, 10, 0.75);
}
.btn-hover.color-4 {
    background-image: linear-gradient(to right, #fc6076, #ff9a44, #ef9d43, #e75516);
    box-shadow: 0 4px 15px 0 rgba(252, 104, 110, 0.75);
}
.btn-hover.color-6 {
    background-image: linear-gradient(to right, #009245, #FCEE21, #00A8C5, #D9E021);
    box-shadow: 0 4px 15px 0 rgba(83, 176, 57, 0.75);
}
.btn-hover.color-7 {
    background-image: linear-gradient(to right, #6253e1, #852D91, #A3A1FF, #F24645);
    box-shadow: 0 4px 15px 0 rgba(126, 52, 161, 0.75);
}
.btn-hover.color-11 {
       background-image: linear-gradient(to right, #eb3941, #f15e64, #e14e53, #e2373f);  box-shadow: 0 5px 15px rgba(242, 97, 103, .4);
}

body{
	background-image: url("");
	background-size: cover;
}

    </style>
</head>
<body>
<?php 
	require 'header.php';
 ?>
 <div class="w3-panel"></div>
 <div class="w3-panel w3-padding w3-container">
 	<div class="w3-row w3-padding w3-panel">
 		<div class="w3-third w3-padding w3-panel w3-center">
		<div class="buttons">
 			<button  onclick="document.getElementById('id01').style.display='block'" class="btn-hover color-1">Paper Presentation</button>
 		</div>
 		</div>
 		<div id="id01" class="w3-modal w3-round-large">
  			<div class="w3-modal-content ">
    			<div class="w3-container w3-round-large w3-center">
      				<span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright w3-hover-text-red w3-hover-white w3-large w3-round-large">&times;</span>
      				<h3 class="w3-center w3-panel w3-text-red ">
      					Paper Presentation
      				</h3>
      				<p class="w3-center w3-xlarge">Staff Coordinator </p>
					<ul class="w3-center w3-panel w3-xlarge" style="list-style: none;">
						<li class="w3-large w3-center w3-panel w3-text-indigo">Mrs.M.Mangayarkarasi</li>
						<li class="w3-large w3-center w3-panel w3-text-indigo">Mrs.S.HamsaNandhini</li>
					</ul>
           <p class="w3-center w3-xlarge">Rules </p>
            <a class="w3-padding w3-center w3-panel w3-button w3-hover-green w3-round-large w3-red w3-text-white" href="destination/ppt.doc">Download Here</a>
   				 </div>
 			 </div>
		</div>
 		<div class="w3-third w3-padding w3-panel w3-center">
		<div class="buttons">
 			<button  onclick="document.getElementById('id02').style.display='block'" class="btn-hover color-2">Technical Quiz</button>
 		</div>
 		</div>
 		<div id="id02" class="w3-modal w3-round-large">
  			<div class="w3-modal-content ">
    			<div class="w3-container w3-round-large">
      				<span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright w3-hover-text-red w3-hover-white w3-large w3-round-large">&times;</span>
      				<h3 class="w3-center w3-text-red ">
      					Technical Quiz
      				</h3>
      				<p class="w3-center w3-xlarge">Staff Coordinator </p>
					<ul class="w3-center w3-panel w3-xlarge" style="list-style: none;">
						<li class="w3-large w3-center w3-panel w3-text-indigo">Mrs.T.Maragatham</li>
						<li class="w3-large w3-center w3-panel w3-text-indigo">Mrs.M.Pradeepa Meenakshi</li>
					</ul>
          <p class="w3-center w3-xlarge">Rules </p>
            <ul class="w3-panel w3-xlarge w3-center" style="list-style: none;">
            <li class="w3-large  w3-text-indigo">3 members per team</li>
            <li class="w3-large  w3-text-indigo">Prelims and final round will conducted based on selection from prelims</li>
          </ul>
   				 </div>
 			 </div>
		</div>
 		<div class="w3-third w3-padding w3-panel w3-center">
		<div class="buttons">
 			<button  onclick="document.getElementById('id03').style.display='block'" class="btn-hover color-4">Debugging</button>
 		</div>
 		</div>
 		<div id="id03" class="w3-modal w3-round-large">
  			<div class="w3-modal-content ">
    			<div class="w3-container w3-round-large">
      				<span onclick="document.getElementById('id03').style.display='none'" class="w3-button w3-display-topright w3-hover-text-red w3-hover-white w3-large w3-round-large">&times;</span>
      				<h3 class="w3-center w3-panel  w3-text-red ">
						Debugging
      				</h3>
      				<p class="w3-center w3-xlarge">Staff Coordinator </p>
					<ul class="w3-center w3-panel w3-xlarge" style="list-style: none;">
						<li class="w3-large w3-center w3-panel w3-text-indigo">Mrs.Malathi Eswaran</li>
						<li class="w3-large w3-center w3-panel w3-text-indigo">Mrs.P.Yuvarani</li>
					</ul>
          <p class="w3-center w3-xlarge">Rules </p>
            <ul class="w3-panel w3-xlarge w3-center" style="list-style: none;">
            <li class="w3-large  w3-text-indigo">Maximum 2 members per team</li>
            <li class="w3-large  w3-text-indigo">Any language can be used for compilation</li>
            <li class="w3-large  w3-text-indigo">Scenario will be given you should slove the problem</li>
          </ul>
   				 </div>
 			 </div>
		</div>
 		<div class="w3-third w3-padding w3-panel w3-center">
		<div class="buttons">
 			<button  onclick="document.getElementById('id04').style.display='block'" class="btn-hover color-6">Marketing</button>
 		</div>
 		</div>
 		<div id="id04" class="w3-modal w3-round-large">
  			<div class="w3-modal-content ">
    			<div class="w3-container w3-round-large">
      				<span onclick="document.getElementById('id04').style.display='none'" class="w3-button w3-display-topright w3-hover-text-red w3-hover-white w3-large w3-round-large">&times;</span>
      				<h3 class="w3-center w3-panel  w3-text-red ">
						Marketing
      				</h3>
      				<p class="w3-center w3-xlarge">Staff Coordinator </p>
					<ul class="w3-center w3-panel w3-xlarge" style="list-style: none;">
						<li class="w3-large w3-center w3-panel w3-text-indigo">Dr.P.Ananthi</li>
					</ul>
          <p class="w3-center w3-xlarge">Rules </p>
            <ul class="w3-panel w3-xlarge w3-center" style="list-style: none;">
            <li class="w3-large  w3-text-indigo">Onspot topic will be given(any product)</li>
            <li class="w3-large  w3-text-indigo">The product should be demonstrated and queries will be asked</li>
          </ul>
   				 </div>
 			 </div>
		</div>
 		<div class="w3-third w3-padding w3-panel w3-center">
		<div class="buttons">
 			<button  onclick="document.getElementById('id05').style.display='block'" class="btn-hover color-7">Poster Design</button>
 		</div>
 		</div>
 		<div id="id05" class="w3-modal w3-round-large">
  			<div class="w3-modal-content ">
    			<div class="w3-container w3-round-large">
      				<span onclick="document.getElementById('id05').style.display='none'" class="w3-button w3-display-topright w3-hover-text-red w3-hover-white w3-large w3-round-large">&times;</span>
      				<h3 class="w3-center w3-panel  w3-text-red ">
						Poster Design
      				</h3>
      				<p class="w3-center w3-xlarge">Staff Coordinator </p>
					<ul class="w3-center w3-panel w3-xlarge" style="list-style: none;">
						<li class="w3-large w3-center w3-panel w3-text-indigo">Mr.P.Thangaraj</li>
					</ul>
           <p class="w3-center w3-xlarge">Rules </p>
            <ul class="w3-panel w3-xlarge w3-center" style="list-style: none;">
            <li class="w3-large  w3-text-indigo">A theme is to be selected and posted is to be design </li>
            <li class="w3-large  w3-text-indigo">Presentation should be given on stage outlining the theme of poster</li>
          </ul>
   				 </div>
 			 </div>
		</div>
 		<div class="w3-third w3-padding w3-panel w3-center">
		<div class="buttons">
 			<button  onclick="document.getElementById('id06').style.display='block'" class="btn-hover color-11">Culturals</button>
 		</div>
 		</div>
 		<div id="id06" class="w3-modal w3-round-large">
  			<div class="w3-modal-content ">
    			<div class="w3-container w3-round-large">
      				<span onclick="document.getElementById('id06').style.display='none'" class="w3-button w3-display-topright w3-hover-text-red w3-hover-white w3-large w3-round-large">&times;</span>
      				<h3 class="w3-center w3-panel  w3-text-red ">
						Culturals
      				</h3>
      				<p class="w3-center w3-xlarge">Staff Coordinator </p>
					<ul class="w3-center w3-panel w3-xlarge" style="list-style: none;">
						<li class="w3-large w3-center w3-panel w3-text-indigo">Dr.G.R.Sreekanth</li>
						<li class="w3-large w3-center w3-panel w3-text-indigo">Mrs.C.Jamunadevi</li>
					</ul>
           <p class="w3-center w3-xlarge">Rules </p>
            <ul class="w3-panel w3-xlarge w3-center" style="list-style: none;">
            <li class="w3-large  w3-text-indigo">Solo and group singing</li>
            <li class="w3-large  w3-text-indigo">Solo and group dance</li>
             <li class="w3-large  w3-text-indigo">Note:For dance,song selection should be shown to the coordinators</li>
          </ul>
   				 </div>
 			 </div>
		</div>
 	</div>
 </div>
 <div class="buttons">
 	<button  onclick="location.href = 'register.php';" class="btn-hover color-3">Register</button>
 </div>
 <?php 
      require 'footer.php';
  ?>
</body>
</html>
<?php 
  
  if (!empty($_GET['file'])) {
    $filename = basename($_GET['file']);
    $filepath = 'destination/'.$filename;
    if (!empty($filename) && file_exists($filepath)) {
      header("Cache-Control: public");
      header("Content-Description: File Transfer");
      header("Content-Disposition: attachment; filename=$filename");
      header("Content-Transfer-Emcoding: binary");

      readfile($filepath);
      exit();
    }else{
      echo "This File Does not Exist";
    }
  }

 ?>