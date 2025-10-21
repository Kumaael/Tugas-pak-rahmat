<?php
// Data nilai 5 siswa, masing-masing 5 mata pelajaran
$siswa = [
    ['nama' => 'Joe',    'nilai' => [80, 75, 90, 85, 70]],
    ['nama' => 'Rahmat', 'nilai' => [70, 65, 60, 75, 80]],
    ['nama' => 'Adam',   'nilai' => [90, 85, 95, 80, 88]],
    ['nama' => 'Kevin',  'nilai' => [60, 70, 65, 68, 72]],
    ['nama' => 'Anto',   'nilai' => [85, 80, 78, 82, 88]]
];
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Rata-rata Nilai Siswa</title>
</head>
<body>
    <h2>Rata-rata Nilai Siswa (5 Mata Pelajaran)</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>B.inggris</th>
            <th>Matematika</th>
            <th>PPKN</th>
            <th>Agama</th>
            <th>B.indonesia</th>
            <th>Rata-rata</th>
            <th>Keterangan</th>
        </tr>
        <?php
        $no = 1;
        foreach ($siswa as $row) {
            $nilai = $row['nilai'];
            $rata = array_sum($nilai) / count($nilai);
            $ket = ($rata >= 75) ? "Lulus" : "Tidak Lulus";
            echo "<tr>";
            echo "<td>{$no}</td>";
            echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
            foreach ($nilai as $n) {
                echo "<td>" . number_format($n, 0, ',', '.') . "</td>";
            }
            echo "<td>" . number_format($rata, 2, ',', '.') . "</td>";
            echo "<td>{$ket}</td>";
            echo "</tr>";
            $no++;
        }
        ?>
    </table>
    <p><em>Catatan: Kelulusan jika rata-rata ≥ 75.</em></p>
</body>
</html>