<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $berita = mysql_query("SELECT * FROM berita WHERE id = '$id' ");
    $hasil = mysql_fetch_object($berita);
    $isi = $hasil->isi;
}

?>
<br/><br/>
<div class="row">
    <div class="col-md-6">
        <form action="index.php?page=manual&st=ok" method="POST">
            <div class="form-group">
                <label >Input Berita</label>
                <textarea name="isi" class="form-control" rows="40">
                    <?php if(isset($_GET['st'])) echo $_POST['isi']; ?>
                    <?php if(isset($_GET['id'])) echo $isi; ?>
                </textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Ringkas" class="btn btn-primary">
                <a href="index.php?page=manual" class="btn btn-danger">Hapus</a>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        <?php

        if(isset($_GET['st'])) {


                // load daftar stopwords
                $stopwords	= file_get_contents("./stopwords.txt");
                $stopwords	= preg_split("/[\s]+/", $stopwords);

                // inisialisasi
                $all_token	= array();
                $freq_token	= array();
                $df_token	= array();
                $inv_index	= array();

                // load isi file korpus

                $N = 1;


                $load_file = $_POST['isi'];

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


                // membuat array inverted index
                foreach ($df_token as $key => $value) { 
                    $df	= $value;
                    $inv_index[$key] 		= array();
                    $inv_index[$key]['idf']	= log10($N/$df); // simpan nilai idf
                }
                //print_r($inv_index);
                //save_xml();


                $compress = 30;


                // load file dan daftar stopwords
                $load_file  = $_POST['isi'];

                $sentence 	= preg_split("/[.]+/", $load_file);
                $sentence 	= array_slice($sentence, 0, sizeof($sentence)-1); // buang array terakhir (kosong)

                $stopwords	= file_get_contents("./stopwords.txt");
                $stopwords	= preg_split("/[\s]+/", $stopwords);

                // jumlah kalimat yang diringkas
                $compression_rate 	= $compress/100; 
                $max_sentence  		= floor(sizeof($sentence)*$compression_rate);

                // inisialisasi
                $sentence_weight = array();

                // menghitung bobot tf.idf tiap kalimat
                foreach ($sentence as $key => $value) {
                    // tokenisasi dengan membuang stopwords
                    $word = preg_split("/[\d\W\s]+/", strtolower($value));
                    $word = array_diff($word, $stopwords);		
                    $word = array_values($word); // perbaiki indeks

                    // inisialisasi bobot dan hitung frekuensi token
                    $tf_idf 	= 0;
                    $freq_word 	= array_count_values($word);

                    // hitung bobot tf.idf
                    foreach ($freq_word as $token => $tf) 
                        $tf_idf += $tf * $inv_index[$token]['idf'];

                    // simpan nilai bobot kalimat
                    array_push($sentence_weight, $tf_idf);
                }

                // sorting bobot tertinggi -> potong array -> sorting urutan kalimat
                arsort($sentence_weight);
                $sorted = array_slice($sentence_weight, 0, $max_sentence, true);
                ksort($sorted);

                // gabungkan ringkasan
                $summary = "";
                foreach ($sorted as $key => $value)
                    $summary = $summary.$sentence[$key].". ";

                // return teks asli dan hasil ringkasan
                $output = array();
                $output['original'] = $load_file;
                $output['summary']  = $summary;
            
                echo "<h2>Hasil Ringkas</h2>";
                echo "<p>".$output['summary']."</p>";



        }

        ?>
    </div>
</div>