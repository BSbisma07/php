<?php
echo("<h1> Daftar Menu </h1>");
$array = [
    array("1", "Cireng", "Rp 5000"),
    array("2", "Es Doger", "Rp 10000"),
    array("3", "Es Milo", "Rp 18000"),
    array("4", "Es Kepal", "Rp 5000"),
    array("5", "Pisang Coklat", "Rp 12000"),
];
echo "<table border='1'";
echo "<tr><th>No</th><th>Nama</th><th>Harga</th></tr>";
 
foreach ($array as $rows => $row) {
    echo "<tr>";
    foreach ($row as $col => $cell) {
        echo "<td>" . $cell . "</td>";
    }
}
echo "</tr></table>";
?>
