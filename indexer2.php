<?php
	// include "./save_xml.php";
    include "config/koneksi.php";

	function indexer2() {
		// scan nama file korpus
		$dir_corpus = "./corpus";
		$files 		= scandir($dir_corpus);
		$files 		= array_slice($files, 2);
		$N			= sizeof($files); // total dokumen
		
		// load daftar stopwords
		$stopwords	= file_get_contents("./stopwords.txt");
		$stopwords	= preg_split("/[\s]+/", $stopwords);
		
		// inisialisasi
		$all_token	= array();
		$freq_token	= array();
		$df_token	= array();
		$inv_index	= array();

		// load isi file korpus
        
        $query = mysql_query("SELECT * FROM berita");
        $N = mysql_num_rows($query);
        
        while($row = mysql_fetch_object($query)) {
            $load_file = $row->isi;
			
			// tokenisasi dengan membuang stopwords
			$token = preg_split("/[\d\W\s]+/", strtolower($load_file));
			$token = array_diff($token, $stopwords);		
			$token = array_values($token); // perbaiki indeks

			// menyimpan nilai df tiap token
			$token = array_count_values($token); // hilangkan redudansi token
			foreach ($token as $key => $value) {
				// jika token sudah ada
				if (array_key_exists($key, $df_token)) 
					$df_token[$key]++;
				
				// jika token belum ada
				else if (!isset($df_token[$key]))
					$df_token[$key] = 1;
			}
        }
        
		// membuat array inverted index
		foreach ($df_token as $key => $value) { 
			$df	= $value;
			$inv_index[$key] 		= array();
			$inv_index[$key]['idf']	= log10($N/$df); // simpan nilai idf
		}
		//print_r($inv_index);
		//save_xml();
		return $inv_index;
	}