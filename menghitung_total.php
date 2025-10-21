<?php
$harga_barang = [12000, 15000, 30000, 10000, 50000];
$total = 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Total Belanja & Diskon</title>
</head>
<body>
    <h2>Daftar Harga Barang & Diskon</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Harga Barang</th>
            <th>Diskon</th>
            <th>Harga Setelah Diskon</th>
        </tr>
        <?php
        for ($i = 0; $i < count($harga_barang); $i++) {
            $harga = $harga_barang[$i];
            if ($harga > 30000) {
                $diskon = 0.10 * $harga;
            } else {
                $diskon = 0;
            }
            $harga_setelah_diskon = $harga - $diskon;
            $total += $harga_setelah_diskon;
            echo "<tr>";
            echo "<td>" . ($i+1) . "</td>";
            echo "<td>Rp " . number_format($harga,0,',','.') . "</td>";
            echo "<td>" . ($diskon > 0 ? "10%" : "-") . "</td>";
            echo "<td>Rp " . number_format($harga_setelah_diskon,0,',','.') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <p><strong>Total belanja setelah diskon: Rp <?= number_format($total,0,',','.') ?></strong></p>
</body>
</html>