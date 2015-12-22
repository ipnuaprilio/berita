<?php
$page = (isset($_GET['page'])) ? $_GET['page'] : 'main';
switch($page) {
    case 'search'    : include "include/search.php"; break;
    
    case 'detail'    : include "detail.php"; break;
    
    
    case 'manual'    : include "include/manual.php"; break;
    
    case 'main'     :
        default     : include "include/home.php";
}
?>
