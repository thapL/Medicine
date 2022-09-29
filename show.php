<head>
    <html>
<head>
    <meta charset=utf-8>
    <meta http-equiv="Content-Type" content="text/html; charset=tis-620">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

$stmt   = "select * from dbo.tb_Medic ";

$query  = sqlsrv_query($connect,$stmt);     
?>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="container">

    <div class="row">
        <table class="table table-condensed table-striped table-bordered">
            <thead>
           
            <tr>
                <th style="text-align: center">ID</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Quantity</th>
                <th style="text-align: center">Uint</th>
                <th style="text-align: center">Category</th>
                <th style="text-align: center">edit</th>
            <tr>
            </thead>
            <?php
            
            while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
            {
                ?>
             
                <tbody>
                <tr>
                    <th><?PHP echo $result["Medic_Id"]; ?></th>
                    <th><?PHP echo $result["Medic_name"];?> &nbsp; </th>
                    <th><?php echo $result["Medic_quan"];?></th>
                    <th><?PHP echo $result["Medic_Unit"];?></th>
                    <th><?PHP echo $result["Category_name"];?></th>
                    <th style="text-align: center">
                    <a href="editdat.php?Medic_Id=<?php echo $result['Medic_Id'];?>"> edit</a>
                    </th>
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