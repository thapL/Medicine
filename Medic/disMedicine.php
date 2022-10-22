<?php
       $employee_Id = $_POST['employee_Id'];
       $Medic_Id = $_POST['Medic_Id'];
       $Medic_disquan  = $_POST['Medic_disquan'];
       include 'connect.php';
    $sql="INSERT INTO dbo.tb_disHis(employee_Id,Medic_Id,DisQuan,DispensedDate)
                             Values('$employee_Id','$Medic_Id','$Medic_disquan',getdate())";#การจะเพิ่มวันที่ลงsqlsrv ต้องใช้ getdate()
    $result = sqlsrv_query($connect,$sql); #เพิ่มข้อมูลลงไปในตาราง disHis เพื่อเก็บประวัติการเบิก
if($result){
        echo "เรียบ";
    }   
else
    {
        die( print_r( sqlsrv_errors(), true));
    }


    $add ="UPDATE  dbo.tb_Medic set Medic_quan = Medic_quan -'$Medic_disquan' WHERE Medic_Id='$Medic_Id' "; // บวกจำนวนเพิ่มกับของเดิมในตาราง
    $result2 = sqlsrv_query($connect,$add);
    sqlsrv_close($connect);
    if($result2)
    {
        echo "จ่ายยาแล้ว";
        echo "<meta http-equiv='refresh' content='1; url=../index.php'>";
    }   
    else
    {
        die( print_r( sqlsrv_errors(), true));
    }
    
 











?>