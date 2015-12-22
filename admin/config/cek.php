<?php
session_start();

if(isset($_SESSION['adminid'])) {
    $usr = $_SESSION['adminid'];
    $query = mysql_query("SELECT * FROM admin WHERE username='$usr'");
    $hasil = mysql_fetch_object($query);
    
    $nm = $hasil->nm_admin;
} else {
    header('location:login.php');
}

?>
