<?php
    if (isset($_POST['login']) && isset($_POST['password'])) {
        setcookie('login', $_POST['login'], time() + 365*24*3600,'/',null,false,true);
        setcookie('password', $_POST['password'], time() + 365*24*3600,'/',null,false,true); // On écrit un cookie
        if (isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
            header('location: ../exercice4php/index.php');
        }
    }

  
    include '../header.php';
?> 
<form method="POST" action="index.php">
  <div class="form-group">
    <label for="login">Login :</label>
    <input type="text" class="form-control" id="login" aria-describedby="loginHelp" name="login" placeholder="Username">
  </div>
  <div class="form-group">
    <label for="password">Password :</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include '../foot.php';?>