<?php
session_start();
include "db_conn.php";
// include "check-login.php";
$vehicle_registration_number = $_POST["vehicle-registration-number"];


// <!-- references -->
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



  if (isset($_POST["vehicle-registration-number"]))
  {
    $vehicle_registration_number = test_input($_POST['vehicle-registration-number']);
      if (empty($vehicle_registration_number)) 
      {
  
  
          header("Location:../alysl40-20478393_InstallationFiles/search a car.php?error=No inputs from user");
      } 
      else 
      {  
        
        
        
        //pengding  I can't achieve this function!
          $sql = "SELECT Vehicle_ID,Vehicle_type,Vehicle_colour,Vehicle_licence,People_ID,People_name,People_licence from Vehicle where Vehicle_licence like '%$vehicle_registration_number%'  ";
          $result = mysqli_query($conn, $sql);
        //   $rows_number = mysqli_num_rows($result);
        //   $columns_number = mysqli_num_fields($result);
  ?>
          echo  <div align-center >
          <label >The results of all matches are as follows:</label></br>
          <label> Vehicle_ID Vehicle_type Vehicle_colour Vehicle_licence People_ID People_name People_licence</label>
                  </div>
          <?php
  
  
  
  
          // 无匹配结果时，无法返回提示
          if (empty($result))
          {
              echo ("Sorry, no relevant information");
          } 
          else 
          {
              while ($row = mysqli_fetch_row($result)) 
              {
  
  
  
  
                  
          // 结果输出有问题，有时候会少输出
                  for ($y = 0; $y <= 6; $y++) 
                  {
                      echo ("$row[$y]            ") ; 
                      if ($y == 6) 
                      {?>
                          </br>
                          <?php
                      }
  
                  }
                  
              }
          }
  
      }
  }
  else 
      {
           header("Location:../alysl40-20478393_InstallationFiles/search a car.php?error=No person with that details");
          
      }
  
  
  ?>