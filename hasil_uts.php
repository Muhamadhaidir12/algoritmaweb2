<?php 

// memanggil POST

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$matkul = $_POST['matkul'];
$kehadiran = $_POST['kehadiran'];
$etika = $_POST['etika'];
$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

// menghitung nilai yang diinput
$nilai_absen = $kehadiran * 0.15;
$nilai_etika = $etika * 0.1;
$nilai_tugas = $tugas * 0.2;
$nilai_uts = $uts * 0.3;
$nilai_uas = $uas * 0.4;

// penjumlahan dari nilai-nilai
$nilai_akhir = $nilai_absen + $nilai_etika + $nilai_tugas + $nilai_uts + $nilai_uas;

// menampilkan grade
if ($nilai_akhir >= 80) {
    $grade ="A";
} else if ($nilai_akhir >= 70) {
    $grade ="B";
} else if ($nilai_akhir >= 50) {
    $grade ="C";
} else if ($nilai_akhir >= 40) {
    $grade ="D";
} else {
    $grade ="E";
}

echo "
    <h1> Hasil Nilai Akhir Mahasiswa</h1> <br>
    Nama Mahasiswa : $nama <br>
    Nim Mahasiswa : $nim <br>
    Mata Kuliah : $matkul <br>
    Nilai Absen : <b>$kehadiran</b> <br>
    Nilai Etika : <b>$etika</b> <br>
    Nilai Tugas : <b>$tugas</b> <br>
    Nilai UTS : <b>$uts</b> <br>
    Nilai UAS : <b>$uas</b>

    <h4> Nilai Akhir : $nilai_akhir <h4>
    <h4> Grade : $grade <h4>
";

?>
