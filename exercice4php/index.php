<?php include '../header.php'; ?> 
<p>
    Hé ! Je me souviens de toi !<br />
    Tu t'appelles <?= $_COOKIE['login']; ?> Ton password est <?= $_COOKIE['password']; ?>
</p>
<a href="../exercice5php/index.php">Pour voire les cookie Modifier</a>
<?php include '../foot.php'; ?>