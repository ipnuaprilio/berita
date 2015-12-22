<?php
    include '../config/koneksi.php';
    $i = $_GET['i'];

    if($i == 'login') {
		$user = $_POST['username'];
		$pass = md5($_POST['password']);
        
        $cekuser = mysql_query("SELECT * FROM admin WHERE username = '$user' ");
        $jumlah = mysql_num_rows($cekuser);
        $hasil = mysql_fetch_array($cekuser);
        if($jumlah == 0) {
            echo "User ID Belum terdaftar!<br/>";
            echo "<a href=\"login.php\">&laquo; Back</a>";
        } else {
            if($pass <> $hasil['password']) {
                echo "Password Salah!<br/>";
                echo "<a href=\"login.php\">&laquo; Back</a>";
            } else {
                session_start();
                $_SESSION['adminid'] = "$user";
                header('location:index.php');
            }
        }
	}
	
	if($i == 'logout') {
		session_start();
		unset($_SESSION['adminid']);
		header('location:login.php');
	}

    /*--------------------------------- BERITA ------------------------- */
    if($i == 'simpan_berita') {
		$id = $_POST['id'];
		$id_kat = $_POST['id_kat'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$tgl = $_POST['tgl'];
        
        $namagambar = $_FILES['gambar']['name'];
		if(is_uploaded_file($_FILES['gambar']['tmp_name'])) {
			move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$namagambar);
		}
		
		$query = mysql_query("INSERT INTO berita VALUES(
		'',
		'$id_kat',
		'$judul',
		'$isi',
		'$tgl',
		'$namagambar'
		)");
   
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=berita');
		}
	}
	
	if($i == 'edit_berita') {
		$id = $_POST['id'];
		$id_kat = $_POST['id_kat'];
		$judul = $_POST['judul'];
		$isi = $_POST['isi'];
		$tgl = $_POST['tgl'];
        
        $namagambar = $_FILES['gambar']['name'];
		if(is_uploaded_file($_FILES['gambar']['tmp_name'])) {
			move_uploaded_file($_FILES['gambar']['tmp_name'], "img/".$namagambar);
            mysql_query("UPDATE berita SET gambar = '$namagambar' WHERE id='$id'");
		}
		
		$query = mysql_query("UPDATE berita SET 
		id_kategori = '$id_kat',
		judul = '$judul',
		isi = '$isi',
		tgl = '$tgl' 
        WHERE id = '$id'
		");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=berita');
		}
	}
	
	if($i == 'del_berita') {
		$id = $_GET['id'];
		$query = mysql_query("DELETE FROM berita WHERE id = '$id' ");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=berita');
		}
	}

/*--------------------------------- KATEGORI ------------------------- */
    if($i == 'simpan_kat') {
		$id_kat = $_POST['id_kat'];
		$nm_kat = $_POST['nm_kat'];
		
		$query = mysql_query("INSERT INTO kategori VALUES(
		'',
		'$nm_kat'
		)");
   
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=kategori');
		}
	}
	
	if($i == 'edit_kat') {
		$id_kat = $_POST['id_kat'];
		$nm_kat = $_POST['nm_kat'];
		
		$query = mysql_query("UPDATE kategori SET 
		nm_kategori = '$nm_kat'
        WHERE id_kategori = '$id_kat'
		");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=kategori');
		}
	}
	
	if($i == 'del_kat') {
		$id_kat = $_GET['id_kat'];
		$query = mysql_query("DELETE FROM kategori WHERE id_kategori = '$id_kat' ");
		
		if(!$query) {
			echo "Gagal...";
		} else {
			header('location:index.php?page=kategori');
		}
	}

?>
