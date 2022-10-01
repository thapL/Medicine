<?php
       
       $Medic_Id = $_POST['Medic_Id'];
       $Medic_Newquan   = $_POST['Medic_Newquan'];
  ini_set('display_errors', 1);
        error_reporting(~0);

            $serverName = "127.0.0.1";
            $userName = "";
            $userPassword = "";
            $dbName = "MediCin";

    $connectionInfo = array(
    "Database"=>$dbName,
    "UID"=>$userName,
    "PWD"=>$userPassword,
    "MultipleActiveResultSets"=>true,"CharacterSet"=>'UTF-8');

$connect = sqlsrv_connect( $serverName, $connectionInfo);

if($connect === FALSE)
{
    die( print_r( sqlsrv_errors(), true));
}
 

    $add ="UPDATE  dbo.tb_Medic set Medic_quan = Medic_quan +'$Medic_Newquan' WHERE Medic_Id='$Medic_Id' "; // บวกจำนวนเพิ่มกับของเดิมในตาราง
    $result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "เพิ่มข้อมูลแล้ว";
        echo "<meta http-equiv='refresh' content='2; url=show.php'>";
    }   
    else
    {
        die( print_r( sqlsrv_errors(), true));
    }
    
 











?>