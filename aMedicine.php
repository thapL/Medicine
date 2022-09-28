<?php
    $MeName = $_POST['Medic_name'];
    $MeIn   = $_POST['Medic_quan'];
    $MeUnit = $_POST['Medic_Unit'];
    $MeCode = $_POST['Medic_Id'];
    $MeAmount = $_POST['Category_name'];
    ##include "connect.php";
    ini_set('display_errors', 1);
        error_reporting(~0);

            $serverName = "127.0.0.1";
            $userName = "";
            $userPassword = "";
            $dbName = "tb_Medic";

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
    
    ##sqlsrv_close($connect);











?>