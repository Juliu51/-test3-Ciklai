<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            margin: 0 10px;
            height: 1500px;
            width: 1500px;
            overflow-wrap: break-word;

        }
         </style>
    <title>CIKLAI</title>
</head>
<body>
 
<?php 
//////PIRMA UZDUOTIS///////////
echo '1--';
echo '<br>';

for ($i=0; $i < 400; $i++) { 
    if(($i % 50) == 0) {
        echo '<br>';
    }
    echo '*';
}
echo '<br>';
echo '<br>';
//////ANTRA UZDUOTIS///////////
echo '2---';
echo '<br>';
echo '<br>';
$count = 0;

for ($i=0; $i < 300; $i++) { 
    $rand = rand(0,300);
    if($rand > 275) {
        echo '<span style="color:red"' . $rand . " " . '</span>';
    } else {
        echo '<span style="color:black"' . $rand . " " . '</span>'; 
    }
    if($rand > 150) {
        $count++;
    }
    echo '<span>' . $rand . " " . '</span>';
    
    
}
echo '<br>';
echo '<br>';
echo '<p style="color:blue">' . 'Daugiau uz 150 yra: ' . $count . '</p>';

echo '<br>';
echo '<br>';
//////TRECIA UZDUOTIS///////////
echo '3---';
echo '<br>';
echo '<br>';

$rand = rand(3000,4000);
$numNew = '';
$num = array();

for ($k=0; $k < $rand; $k++) { 
    if(($k+1) % 77 == 0) {
       $num[] = $k+1;
}
}
$numNew = implode(",", $num);
echo($numNew);
echo '<br>';
echo '<br>';
//////KETVIRTA UZDUOTIS///////////
echo '4---';
echo '<br>';
echo '<br>';

for ($z=0;$z < 1000; $z++) { 
    echo "*";
}
echo '<br>';
echo '<br>';
//////SESTA UZDUOTIS///////////
echo '6---';
echo '<br>';
echo '<br>';

$Moneta = rand(0,1);
if ($Moneta == 1) {
    echo "S";
} else {
    echo "H";
}
echo '<br>';
//SCENARIJUS A//
$Moneta = 0;
if ($Moneta == 1) {
    echo "S";
} else {
    echo "H";
}


echo '<br>';
echo '<br>';
//////SEPTINTA UZDUOTIS///////////
echo '7---';
echo '<br>';
echo '<br>';

$Petras = 0;
$Kazys = 0;

for ($sumK=0; $sumK <= 222 ; $sumK++) { 
    $Krand= rand(5,25);
    $sumK += $Krand;
}
echo "Kazio taskai: " . $sumK;
echo '<br>';

for ($sumP=0; $sumP <= 222 ; $sumP++) { 
    $Prand= rand(10,20);
    $sumP += $Prand;
}
echo "Petro taskai: " . $sumP;
echo '<br>';

if ($sumP > $sumK) {
echo "Zaidima Laimi Petras";
    # code...
} else if($sumP < $sumK) {
    echo "Zaidima Laimi Kazys";
} else {
    echo "Lygiosios";
}

echo '<br>';
echo '<br>';
//////ASTUNTA UZDUOTIS///////////
echo '8---';
echo '<br>';
echo '<br>';






?>

</body>
</html>