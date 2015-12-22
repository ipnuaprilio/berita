<html>
    <head>
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
	
    <title></title>
	
	<script src="../assets/js/jquery-1.11.2.min.js"></script>
	
    <!-- Bootstrap core CSS -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../assets/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
    
	<!-- UNTUK TABEL -->
		<style type="text/css" title="currentStyle"> 
			@import "../assets/css/demo_table_jui.css";
			@import "../assets/css/TableTools.css";
		</style>
		
		<script type="text/javascript" src="js/calendar.js"></script>
		<link rel="stylesheet" href="css/cal.css" />
        
        <script type="text/javascript" language="javascript" src="../assets/js/slide.js"></script>
		
		<script type="text/javascript" language="javascript" src="../assets/js/jquery.dataTables.js"></script>
		<script type="text/javascript" language="javascript" src="../assets/js/ZeroClipboard.js"></script>
		<script type="text/javascript" language="javascript" src="../assets/js/TableTools.js"></script>
		<script type="text/javascript" charset="utf-8">
			$(document).ready(function() {
				$('#example').dataTable({ 
					"sPaginationType": "full_numbers",
					"sDom": 'T<"clear">lfrtip',
					"oTableTools": {
						"sSwfPath": "../assets/swf/copy_csv_xls_pdf.swf"
					}
				});
			} );
		</script>
        
	   <script language="JavaScript">
			function angka(e) {
				if(!/^[0-9]+$/.test(e.value)) {
					e.value = e.value.substring(0, e.value.length-1);
				}
			}
			
			function huruf(h) {
				if(!/^[a-zA-Z .]+$/.test(h.value)) {
					h.value = h.value.substring(0, h.value.length-1);
				}
			}
		</script>
    </head>
    <body>
        <?php
            include "../config/koneksi.php";
            include "config/cek.php";
        ?>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Pengajuan</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href='index.php/dashboard'><?=$nm?></a></li>
            <li><a href='proses.php?i=logout'>Logout</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <!--<input type="text" class="form-control" placeholder="Search...">-->
          </form>
        </div>
      </div>
    </nav>
        
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class=""><a href='index.php'>Dashboard <span class="sr-only">(current)</span></a></li>
              
              
            <li><a href='index.php?page=kategori'>Kategori</a></li>
            <li><a href='index.php?page=berita'>Berita</a></li>
              
            <li><a href='proses.php?i=logout'>LogOut</a></li>
          </ul>
            
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">     
         
        <?php
            include "config/router.php";
        ?>
        </div>
      </div>
    </div>
         <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../assets/js/vendor/holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>
