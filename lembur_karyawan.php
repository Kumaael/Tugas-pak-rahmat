<?php
$karyawan = ["Anto", "Joe", "Rahmat", "Aldi"];
$jam_kerja = [40, 35, 50, 45];
$tarif_normal = 20000;
$tarif_lembur = 25000;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Gaji & Lembur Karyawan</title>
</head>
<body>
    <h2>Gaji & Lembur Karyawan</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jam Kerja</th>
            <th>Jam Normal</th>
            <th>Jam Lembur</th>
            <th>Total Gaji</th>
        </tr>
        <?php
        for ($i = 0; $i < count($jam_kerja); $i++) {
            $nama = isset($karyawan[$i]) ? htmlspecialchars($karyawan[$i]) : "Karyawan " . ($i+1);
            $jam = $jam_kerja[$i];
            $jam_normal = min($jam, 40);
            $jam_lembur = ($jam > 40) ? $jam - 40 : 0;
            $gaji = ($jam_normal * $tarif_normal) + ($jam_lembur * $tarif_lembur);
            echo "<tr>";
            echo "<td>" . ($i+1) . "</td>";
            echo "<td>$nama</td>";
            echo "<td>$jam</td>";
            echo "<td>$jam_normal</td>";
            echo "<td>$jam_lembur</td>";
            echo "<td>Rp " . number_format($gaji, 0, ',', '.') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>