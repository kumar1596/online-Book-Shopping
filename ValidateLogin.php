<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$uname=$_POST["txt_uname"];
$pass=$_POST["txt_pass"];


$connection=new mysqli("127.0.0.1", "root", "", "bookshop", "3306");

if($connection->errno>0)
            {
    
                    die("Connection Failed");
            }
            
  $resultset=$connection->query("select * from login where username='$uname' and password='$pass'");
  
  
  
  if(mysqli_num_rows($resultset)>0)
        {
      
            $utype="";
            
            while($row=  mysqli_fetch_assoc($resultset))
                    {
                
                         $utype=$row["user_type"];
                         
                         if(strcmp($utype, "Normal")==0)
                            {
                             header("Location: UserWay.php");
                             
                            }
                            else
                                {
                                header("Location: AdminWay.php");
                                        
                                }
                    }
                
      
      
        }
       else
        {
           
            header("Location: ErrorPage.php");
        }



?>