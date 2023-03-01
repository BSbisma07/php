<?php
echo("<h1> Operator String </h1>");
$array = [
    array("Ayo", "Belajar", "Ayo Belajar"),
    array("Bersama", "Niomic", "Bersama Niomic"),
];
echo "<table border='1'";
echo "<tr><th>Input 1</th><th>Input 2</th><th>Hasil</th></tr>";
 
foreach ($array as $rows => $row) {
    echo "<tr>";
    foreach ($row as $col => $cell) {
        echo "<td>" . $cell . "</td>";
    }
}
echo "</tr></table>";
echo"<br>";
echo"Gabungan : Ayo Belajar Bersama Niomic :)";
?>