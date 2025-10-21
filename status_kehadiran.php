<?php
$karyawan = ["Anto", "Joe", "Rahmat", "Aldi", "Adam"];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>Status Kehadiran Karyawan</title>
</head>
<body>
    <h2>Status Kehadiran Karyawan</h2>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Status</th>
        </tr>
        <?php
        for ($i = 0; $i < count($karyawan); $i++) {
            $no = $i + 1;
            $nama = htmlspecialchars($karyawan[$i]);
            if ($no % 2 == 0) {
                $status = "Hadir";
            } else {
                $status = "Izin";
            }
            echo "<tr>";
            echo "<td>$no</td>";
            echo "<td>$nama</td>";
            echo "<td>$status</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>