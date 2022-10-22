<head>
    <html>
<head>
    <meta charset=utf-8>
    <meta http-equiv="Content-Type" content="text/html; charset=tis-620">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <a href="../Medic/index.html"  style = " background-color: #4CAF50;border: none;color: white; padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;    
    font-weight:500;">   index    </a>

      <a href="newEmployee.html"  style = " background-color: #4CAF50;border: none;color: white; padding: 15px 32px;text-align: center;text-decoration: none;display: inline-block;
    font-size: 20px;
    margin: 4px 2px;
    cursor: pointer;
    font-weight:500;" >       New Employee   </a>

    
</head>
<style>
</style>
<body>
<?php
include 'connect.php';

$stmt   = "select * from dbo.tb_employee";

$query  = sqlsrv_query($connect,$stmt);     
?>

 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<div class="container">

    <div class="row">
        <table class="table table-condensed table-striped table-bordered background-color: while" >
            <thead>
           
            <tr>
                <th style="text-align: center">ID</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">DepartMent</th>
                <th style="text-align: center">Position</th>
                <th style="text-align: center">edit</th>
                <th style="text-align: center">Delete</th>
            <tr>
            </thead>
            <?php
            
            while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
            {
                ?>
             
                <tbody>
                <tr>
                    <th><?PHP echo $result["employee_Id"]; ?></th>
                    <th><?PHP echo $result["employee_name"];?> &nbsp; </th>
                    <th><?php echo $result["departMent"];?></th>
                    <th><?PHP echo $result["Position"];?></th>
                    <th style="text-align: center">
                    <a href="editEmp.php?employee_Id=<?php echo $result['employee_Id'];?>"
                    onclick="return confirm('ต้องการแก้ไขข้อมูล<?php echo $result['employee_name'];?>')"> edit</a>
                    <th style="text-align: center">
                    <a href="deleteEmp.php?employee_Id=<?php echo $result['employee_Id'];?>"
                    onclick="return confirm('ต้องการลบข้อมูลยา<?php echo $result['employee_name'];?>')"> delete</a>
                    
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