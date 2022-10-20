<?php
       
       $Medic_Id = $_POST['Medic_Id'];
       $Medic_Newquan   = $_POST['Medic_Newquan'];
     include 'connect.php';
 

    $add ="UPDATE  dbo.tb_Medic set Medic_quan = Medic_quan +'$Medic_Newquan' WHERE Medic_Id='$Medic_Id' "; // บวกจำนวนเพิ่มกับของเดิมในตาราง
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