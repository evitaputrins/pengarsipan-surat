<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="login.css" >
</head>
<body>
    
        <div class="box">
            <div class="container">
                <div class="title">
                    <h2>Sign In</h2>
                </div>
                <div class="form" >
                    <div class="form-input">
                        <form method="post" action="cek_login.php">
                            <label class="label" for="email"><b>Username</b></label>
                            <input class="input" type="text" name="user" placeholder="user id"><br/><br/>
                            <label class="label" for="pass"><b>Password</b></label>
                            <input class="input" type="password" name="pass" placeholder="Password "><br/>
                            <div class="form-submit">
                                <input type="submit" value="Login" name="submit"id="login-btn">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="back">
                    <h4><a href="register.php">register</a></h4>
                </div>
            </div>
        </div>
    </div>
</body>
</html>