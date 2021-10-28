<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="regis.css" type="text/css">
</head>
<body>
    
    <div class="box">
        <div class="container">
            <div class="title">
             <h2>Sign up</h2>
            </div>
            <div class="form">  
                <div class="form-input">
                <form method="post" action="simpan.php">
                    <input type="hidden" value="<?php echo $data['id'];?>" name="id_admin"> 
                    <table>
                    <tr>
                        <td><label class="label" for="nm_admin">Name</label></td>
                         <td class="equal"> : </td>
                        <td><input class="input" type="text" name="nm_admin"></td>
                    </tr>
                    <tr>
                        <td><label class="label" for="username">Username</label></td>
                        <td class="equal"> : </td>
                        <td><input class="input" type="text" name="username"></td>
                    </tr>
                    <tr>
                         <td><label class="label" for="password">Password</label></td>
                         <td class="equal"> : </td>
                         <td><input class="input" type="password" name="password"></td>
                    </tr>
                   
                 </table>
                <div class="form-submit">
                    <input type="submit" value="Submit" id="submit-btn">
                </div>
                 </form>
                 <div class="back">
                <h4><a href="login.php">Kembali</a></h4>
                 </div>
             </div>
         </div>
     </div>
 </div>
</body>
</html>
