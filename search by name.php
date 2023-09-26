<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title>multi-user role-based-login-system</title>

    <!-- references -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>

    <!-- references -->
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
      	<form class="border shadow p-3 rounded"



      	      action="search-name(2).php" 
      	      method="post" 
      	      style="width: 450px;">
            <h1 class="text-center p-3">Search system </h1>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>
            <?php } ?>

            <div class="mb-3">
                <input type="text" 
                    name="name-or-driving-licence-number" 
                    class="form-control" 
                    



                    id="name-or-driving-licence"
                    placeholder="Please enter name or driving licence number "
                >
                
                <button type="submit" class="btn btn-primary" >Search</button>    
            </div>
        </form>
</body>
</html>


