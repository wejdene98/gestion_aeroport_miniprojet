<?php

require_once('connexion.php');

 
if(!empty($_POST['submit'])){
        if(empty($_POST['username']))
            $error_msg='please enter username';
        if(empty($_POST['password']))
            $error_msg='please enter password';
        if(empty($error_msg)){
            $sql="SELECT * FROM users WHERE username='admin' AND password='admin'";
            if ($idcon->query($sql) === TRUE){
           
                header('location: /ajoutervol.html');
            }else{
                $error_msg='invalid details';
            }
        }       
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Login</h2>
       
        <form method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="">
               
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control">
               
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
        </form>
    </div>    
</body>
</html>