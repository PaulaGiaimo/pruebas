<!
DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
include("codigoC.php");

$elTexto=$_POST['eltexto'];
echo "<br><br><br>Texto Ingresado :$elTexto <br>";
$cantidadDeLetras=strlen($elTexto);
//echo "cantidad de letras $cantidadDeLetras<br>";
echo "TEXTO CIFRADO: ";
for($i=0;$i<strlen($elTexto);$i++)
{
    $ascii=ord($elTexto[$i]);
        
    switch($ascii){
        //transferir el espacio sin cifrar
        case 32: 
        $cifrado=32;
        break;
         //cifrar las letras X Y Z
        case 88: 
        case 89:
        case 90:
        case 120: 
        case 121:
        case 122:
            $cifrado=$ascii-23;
            break;
        default: $cifrado=$ascii+3;
    }
    $textoCifrado[$i]=chr($cifrado);
    echo "$textoCifrado[$i]";
}
?>
</body>
</html>