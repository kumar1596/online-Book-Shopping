<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
         <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <table cellpadding="10" cellspacing="0" border="0" bgcolor="red" width="100%">
            <tr><td colspan="2" align="center"><?php include_once'./banner.php';?></td></tr>
            <tr bgcolor="green"><td colspan="2" align="center"><?php include_once './horizontal_menu.php';?></td></tr>
            <tr><td  width="60%"><?php include_once './sliding_images.php';?></td><td align="center">
                    <form method="POST" action="validateLogin.php">
                        <table cellpadding="10" cellspacing="0" border="0" bgcolor="green" width="100%">
                            <tr bgcolor=""><td colspan="4" align="center"><font color="white" size="4">LOGIN HERE</font></td></tr>
                            <tr><td width="25%"></td><td>USERNAME</td><td><input type="text" name="txt_uname" placeholder="Email"/></td><td width="25%"></td></tr>
                            <tr><td></td><td>PASSWORD</td><td><input type="password" name="txt_pass" placeholder="Password Here"/></td><td></td></tr>
                            <tr><td colspan="4" align="center"><input type="submit" value="Login"></td></tr>
                            <tr><td colspan="4" align="center"><a href="">SIGN UP HERE</a></td></tr>
                            <tr><td colspan="4" align="center"><a href="">FORGET PASSWORD</a></td></tr>
                            <tr><td colspan="4" align="center"><hr></td></tr>
                </table>
                        </form>
                
                
                </td></tr>
            
        </table>
    </body>
</html>
