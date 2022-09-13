<?php
    $MeName = $_POST['MeName'];
    $MeIn   = $_POST['MeIn'];
    $MeUnit = $_POST['MeUnit'];
    $MeCode = $_POST['MeCode'];
    ##include "connect.php";
    ini_set('display_errors', 1);
        error_reporting(~0);

            $serverName = "127.0.0.1";
            $userName = "";
            $userPassword = "";
            $dbName = "dbMKS";

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

    $add = " INSERT INTO dbo.MeStockMedicine(MeName, MeIn,  MeUnit, MeCode) VALUES ('$MeName','$MeIn','$MeUnit','$MeCode')";
    $result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "เชื่อมต่อแล้วววววววววววววววว";
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
    }
    
    ##sqlsrv_close($connect);











?>