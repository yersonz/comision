<!DOCTYPE html>
<html lang="en">
<head>
    <title>COMISION</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="yape()">YAPE</button>
                <button type="button" class="toggle-btn"onclick="izi()">IZIPAY</button>
            </div>
            
    
        <form id="yape" action="monto1.php" class="input-group" method="post">
            <div class="social-icons">
            <img src="img/yape.jpg">   
            </div>
            <input type="number" name="monto" class="input-field" placeholder="ingresar monto" required>
            <input type="submit" class="submit-btn" value="CALCULAR"></input>

        </form>


        <form id="izi" action="monto2.php" class="input-group" method="post">
                <div class="social-icons">
                <img src="img/izi.png">   
                </div>
            <input type="number" name="monto1" class="input-field" placeholder="ingresar monto" required>
            <input type="submit" class="submit-btn" value="CALCULAR"></input>
        </form>
 
        </div>   
    </div>
    <script>
        var x = document.getElementById("yape");
        var y = document.getElementById("izi");
        var z = document.getElementById("btn");
        function izi(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function yape(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
    </script>
  
</body>

</html>

