<html>
<head> 
    <title>connection_status</title>
</head>
<body>
<?php

ini_set('display_errors', 1);
error_reporting(~0);

$serverName = "localhost";
$userName = "";
$userPassword = "";
$dbName = "dbMKS";

$connectionInfo = array("Database"=>$dbName, "UID"=>$userName, "PWD"=>$userPassword, "MultipleActiveResultSets"=>true,"CharacterSet"=>'UTF-8');

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if($conn)
{
    echo "connecting";
}
else
{
    die( print_r( sqlsrv_errors(), true));
}

sqlsrv_close($conn);
?>
</body>
</html>