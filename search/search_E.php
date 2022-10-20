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
                   <a href="emp/editEmp.php?employee_Id=<?php echo $result['employee_Id'];?>"
                   onclick="return confirm('ต้องการแก้ไขข้อมูลพนักงาน : <?php echo $result['employee_name'];?> หรือไม')"> edit</a>
                   <th style="text-align: center">
                   <a href="emp/deleteEmp.php?employee_Id=<?php echo $result['employee_Id'];?>"
                   onclick="return confirm('ต้องการลบข้อมูลพนักงาน : <?php echo $result['employee_name'];?> หรือไม่')"> delete</a>
                   
                    
                    </th>
                </tr>
                </tbody>
                <?PHP
            }
     
            ?>