<?php 
   session_start();
   include "db_conn.php";
   if (isset($_SESSION['username']) ) {   ?>

<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>


	<!-- references -->
	<link href="https:/	/cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>
<body>
      <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
      		<div class="card" style="width: 18rem;">
			<a href = "category.php" class = "btn  btn-dark">Go to Category</a></br>
			<div class="mb-1">
				<span class = "change_password" ><a href = "Reset_password.php" target = "_blank" > You can change your Password here </a> </span>   
			</div>  
			
			</div>
      </div>
</body>
</html>
<?php }else{
	header("Location: index.php");
} ?>
