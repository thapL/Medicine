<?php
    $Medic_name = $_POST['Medic_name'];
    $Medic_quan   = $_POST['Medic_quan'];
    $Medic_Unit = $_POST['Medic_Unit'];
    $Medic_Id = $_POST['Medic_Id'];
    $Category_name = $_POST['Category_name'];
  include 'connect.php';

    $add = " INSERT INTO dbo.tb_Medic(Medic_name, Medic_quan,  Medic_Unit, Medic_Id,Category_name) VALUES ('$Medic_name','$Medic_quan','$Medic_Unit','$Medic_Id','$Category_name')";
    $result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "เพิ่มข้อมูลแล้ว";
        echo "<meta http-equiv='refresh' content='2; url=../index.php'>";
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
    }
    
 











?>