<html>
<head>
    <title>YAPE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="hero">
<div class="social-icons">
            
        <div class="form-box">
        <div class="button-box">
        <div class="social-icons">
            <img src="img/yape.jpg">   
            </div>
            <form class="input-group">

<?php
    if ($_POST) {
        $monto = $_POST["monto"];
        $porcentaje = $monto * 2 / 100;
        $montototal= $monto + $porcentaje;
        if ($monto<0) {
            print "no hay monto que calcular";
        }else {
            print "MONTO:"." ".$monto."<br>"."+"."<br>";
            print "COMISION YAPE:"." ".round($porcentaje,1)."<br>"."<br>";
            echo "MONTO A PAGAR:" . " ".round($montototal,2)."<br>";
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
    \</html>