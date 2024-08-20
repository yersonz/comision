<html>
<head>
    <title>IZI</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="hero">
<div class="social-icons">
            
        <div class="form-box">
        <div class="button-box">
        <div class="social-icons">
            <img src="img/izi.png">   
            </div>
            <form class="input-group">
<?php
    if ($_POST) {
        $monto1 = $_POST["monto1"];
        $porcentaje1 = $monto1 * 2.5 / 100;
        $montototal1= $monto1 + $porcentaje1;
        if ($monto1<0) {
            print "no hay monto que calcular";
        }else {
            print "MONTO:"." ".$monto1."<br>"."+"."<br>";
            print "COMISION IZIPAY:"." ".round($porcentaje1,1)."<br>"."<br>";
            
            print "MONTO A PAGAR:" . " ".round($montototal1,1)."<br>";
            
        }
    }
    
    ?>
    <br></br>
<a href="index.php" class="submit-btn">VOLVER</a>
    </form>
    </div>
    </div>
    </div>
</body>
        
    </body>
    </html>  