<?php
require_once 'libfungsi.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matkul = $_POST['matkul'];
    $uts = $_POST['nilai_uts'];
    $uas = $_POST['nilai_uas'];
    $tugas = $_POST['nilai_tugas'];

    $rerata = ($uts + $uas + $tugas) / 3;
    $grade = grade($rerata);
    $predikat = predikat($grade);
    $keterangan = keterangan($rerata);

    echo "<div class='container'>
        <h2>Data Mahasiswa</h2>
        <table class='table'>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Mata Kuliah</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Tugas</th>
                    <th>Rerata</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>$nama</td>
                    <td>$matkul</td>
                    <td>$uts</td>
                    <td>$uas</td>
                    <td>$tugas</td>
                    <td>$rerata</td>
                    <td>$grade</td>
                    <td>$predikat</td>
                    <td>$keterangan</td>
                </tr>
            </tbody>
        </table>
    </div>";
}
?>