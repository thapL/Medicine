<?php

isset($_POST['Medic_Id'])?$Medic_Id=$_POST['Medic_Id']:$Medic_Id="";
$Medic_name = $_POST['Medic_name'];
$Medic_quan   = $_POST['Medic_quan'];
$Medic_Unit = $_POST['Medic_Unit'];
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
        echo "<meta http-equiv='refresh' content='2; url=show.php'>";
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
    }
    
 











?>