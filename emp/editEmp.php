<!DOCTYPE html>
<html >
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="adstyle.css">
    <meta charset="utf-8" name="viewport" content="widt=device-width">
    
</head>

<body style =" background-image: url('bg.png');background-attachment: fixed;background-size: cover"><!--Add background-->
<?php

include 'connect.php';
    $employee_Id=$_GET['employee_Id'];
    $query="SELECT*FROM dbo.tb_employee WHERE employee_Id=$employee_Id";
    $result = sqlsrv_query($connect,$query);
    $row = sqlsrv_fetch_array($result);
    
?>

<form action="eEMP.php" method="post">

<section>

 <br><br>
    <table  cellspacing="8" >   
 
   
    <tr><td>Id : </td><td><input type="number" name="employee_Id"></td>
    <tr><td>ชื่อ : </td><td><input type="text" name="employee_name"></td></tr>
    <tr><td>แผนก : </td><td><select name="departMent">
           <option value="แก้ปวดลดไข้">แก้ปวดลดไข้</option>
           <option value="แก้ปวดกล้ามเนิ้อ">แก้ปวดกล้ามเนื้อ</option>
           <option value="แก้แพ้ แก้คัน แก้ไอ">แก้แพ้ แก้คัน แก้ไอ</option>
           <option value="ลดกรดเคลือบกระเพาะ">ลดกรดเคลือบกระเพาะ</option>
           <option value="แก้ท้องเสีย">แก้ท้องเสีย</option>
           <option value="ยาระบบประสาท">ยาระบบประสาท</option>
           <option value="ยาน้ำ">ยาน้ำ</option>
            <option value="ยาตา">ยาตา</option>
            <option value="ยาทาภายใน/ภายนอก">ยาทาภายใน/ภายนอก</option> 
            <option value="น้ำยาฆ่าเชื้อ">น้ำยาฆ่าเชื้อ</option>
            <option value="เวชภัณฑ์">เวชภัณฑ์</option>
        </select></td></tr>
    <tr><td>ตำแหน่ง : </td><td><input type="text" name="Position"> </td></tr><br>
    </table><br/>

    <button type="submit" name="submit" class="button">Success</button>
    <button type="reset" name="reset" class="reset">Reset</button></br>

    <a href="show.php"  style = " background-color: #920deb;border: none;color: white; padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    font-weight:500;">   Show Detail    </a>
    
    



</section>
</form>

</body>
</html>   