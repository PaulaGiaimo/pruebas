<!
DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body background-color=violet>
<?php
include("codigoC.php");

$elTexto=$_POST['eltexto'];
echo "<br><br><br>sin cifrar :$elTexto <br>";
$cantidadDeLetras=strlen($elTexto);
//echo "cantidad de letras $cantidadDeLetras<br>";
echo "TEXTO CIFRADO: ";
for($i=0;$i<strlen($elTexto);$i++)
{
    $ascii=ord($elTexto[$i]);
        
    switch($ascii){
        //transferir el espacio sin cifrar
        case 32: 
        $descifrado=32;
        break;
         //cifrar las letras X Y Z
        case 65: 
        case 66:
        case 67:
        case 97: 
        case 98:
        case 99:
            $descifrado=$ascii+23;
            break;
        default: $descifrado=$ascii-3;
    }
    $textoCifrado[$i]=chr($descifrado);
    echo "$textoCifrado[$i]";
}
?>
</body>
</html>