<?php session_start();
include '../header.php';
?>

<p><?= $_SESSION['lastname'].' '.$_SESSION['firstname'].' '.$_SESSION['age'];?></p>

<?php
    include '../foot.php';
?>