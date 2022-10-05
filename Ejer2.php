<?php
    $precio = $_POST['precio'];
    $importe = $_POST['importe'];
    $cantidad = $_POST['Cantidad'];
    
    $prc_ga = $precio - ($precio * 0.05);
    $prc_ip = $importe - ($importe * 0.07);
    $total = ($prc_ga * $cantidad)+ $prc_ip;
    $caramelos = $cantidad * 2;

    echo "Usted pagara un total de s/.".$total." por ".$cantidad." gaseosas a s/.".$prc_ga." cada una con un precio de importe de s/.".$prc_ip." y resivira ".$caramelos." carmelos"."<br>";
    
    
?>