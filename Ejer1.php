<!DOCTYPE html>
<html>
    <head>
    <title>Bonificacion</title>
    </head>
    <body>
        <p>Su sueldo base es de s/.600</p>

        <form method="post" action="">
            Ingrese la cantidad de hijos en edad escolar: <br>   <input type="text" name="hijos"><br>

            Ingrese el importe total vendido del mes: <br>   <input type="text" name="importe"><br>
            Resultado: <br>
            <input type="submit" name="Suma" value="Suma">
        </form>
<?php
        $hijos=$_POST["hijos"];
        $importe=$_POST["importe"];
        

            $bonificacion = ($hijos * 50);
            $sueldobruto =600 + (($importe/100)*7.5) + $bonificacion;
            $descuento=($sueldobruto/100)*11;
            $sueldoneto = $sueldobruto - $descuento;
            echo nl2br ("La bonificacion es de: s/.".$bonificacion."\n");
            echo nl2br ("El sueldo bruto es de: s/.".$sueldobruto."\n");
            echo nl2br ("\n");
            echo nl2br ("El descuento de ley de 11% es de: s/.".$descuento."\n");
            echo nl2br ("Y su sueldo neto es de: s/.".$sueldoneto);
?>

    </body>
</html>