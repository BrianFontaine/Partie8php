<?php 
    session_start();
    $_SESSION['lastname'] = 'Brian';
    $_SESSION['firstname'] = 'Fontaine';
    $_SESSION['age'] = 22;
    include'../header.php' 
?> 
<a href="user.php">profil</a>

<?php include '../foot.php';?>