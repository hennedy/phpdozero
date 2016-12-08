<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>PHP do Zero</title>
</head>
<body>
<div>
    <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        echo "Valores recebidos $n1 e $n2 ";
        $m = ($n1+$n2)/2;
        
        echo "<br/>A soma vale ". ($n1+$n2);
        echo "<br/>A subtração vale ". ($n1-$n2);
        echo "<br/>A multiplicação vale ". ($n1*$n2);
        echo "<br/>A divisão vale ". ($n1/$n2);
        echo "<br/>O módulo vale ". ($n1%$n2);
        echo "<br/>A media vale $m";
    ?>
</div>
</body>
</html>
 