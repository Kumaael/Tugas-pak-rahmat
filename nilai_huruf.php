<?php
$data = [
    ['nama' => 'Anto',   'nilai' => 60],
    ['nama' => 'Joe',    'nilai' => 85],
    ['nama' => 'Rahmat', 'nilai' => 70],
    ['nama' => 'Aldi',   'nilai' => 90],
    ['nama' => 'Adam',   'nilai' => 50]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Daftar Nilai Huruf Karyawan</title>
</head>
<body>
    <h2>Daftar Nilai Huruf Karyawan</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nilai Angka</th>
            <th>Nilai Huruf</th>
        </tr>
        <?php
        foreach ($data as $i => $row) {
            $n = $row['nilai'];
            if ($n >= 85) {
                $huruf = "A (Sangat Baik)";
            } else if ($n >= 70) {
                $huruf = "B (Baik)";
            } else if ($n >= 60) {
                $huruf = "C (Cukup)";
            } else {
                $huruf = "D (Kurang)";
            }
            echo "<tr>";
            echo "<td>" . ($i+1) . "</td>";
            echo "<td>" . htmlspecialchars($row['nama']) . "</td>";
            echo "<td>$n</td>";
            echo "<td>$huruf</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>