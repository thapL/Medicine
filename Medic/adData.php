<!DOCTYPE html>
<html > 
<head>
   
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <link rel="stylesheet" href="adstyle.css">
    <meta charset="utf-8" name="viewport" content="widt=device-width">
   
</head>

<body style =" background-image: url('bg.png');background-attachment: fixed;background-size: cover"><!--Add background-->

<form action="adataMedicine.php" method="POST">

<section>
 <br><br>
    <table  cellspacing="8" >
 
    <tr><td>ID : </td><td><input type="number" name="Medic_Id"></td>
    <tr><td>จำนวน : </td><td><input type="number" in="number" name="Medic_Newquan"></td></tr>

    </table><br/>

    <button type="submit" name="submit" class="button" onclick="return confirm('ต้องการเพิ่มข้อมูลใช้หรือไม่')">Success</button>
    <button type="reset" name="reset" class="reset">Reset</button>
    </br>
    
<a href="show.php"  style = " background-color: #920deb;border: none;color: white; padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;
font-size: 20px;
margin: 4px 2px;
cursor: pointer;
font-weight:500;">   Show Detail    </a>
    

</section>
</form>

</body>
</html>