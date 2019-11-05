<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table cellpadding="10" cellspacing="0"
               border="0" width="100%" 
               bgcolor="ligtyellow">
            
            <tr>    
                <td colspan="2" align="center">
                    <?php include_once './banner.php';?>
                </td>  </tr>
            <tr bgcolor="lightyellow">    
                <td colspan="2" align="center">
       <?php include_once './horizontal_menu.php';?>
                </td></tr>
            <tr>
                <td colspan="2" align="center">
                    <form method="POST" action="EntryConfirm.php">
                        <table cellpadding="10" cellspacing="0" border="0" bgcolor="red" width="100%">
                            <tr bgcolor="blue">    <td colspan="4" align="center"><font color="white" size="4">BOOK ENTRY FORM</font></td> </tr>
                            <tr>    <td width="25%"></td><td>Book Name</td><td><input type="text" name="txt_name" placeholder="Book Name Here"/></td><td></td> </tr>
                                    <tr>    <td></td><td>Category</td><td>
                                
                                            <select name="cmb_category" onchange="populateSubcategory(this.value)">
                                                
                                                <option value="" selected>-select category-</option>
                                                <?php
                                                        while($row=  mysqli_fetch_assoc($category_resultset))
                                                            {
                                                            
                                                ?>
                                                <option value="<?=$row["category_name"]?>"><?=$row["category_name"]?></option>  
                                                  <?php
                                                            
                                                            }
                                                    
                                                ?>
                                            </select>
                                </td><td width="25%"></td> </tr>
                                    
                                    <tr>    <td></td><td>Select Sub Category</td><td>
                                
                                            <select name="cmb_scategory" id="info">
                                                
                                                <option value="" selected>-select sub category-</option>
                                                
                                            </select>
                                </td><td></td> </tr>
                                    
                                    
                             
                            
                        </table>
                        
                        
                        
                    </form> 
                   
                    
                    
                </td>
                
                
            </tr>
            
            
            
            
        </table>
        
    </body>
</html>
