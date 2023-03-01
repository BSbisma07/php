<?php
$false = false;
if($false) false; {
    $false = 0;
    $f  = "false";
}

$true = true;
if($true) true; {
    $true = 1;
    $t = "true";
}

?>
Tabel Logika 1111
<table border="1">
    <tr>
        <th>Input true</th>
        <th>Input 2</th>
        <th>AND</th>
        <th>OR</th>
    </tr>
    <tr>
        <td><?= $f ?></td>
        <td><?= $f ?></td>
        <td><?= $false ?></td>
        <td><?= $false ?></td>
    </tr>
    <tr>
        <td><?= $f ?></td>
        <td><?= $t ?></td>
        <td><?= $false ?></td>
        <td><?= $true ?></td>
    </tr>
    <tr>
        <td><?= $t ?></td>
        <td><?= $f ?></td>
        <td><?= $false ?></td>
        <td><?= $true ?></td>
    </tr>
    <tr>
        <td><?= $t ?></td>
        <td><?= $t ?></td>
        <td><?= $true ?></td>
        <td><?= $true ?></td>
    </tr>