<?php
    $MeName = $_POST['MeName'];
    $MeIn   = $_POST['MeIn'];
    $MeUnit = $_POST['MeUnit'];
    $MeCode = $_POST['MeCode'];
    include "dbConnect.php";
    $add=“insert into MeStockMedicine values (null,$MeName,$MeIn,$MeUnit,$MeCode)”;
14. $result = mysqli_query($conn,$add);
15. mysqli_close($conn);












?>