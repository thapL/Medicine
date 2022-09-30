<?php
$Medic_Id = $_GET['Medic_Id'];

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

    $add = "DELETE FROM dbo.tb_Medic WHERE Medic_Id='$Medic_Id'";

$result = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result)
    {
        echo "ลบข้อมูลแล้ว";
        echo"<mete http-equiv='refresh' content='2;url=show.php'>";
        
    }
    else
    {
        die( print_r( sqlsrv_errors(), true));
        echo"ไม่สามารถลบข้อมูลได้";
    }   echo "<meta http-equiv='refresh' content='2; url=show.php'>";
    ?>