<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Submit</title>
</head>
<body>
	<?php
		$jawaban = $_POST['jawaban'];
		$acak1 = $_POST['acak1'];
		$acak2 = $_POST['acak2'];
		$jlh_soal_benar = 0;
		$jlh_soal = count($jawaban);

		for ($i = 1; $i <= $jlh_soal; $i++){
			$hasil = (int)$jawaban[$i];
            $angka1 = (int)$acak1[$i];
            $angka2 = (int)$acak2[$i];

			$kuncijwb = ($angka1 + $angka2) % 2;
			if ($hasil == $kuncijwb) {
				echo "jawaban Anda: $jawaban[$i] (<b>Benar</b>) <br>";
				$jlh_soal_benar++;
			}
			else {
				echo "jawaban Anda: $jawaban[$i] (<b>Salah</b>) <br>";
			}
			echo "<hr>";
		}
	?>
</body>
</html>