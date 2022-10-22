<?php
$Medic_Id = $_POST['Medic_Id'];
$Medic_name = $_POST['Medic_name'];
$Medic_quan  = $_POST['Medic_quan'];
$Medic_Unit = $_POST['Medic_Unit'];
$Category_name = $_POST['Category_name'];

  include 'connect.php';
    $add = "UPDATE dbo.tb_Medic SET  Medic_name='$Medic_name',
                                     Medic_quan='$Medic_quan',
                                     Medic_Unit='$Medic_Unit',
                                     Category_name='$Category_name'
                                     WHERE Medic_Id='$Medic_Id' ";

$result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "แก้ไขข้อมูลแล้ว";
        echo "<meta http-equiv='refresh' content='2; url=../index.php'>";
    }
    else
    {
        echo "ไม่สามารถแก้ไขข้อมูลได้";
         echo "<meta http-equiv='refresh' content='2; url=../index.php'>";
    
        die( print_r( sqlsrv_errors(), true));
    }
    
 











?>