<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simulasi Ganjil Genap STIS</title>
</head>
<body>
	<h2>Soal Simulasi Tes Ganjil Genap</h2>
	<div>
		<form name="simulasi" action = "cn_ganjilgenap.php" method="post"> 
<?php
            $angka_maks = 10;
            $angka_min = 0;
            $jlh_soal = 5;
            $jlh_soal_benar = 0;
            $jlh_soal_salah = 0;

            for ($i = 1; $i <= $jlh_soal; $i++) {
                $acak1 = (rand() % ($angka_maks - $angka_min + 1)) + $angka_min;
                $acak2 = (rand() % ($angka_maks - $angka_min + 1)) + $angka_min;
                echo "<p>
                Soal ke-$i: $acak1 + $acak2 
                <input type = 'text' name = 'jawaban[$i]' size = '6' maxlength = '1'>
                <input type = 'hidden' name = 'acak1[$i]' value = '$acak1'>
                <input type = 'hidden' name = 'acak2[$i]' value = '$acak2'> 
                </p>";
               }
            ?> 
            
            <input type="submit" value="Kirim Jawaban">
		</form>
	</div>
</body>
</html>