<?php 

    setcookie('login','tamere') ;
    setcookie('password','le_dromadere') ;
    include '../header.php'; 
    
?>
<p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?= $_COOKIE['login']; ?> Ton password est <?= $_COOKIE['password']; ?>
</p>

<?php include '../foot.php'; ?>