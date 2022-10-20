<?php
    $employee_Id = $_POST['employee_Id'];
    $emp_name = $_POST['employee_name'];
    $departMent = $_POST['departMent'];
    $Position = $_POST['Position'];
    include 'connect.php';

    $add = " INSERT INTO dbo.tb_employee(employee_name,departMent,employee_Id,Position) 
    VALUES ('$emp_name',' $departMent',' $employee_Id ','$Position')";
    $result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "เพิ่มข้อมูลแล้ว";
        echo "<meta http-equiv='refresh' content='2; url=../showEmp.php'>";
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
    }
    
 











?>