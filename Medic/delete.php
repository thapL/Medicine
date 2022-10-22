<?php
$Medic_Id = $_GET['Medic_Id'];

 include 'connect.php';

    $add = "DELETE FROM dbo.tb_Medic WHERE Medic_Id='$Medic_Id'";

$result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "ลบข้อมูลแล้ว";
        echo"<mete http-equiv='refresh' content='1.5;url=../index.php'>";
        
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
        echo"ไม่สามารถลบข้อมูลได้";
    }   echo "<meta http-equiv='refresh' content='1.5; url=../index.php'>";
    ?>