<?php
?>
<!DOCTYPE html>
<html>
<head>

    <!-- references -->
	<title>Enter-details-for-a-new-vehicle-system</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">


</head>
<body>

        <!-- references -->
      <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">


      	<form class="border shadow p-3 rounded"
      	      action="Enter details for a new vehicle(2).php" 
      	      method="post" 
      	      style="width: 450px;">
            <h1 class="text-center p-3">Search system </h1>
            <?php if (isset($_GET['error'])) { ?>
            <div class="alert alert-danger" role="alert">
                <?=$_GET['error']?>
            </div>
            <?php } ?>
            <div class = "content">
                    <div class="mb-3">
                            <label for="password" 
                                class="form-label">Please enter name of owner:</label>
                            <input type="text" 
                                name="Enter-details-for-a-new-vehicle-nameofowner" 
                                class="form-control" 
                                >
                    </div>
                        
                    <div class="mb-3">
                        <label for="password" 
                            class="form-label">Please enter the new Vehicle_licence:</label>
                        <input type="password" 
                            name="Enter-details-for-a-new-vehicle-newVehiclelicence" 
                            class="form-control" 
                            id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password" 
                            class="form-label">Please enter the make of a new vehicle:</label>
                        <input type="password" 
                            name="Enter-details-for-a-new-vehicle-themakeofanewvehicle" 
                            class="form-control" 
                            id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password" 
                            class="form-label">Please enter the model of a new vehicle:</label>
                        <input type="password" 
                            name="Enter-details-for-a-new-vehicle-themodelofanewvehicle" 
                            class="form-control" 
                            id="password">
                    </div>
                    <div class="mb-3">
                        <label for="password" 
                            class="form-label">Please enter the colour of a new vehicle:</label>
                        <input type="password" 
                            name="Enter-details-for-a-new-vehicle-thecolourofanewvehicle" 
                            class="form-control" 
                            id="password">
                    </div>

                <button type="submit" class="btn btn-primary">Search</button>  
            </div>
        </form>
        </div>
</body>
</html>

