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
                    <a href="Medic/editdat.php?Medic_Id=<?php echo $result['Medic_Id'];?>"
                    onclick="return confirm('ต้องการแก้ไขข้อมูล <?php echo $result['Medic_name'];?> หรือไม่')"> edit</a>
                    <th style="text-align: center">
                    <a href="Medic/delete.php?Medic_Id=<?php echo $result['Medic_Id'];?>"
                    onclick="return confirm('ต้องการลบข้อมูลยา <?php echo $result['Medic_name'];?>หรือไม่')"> delete</a>
                    
                    </th>
                </tr>
                </tbody>
                <?PHP
            }
     
            ?>