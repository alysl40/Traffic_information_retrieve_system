<?php  
session_start();
include "../alysl40-20478393_InstallationFiles/db_conn.php";
if (isset($_POST['username']) && isset($_POST['password']) ) 
{

	// references 
	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}

	$username = test_input($_POST['username']);
	$password = test_input($_POST['password']);

	if (empty($username)) 
	{
		header("Location: ../alysl40-20478393_InstallationFiles/index.php?error=User Name is Required");
	}
	else if (empty($password)) {
		header("Location: ../alysl40-20478393_InstallationFiles/index.php?error=Password is Required");
	}
	else {

        
        $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) 
		{
        	$row = mysqli_fetch_assoc($result);
        	if ($row['Password'] === $password ) 
			{
        		$_SESSION['name'] = $row['name'];
        		$_SESSION['id'] = $row['id'];
        		$_SESSION['username'] = $row['Username'];

        		header("Location: ../alysl40-20478393_InstallationFiles/home.php");

        	}
			else 
			{
        		header("Location: ../alysl40-20478393_InstallationFiles/index.php?error=Incorect User name or password");
        	}
        }
		else 
		{
        	header("Location: ../alysl40-20478393_InstallationFiles/index.php?error=Incorect User name or password");
        }

	}
	
}
else 
{
	header("Location: ../alysl40-20478393_InstallationFiles/index.php");
}