<?php
include "db_conn.php";
if (isset($_POST['Enter-details-for-a-new-vehicle-nameofowner'])) 
    {
        $a_new_vehicle_nameofowner = $_POST['Enter-details-for-a-new-vehicle-nameofowner'];
        $sql = "SELECT People_name FROM People WHERE People_name = '$a_new_vehicle_nameofowner'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_fetch_row($result) == 0) 
        {
            $a_new_vehicle_newVehiclelicence = $_POST['Enter-details-for-a-new-vehicle-newVehiclelicence'];
            $a_new_vehicle_themakeofanewvehicle = $_POST['Enter-details-for-a-new-vehicle-themakeofanewvehicle'];
            $a_new_vehicle_themodelofanewvehicle = $_POST['Enter-details-for-a-new-vehicle-themodelofanewvehicle'];
            $a_new_vehicle_thecolourofanewvehicle = $_POST['Enter-details-for-a-new-vehicle-thecolourofanewvehicle'];
            $sql1 = "INSERT INTO People(People_name) VALUES ($a_new_vehicle_nameofowner)";
            $sql2 = "INSERT INTO Vehicle(Vehicle_licence,Vehicle_make,Vehicle_model,Vehicle_colour) VALUES ($a_new_vehicle_newVehiclelicence,$a_new_vehicle_themakeofanewvehicle,$a_new_vehicle_themodelofanewvehicle,$a_new_vehicle_thecolourofanewvehicle )";
            $result1 = mysqli_query($conn, $sql1);
            $result2 = mysqli_query($conn, $sql2);
            if (!empty($result1) && !empty($result2)) 
            {
                echo "insert successfully!";
                exit();
            }
            else 
            {
                echo "insert successfully!";
                exit();
            }
        } 
        else 
        {   
            $a_new_vehicle_newVehiclelicence = $_POST['Enter-details-for-a-new-vehicle-newVehiclelicence'];
            $a_new_vehicle_themakeofanewvehicle = $_POST['Enter-details-for-a-new-vehicle-themakeofanewvehicle'];
            $a_new_vehicle_themodelofanewvehicle = $_POST['Enter-details-for-a-new-vehicle-themodelofanewvehicle'];
            $a_new_vehicle_thecolourofanewvehicle = $_POST['Enter-details-for-a-new-vehicle-thecolourofanewvehicle'];
            $sql3 = "";
            //daiding buhui 
            
        }

    }
else 
    {
        header("Location: ../alysl40-20478393_InstallationFiles/index.php?error=no input from users");
    }





?>