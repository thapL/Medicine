<?php

$employee_Id = $_POST['employee_Id'];
$employee_name = $_POST['employee_name'];
$departMent = $_POST['departMent'];
$Position = $_POST['Position'];

  include 'connect.php';
    $add = "UPDATE dbo.tb_employee SET   employee_name='$employee_name',
                                         departMent='$departMent',
                                         Position='$Position'
                                         WHERE employee_Id='$employee_Id' ";

$result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "แก้ไขข้อมูลแล้ว";
        echo "<meta http-equiv='refresh' content='2; url=../showEmp.php'>";
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
    }
    
 











?>