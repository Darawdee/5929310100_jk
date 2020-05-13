<?session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ระบบสารสนเทศ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<?php


include "db_link.php";
include "menu.php";

if (isset($_POST["loginbtn"])) {
	$usrnme = $_POST['email']; //using email as usrname
	$pwd = $_POST['pwd'];
	$x = 1;
	
	//hash password, encript the password ($pwd) using hash function with sha256 encription
	$enpwd = hash('sha256',$pwd); 

		$sql = "SELECT id, name, e_mail, pdw 
				FROM user
				WHERE email = '$usrnme' AND (passwd = '$enpwd' OR passwd = '$pwd')";
		
		//echo $sql;
	$result = mysqli_query($conn, $sql);
	
		echo $result;

	/*if($x == 2) {
			//echo "เกิดข้อผิดพลาด กรุณาลองใหม่";
			echo "<script>alert('เกิดข้อผิดพลาด กรุณาลองใหม่');</script>";
	}
	else {
			if(mysqli_num_rows($result) == 1) {   
				$row = mysqli_fetch_array($result);
				//set all session values, could be more if necessary (can use object instead of array)
				$_SESSION['valid_id'] = $row["id"]; 
				$_SESSION['valid_fnme'] = $row["name"];  
				$_SESSION['valid_fnme'] = email["name"]; 
				
				 
				header("location: menu.php"); //set location to page menu.php
			}
			else {
				//echo "ท่านกำหนด Login หรือ Password ไม่ถูกต้อง";
				echo "<script>alert('ท่านกำหนด Login หรือ Password ไม่ถูกต้อง');</script>";
			}
	}*/
	mysqli_close($conn);
}
	
?>

<body>

<center><table>
<div class="container">
  <h2>ล็อกอินเข้าสู่ระบบ</h2>
  <form action="login.php" method="post">
    <div class="checkbox">
      <label for="email">Email:</label>
      <input type="email" class=""id="email" placeholder="Enter email" name="email" required> <!-- "required" means this field is required-->
    </div>
    <div class="form-group">
      <label for="pwd">รหัสผ่าน:</label>
      <input type="password"  id="pwd" placeholder="Enter password" name="pwd" required>
    </div>
	
    <input type="submit" class="btn btn-primary" name="loginbtn" value="เข้าสู่ระบบ">
  </form>
</div></center></table>

</body>
</html>