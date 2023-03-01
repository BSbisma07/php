<?php
    $hb = 8000;
    $hj = 7500;
    
    $kur = $hb - $hj;
    $bag = floor($kur / 300);

    echo"Harga Beli = Rp.8000";
    echo"<br>";
    echo"Harga Jual = Rp.7500";
    echo"<br>";
    echo"Keuntungan = Rp$kur";
    echo"<br>";
    echo"Berapa Jumlah Kambing yang dibeli? Jawaban : $bag ekor";
?>