<?php
    $Medic_name = $_POST['Medic_name'];
    $Medic_quan   = $_POST['Medic_quan'];
    $Medic_Unit = $_POST['Medic_Unit'];
    $Medic_Id = $_POST['Medic_Id'];
    $Category_name = $_POST['Category_name'];
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

    $add = " INSERT INTO dbo.tb_Medic(Medic_name, Medic_quan,  Medic_Unit, Medic_Id,Category_name) VALUES ('$Medic_name','$Medic_quan','$Medic_Unit','$Medic_Id','$Category_name')";
    $result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "เพิ่มข้อมูลแล้ว";
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
    }
    
 











?>