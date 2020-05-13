<!DOCTYPE html>
<html lang="en">
<head>
  <title>Health Care System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="hospital-icon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<?php 
  session_start();//start session
	$id = $_SESSION['valid_id'];	
	$fnme = $_SESSION['valid_fnme'];
	$lnme = $_SESSION['valid_lnme'];
	$utype = $_SESSION['valid_utype'];
?>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">HOME</a>
    </div>

    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Services</a></li>
        <li><a href="#">News</a></li>
        <?php
          if($utype==1) { //if the login user is staff/admin
            echo"  
                <li class='dropdown'>
                <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Patients <span class='caret'></span></a>
                <ul class='dropdown-menu'>
                  <li><a href='insertPatientForm.php'>Add new ...</a></li>
                  <li><a href='showPatients.php'>Show all</a></li>
                  <li><a href='showFindPatients.php'>Search & Show</a></li>
                   <li><a href='rptPatientSmry.php'>Report 1</a></li>
                   <li><a href='rptPatientSmry2.php'>Report 2</a></li>
                   <li><a href='rptPatientBySxNat.php'>Report 3</a></li>
                </ul>
                </li>
              ";
              
            echo " 
              <li class='dropdown'>
              <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Staffs <span class='caret'></span></a>
              <ul class='dropdown-menu'>
                <li><a href='insertStaffForm.php'>Add new ...</a></li>
                <li><a href='showstaff.php'>Show all</a></li>
                <li><a href='showFindStaff.php'>Search & Show</a></li>
				<li><a href='rptStaffSmry.php'>Report 1</a></li>
                   <li><a href='rptStaffSmry2.php'>Report 2</a></li>
                   <li><a href='rptStaffBySxNat.php'>Report 3</a></li>
              </ul>
              </li>
             ";
          }
        ?>
        <li><a href="#">Register</a></li>
        <li><a href="http://172.18.111.30/user12/resume/myresume.html">Contact</a></li>
        <li><a href="#">About</a></li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        <?php
           if($id=="") { //no login
              echo "<li><a href='login.php'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>";
           } else {  //logined
             if($utype==1)
                 echo "<li><a href='editStaffForm.php?id=".$id."'><span class='glyphicon glyphicon-user'></span> ".$fnme."</a></li>";
             else if($utype==3)
                 echo "<li><a href='editPatientForm.php?id=".$id."'><span class='glyphicon glyphicon-user'></span> ".$fnme."</a></li>";
             
             echo "<li><a href='logout.php'><span class='glyphicon glyphicon-log-out'></span> Logout</a></li>";
          }
        ?>
      </ul>

    </div>
  </div>
</nav>
  
<div class="container">

</div>

</body>
</html>