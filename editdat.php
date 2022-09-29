<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="adstyle.css">
    <meta charset="utf-8" name="viewport" content="widt=device-width">
    
</head>

<body style =" background-image: url('bg.png');background-attachment: fixed;background-size: cover"><!--Add background-->
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
    $Medic_Id=$_GET['Medic_Id'];
    $query="SELECT*FROM dbo.tb_Medic WHERE Medic_Id=$Medic_Id";
    $result = sqlsrv_query($connect,$query);
    $row = sqlsrv_fetch_array($result);
    
?>

<form action="aMedicine.php" method="post">

<section>

 <br><br>
    <table  cellspacing="8" >
 
    <tr><td>Id : </td><td><input type="number" name="Medic_Id" value="<?php echo $row['Medic_Id'];?>"></td>
    <tr><td>ชื่อ : </td><td><input type="text" name="Medic_name" value="<?php echo $row['Medic_name'];?>"></td></tr>
    <tr><td>จำนวน : </td><td><input type="number" in="number" name="Medic_quan" value="<?php echo $row['Medic_quan'];?>"></td></tr>
    <tr><td>หมวด : </td><td><input type="text" in="text" name="Category_name" value="<?php echo $row['Category_name'];?>"></td></tr>
    <tr><td>หน่วย : </td><td><select name="Medic_Unit">
        <option value="<?php echo $row['Medic_Unit'];?>"><?php echo $row['Medic_Unit'];?>"</option>
        <option value="เม็ด">Tab</option>
        <option value="ขวด">ขวด</option>
        <option value="แผง">แผง</option>
        <option value="ซอง">ซอง</option>
        <option value="cap">cap</option>
        <option value="ตลับ">ตลับ</option>
        <option value="แผ่น">แผ่น</option>
        <option value="ม้วน">ม้วน</option>
        <option value="ห่อ">ห่อ</option>
        <option value="ก้าน">ก้าน</option>
        <option value="แพ๊ก">แพ๊ก</option>
        <option value="กล่อง">กล่อง</option>
        <option value="อัน">อัน</option>
        <option value="แผ่น">แผ่น</option>
    </select></td></tr><br>
    </table><br/>

    <button type="submit" name="submit" class="button">Success</button>
    <button type="reset" name="reset" class="reset">Reset</button>
    
    



</section>
</form>

</body>
</html>   