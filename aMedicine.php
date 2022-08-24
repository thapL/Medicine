<?php
    $MeName = $_POST['MeName'];
    $MeIn   = $_POST['MeIn'];
    $MeUnit = $_POST['MeUnit'];
    $MeCode = $_POST['MeCode'];
    include "connect.php";
    $add = " INSERT INTO MeStockMedicine (MeName, MeIn,  MeUnit, MeCode) VALUES ('$MeName','$MeIn','$MeUnit','$MeCode')";
    $result = sqlsrv_query($conn,$add);
    sqlsrv_close($conn);












?>