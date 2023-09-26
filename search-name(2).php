<?php
session_start();
include "db_conn.php";
// include "check-login.php";
$search_name_licence_number=$_POST["name-or-driving-licence-number"];

// <!-- references -->

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }



if (isset($_POST["name-or-driving-licence-number"]))
// if ($search_name_licence_number) 
{
    $search_name_licence_number = test_input($_POST['name-or-driving-licence-number']);
    if (empty($search_name_licence_number)) 
    {


        header("Location:../alysl40-20478393_InstallationFiles/search by name.php?error=No inputs from user");
    } 
    else 
    {
        $sql = "SELECT * from People where People_name like '%$search_name_licence_number%' or People_licence like '%$search_name_licence_number%'  ";
        $result = mysqli_query($conn, $sql);
        $rows_number = mysqli_num_rows($result);
        $columns_number = mysqli_num_fields($result);
?>
        echo  <div align-center >
        <label >The results of all matches are as follows:</label>
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
                for ($y = 0; $y <= $rows_number +1; $y++) 
                {
                    echo ("$row[$y]") ; 
                    if ($y == 3) 
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
         header("Location: ../alysl40-20478393_InstallationFiles/search by name.php?error=No person with that details");
        
    }


?>