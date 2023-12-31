<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>multi-user role-based-login-system</title>


	<!-- reference -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>


	<!-- reference -->
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"
      	      action="check-login.php" 
      	      method="post" 
      	      style="width: 450px;">



      	      <h1 class="text-center p-3">Log In System </h1>
      	      <?php if (isset($_GET['error'])) { ?>
      	      <div class="alert alert-danger" role="alert">
				  <?= $_GET['error'] ?>
			  </div>
			  <?php } ?>
		  <div class="mb-3">
		    <label for="username" 
		           class="form-label">User name</label>
		    <input type="text" 
		           class="form-control" 
		           name="username" 
		           id="username">
		  </div>
		  <div class="mb-3">
		    <label for="password" 
		           class="form-label">Pass word</label>
		    <input type="password" 
		           name="password" 
		           class="form-control" 
		           id="password">
		  </div>
		  
		  
		  <button type="submit" 
		          class="btn btn-primary">LOGIN</button>
		</form>
      </div>
</body>
</html>
