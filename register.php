<?php 
   $fname = "";
   $lname = "";
   $roll = "";
    if (isset($_GET['error'])) {
        $fname = $_GET['fname'];
        $lname = $_GET['lname'];
        $roll = $_GET['roll'];
    } 
    session_start();
    if (isset($_SESSION['uname'])) {
        header("location:dashboard.php");
        exit();
    }
    ?>

<!DOCTYPE html>
<html>
<head>
	<title>Registeration - MSc Intra Department Function</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet"> 
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
 <div class="w3-panel"></div>
 <div class="w3-padding">
 	<div class="w3-panel w3-padding w3-center">
        <p class="w3-panel w3-padding w4-tag w3-text-red w3-white " >Registration Ends in :<span class="w3-text-blue" id="demo"></span></p>
        <h6 class="w3-text-white w3-center w3-tag w3-padding w3-round-large w3-red">Registeration </h6><br>
        <?php 
                    if (isset($_GET['error'])) { ?>
                        <div class="w3-container w3-center w3-tag w3-red w3-round-large w3-small w3-padding">
                    <?php
                        if ($_GET['error'] == "fillall") {
                            echo "Fill All Fields *";
                        } elseif ($_GET['error'] == "rollerror") {
                            echo "Enter A Valid Roll Number !";
                        }elseif ($_GET['error'] == "sqlerror") {
                            echo "Try Again Later *";
                        }
                    }elseif (isset($_GET['success'])) {?>
                            <div class="w3-container  w3-center w3-tag w3-red w3-round-large  w3-small w3-padding">
                            <?php
                            echo "Registered Successfully Inform Your Coordinator !";
                        }
                 ?>
             </div>
             </div>
        <form class="w3-center w3-panel " method="post" action="insert.php">
            <label class="w3-padding w3-panel w3-tag w3-indigo w3-round-large w3-center">First Name</label>
            <input class="w3-panel w3-padding w3-border w3-round-large" placeholder="Enter Your First Name" value="<?php echo $fname; ?>" autocomplete="off" type="text" name="fname"><br>
            <label class="w3-padding w3-panel w3-tag w3-indigo w3-round-large w3-center">Last Name</label>
            <input class="w3-panel w3-padding w3-border w3-round-large" placeholder="Enter Your Last Name" value="<?php echo $lname; ?>" autocomplete="off" type="text" name="lname"><br>
            <label class="w3-padding w3-panel w3-tag w3-indigo w3-round-large w3-center">&nbsp; Roll No. &nbsp; &nbsp; </label>
            <input class="w3-panel w3-padding w3-border w3-round-large" placeholder="Enter Your Roll No." value="<?php echo $roll; ?>" autocomplete="off" type="text" name="roll"><br>
             <label class="w3-padding w3-panel w3-tag w3-indigo w3-round-large w3-center">&nbsp; &nbsp; &nbsp;  Year&nbsp; &nbsp; &nbsp; </label>
            <select class="w3-panel w3-padding w3-border w3-round-large" style="width: 210px" name="year">
                <option value="1">1st Year </option>
                <option value="2">2nd Year </option>
                <option value="3">3rd Year </option>
                <option value="4">4th Year </option>
                <option value="5">5th Year </option>
            </select><br>
             <label class="w3-padding w3-panel w3-tag w3-indigo w3-round-large w3-center">&nbsp; &nbsp; &nbsp;  Events&nbsp; &nbsp; &nbsp; </label><br>
             <div class="w3-padding">
                 <span class="w3-padding w3-panel w3-tag w3-red w3-round-large">&nbsp;  Paper Presentation</span><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Joining : </label> 
                 <select class="w3-panel w3-padding w3-border w3-round-large"  name="ppt">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Team : </label> 
                <select class="w3-panel w3-padding w3-border w3-round-large" id="pptteam"  name="pptteam">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <input class="w3-panel w3-padding w3-border w3-round-large" id="pptteamname"  type="text" name="pptteamname" disabled placeholder="Enter Your Team Name">
                 <p class="w3-tiny w3-text-red" style="margin-top: -10px;"><b>Please Enter A Correct Team Name *</b></p>
             </div>
              <div class="w3-padding">
                <span class="w3-padding  w3-tag w3-red w3-round-large">&nbsp; &nbsp; &nbsp; Technical Quiz&nbsp; &nbsp;&nbsp;  </span><br>
                <label class="w3-padding w3-panel w3-tag w3-round-large">Joining : </label> 
                 <select class="w3-panel w3-padding w3-border w3-round-large"  name="quiz">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Team : </label> 
                <select class="w3-panel w3-padding w3-border w3-round-large" id="quizteam"  name="quizteam">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <input class="w3-panel w3-padding w3-border w3-round-large" id="quizteamname"  type="text" name="quizteamname" disabled placeholder="Enter Your Team Name">
                 <p class="w3-tiny w3-text-red" style="margin-top: -10px;"><b>Please Enter A Correct Team Name *</b></p>
             </div>
              <div class="w3-padding">
                 <span class="w3-padding  w3-tag w3-red w3-round-large">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  Debugging&nbsp; &nbsp; &nbsp; &nbsp; </span><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Joining : </label> 
                 <select class="w3-panel w3-padding w3-border w3-round-large"  name="debug">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Team : </label> 
                <select class="w3-panel w3-padding w3-border w3-round-large" id="debugteam"  name="debugteam">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <input class="w3-panel w3-padding w3-border w3-round-large" id="debugteamname"  type="text" name="debugteamname" disabled placeholder="Enter Your Team Name">
                 <p class="w3-tiny w3-text-red" style="margin-top: -10px;"><b>Please Enter A Correct Team Name *</b></p>
             </div>
              <div class="w3-padding">
                 <span class="w3-padding  w3-tag w3-red w3-round-large">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Marketing&nbsp; &nbsp; &nbsp; &nbsp; </span><br>
                <label class="w3-padding w3-panel w3-tag w3-round-large">Joining : </label> 
                 <select class="w3-panel w3-padding w3-border w3-round-large"  name="market">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Team : </label> 
                <select class="w3-panel w3-padding w3-border w3-round-large" id="marketteam"  name="marketteam">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <input class="w3-panel w3-padding w3-border w3-round-large" id="marketteamname"  type="text" name="marketteamname" disabled placeholder="Enter Your Team Name">
                 <p class="w3-tiny w3-text-red" style="margin-top: -10px;"><b>Please Enter A Correct Team Name *</b></p>
             </div>
              <div class="w3-padding">
                 <span class="w3-padding  w3-tag w3-red w3-round-large">Poster Design</span><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Joining : </label> 
                 <select class="w3-panel w3-padding w3-border w3-round-large"  name="pstppt">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Team : </label> 
                <select class="w3-panel w3-padding w3-border w3-round-large" id="pstpptteam"  name="pstpptteam">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <input class="w3-panel w3-padding w3-border w3-round-large" id="pstpptteamname"  type="text" name="pstpptteamname" disabled placeholder="Enter Your Team Name">
                 <p class="w3-tiny w3-text-red" style="margin-top: -10px;"><b>Please Enter A Correct Team Name *</b></p>
             </div>
              <div class="w3-padding">
                 <span class="w3-padding  w3-tag w3-red w3-round-large">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Culturals&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  </span><br>
                <label class="w3-padding w3-panel w3-tag w3-round-large">Singing : </label> 
                 <select class="w3-panel w3-padding w3-border w3-round-large"  name="cultural">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Team : </label> 
                <select class="w3-panel w3-padding w3-border w3-round-large" id="culturalteam"  name="culturalteam">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <input class="w3-panel w3-padding w3-border w3-round-large" id="culturalteamname"  type="text" name="culturalteamname" disabled placeholder="Enter Your Team Name">
                 <p class="w3-tiny w3-text-red" style="margin-top: -10px;"><b>Please Enter A Correct Team Name *</b></p>
                  <label class="w3-padding w3-panel w3-tag w3-round-large">Dance : </label> 
                 <select class="w3-panel w3-padding w3-border w3-round-large"  name="cultural1">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <label class="w3-padding w3-panel w3-tag w3-round-large">Team : </label> 
                <select class="w3-panel w3-padding w3-border w3-round-large" id="culturalteam1"  name="culturalteam1">
                     <option value="no">No</option>
                     <option value="yes">Yes</option>
                 </select><br>
                 <input class="w3-panel w3-padding w3-border w3-round-large" id="culturalteamname1"  type="text" name="culturalteamname1" disabled placeholder="Enter Your Team Name">
                 <p class="w3-tiny w3-text-red" style="margin-top: -10px;"><b>Please Enter A Correct Team Name *</b></p>
             </div><br>
             <input class=" w3-padding w3-padding w3-border w3-button w3-hover-green w3-blue w3-round-large" type="submit" name="submit" value="Register">
        </form>
        
    </div>
 </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
 <script type="text/javascript">
     $('#pptteam').on('change', function(e){
    if($(this).val() == "yes") 
        $('#pptteamname').prop('disabled', false);
    else 
        $('#pptteamname').prop('disabled', true);
});

     $('#quizteam').on('change', function(e){
    if($(this).val() == "yes") 
        $('#quizteamname').prop('disabled', false);
    else 
        $('#quizteamname').prop('disabled', true);
});

     $('#debugteam').on('change', function(e){
    if($(this).val() == "yes") 
        $('#debugteamname').prop('disabled', false);
    else 
        $('#debugteamname').prop('disabled', true);
});

     $('#marketteam').on('change', function(e){
    if($(this).val() == "yes") 
        $('#marketteamname').prop('disabled', false);
    else 
        $('#marketteamname').prop('disabled', true);
});

     $('#pstpptteam').on('change', function(e){
    if($(this).val() == "yes") 
        $('#pstpptteamname').prop('disabled', false);
    else 
        $('#pstpptteamname').prop('disabled', true);
});

     $('#culturalteam').on('change', function(e){
    if($(this).val() == "yes") 
        $('#culturalteamname').prop('disabled', false);
    else 
        $('#culturalteamname').prop('disabled', true);
});

     $('#culturalteam1').on('change', function(e){
    if($(this).val() == "yes") 
        $('#culturalteamname1').prop('disabled', false);
    else 
        $('#culturalteamname1').prop('disabled', true);
});
var countDownDate = new Date("Sept 5, 2019 00:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
    $('form').submit(function(){
    $(this).children('input[type=submit]').prop('disabled', true);
});
  }
}, 1000);
 </script>
 <?php 
    require 'footer.php';
  ?>
</body>
</html>