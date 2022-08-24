<html>
<head>
    <meta charset=utf-8>
    <meta http-equiv="Content-Type" content="text/html; charset=tis-620">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js">
</head>
<style>
</style>
<body>
<?php
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
    "MultipleActiveResultSets"=>true);

$connect = sqlsrv_connect( $serverName, $connectionInfo);

if($connect === FALSE)
{
    die( print_r( sqlsrv_errors(), true));
}
$stmt   = "select * from MeStockMedicine ";

$query  = sqlsrv_query($connect,$stmt);
?>
<div class="container">
    <div class="row">
        <table class="table table-condensed table-striped table-bordered">
            <thead>
            <tr>
                <th style="text-align: center">ID</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Uint</th>
                <th style="text-align: center">Amount</th>

            <tr>
            </thead>
            <?php
            while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
            {
                ?>
                <tbody>
                <tr>
                    <th><?PHP echo $result["MeCode"]; ?></th>
                    <th><?PHP echo $result["MeName"];?> &nbsp; </th>
                    <th><?PHP echo $result["MeUnit"];?></th>
                    <th><?PHP echo $result["MeAmount"];?></th>

                </tr>
                </tbody>
                <?PHP
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>