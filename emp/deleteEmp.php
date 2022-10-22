<?php
$employee_Id = $_GET['employee_Id'];

 include 'connect.php';

    $add = "DELETE FROM dbo.tb_employee WHERE employee_Id='$employee_Id'";

$result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "ลบข้อมูลแล้ว";
       echo"<mete http-equiv='refresh' content='2;url=../showEmp.php'>";
        
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
        echo"ไม่สามารถลบข้อมูลได้";
    }   echo "<meta http-equiv='refresh' content='2; url=../showEmp.php'>";
    ?>