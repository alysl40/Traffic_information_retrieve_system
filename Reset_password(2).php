<?php
include "db_conn.php";
include "index.php";
if (isset($_POST['confirm_new_password']) && isset($_POST['original_password']) && isset($_POST['new_password'])) 
{
    
    $original_password = $_POST['original_password'];
    $new_password = $_POST['new_password'];
    $confirm_new_password = $_POST['confirm_new_password'];
    if ($new_password === $confirm_new_password) 
    {
        $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$original_password'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) 
        {
            $row = mysqli_fetch_row($result);
                if ($row['Password'] === $original_password) 
                {

                    // 问题 下面SQL语句不对
                    $sql = "UPDATE users SET Password =$new_password WHERE Username = $username";
                    $result = mysqli_query($conn, $sql);
                    echo "successfully";


                } 
                else 
                {
                    header("Location:../alysl40-20478393_InstallationFiles/Reset_password.php?error=Incorect User name or password");
                }
            } 
        else {
                header("Location:../alysl40-20478393_InstallationFiles/Reset_password.php?error=Incorect User name or password");
            }
        } 
    else {
            header("Location: ../alysl40-20478393_InstallationFiles/index.php?error=Incorect User name or password");
        }
    }











    // if (empty($new_password_username)) 
    // {


    //     header("Location:Reset_password.php.php?error=No inputs username from user");
    // } 
    // else 
    // {
    //     $original_password = $_POST['original_password'];
    //     $sql = "SELECT Username FROM users WHERE Username = '$new_password_username' ";
    //     $result = mysqli_query($conn, $sql);
    //     if (!empty($result)) 
    //     {
    //         // 执行将新改的密码输入数据库存储——改密码成功


    //     }

    // }




?>