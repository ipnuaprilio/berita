<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$nmdb = 'berita';

$konek = mysql_connect($host, $user, $pass);
if($konek)
    mysql_select_db($nmdb);
else echo '
<center>
<p>error <font size="500px" color="#666">505</font></p>
<h3><font color="#cc88aa" >Gagal koneksi</font></h3>
<p>
    <font size="2px" >
        Cek file 
        <font color="#cc88aa" >
            config/koneksi.php
        </font> 
        dan sesuaikan dengan konfigurasi mysql
    </font>
</p>
</center>
<hr/>
';

?>
