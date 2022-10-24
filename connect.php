<html>
<head> 
    <title>connection_status</title>
</head>
<body>
<?php

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
{ echo "disconnect";
die( print_r( sqlsrv_errors(), true));
}
?>
</body>
</html>