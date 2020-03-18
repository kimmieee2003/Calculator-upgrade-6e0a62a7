<?php 
echo ("Welke operatie wil je uitvoeren? (+, -, %)");
$uitvoering = readline();
if ($uitvoering == "+") {
echo ("Eerste getal?");
$Eerste = readline();
echo ("Tweede getal?");
$Tweede = readline();
    if(is_numeric($Eerste)&&is_numeric($Tweede)) {
    echo (int) ($Eerste + $Tweede);
    }else{
    echo"Dit is geen getal";
    }
}elseif($uitvoering == "-") {
    echo ("Eerste getal?");
    $Derde = readline();
    echo ("Tweede getal?");
    $Vierde = readline();
    if (is_numeric($Derde)&&is_numeric($Vierde)) {
        echo (int) ($Derde - $Vierde);
    }else{
        echo"Dit is geen getal";
    }
}elseif($uitvoering == "%") {
    echo ("Eerste getal?");
    $Vijfde = readline();
    echo ("Tweede getal?");
    $Zesde = readline();
    if(is_numeric($Vijfde)&&is_numeric($Zesde)) {
        echo (int) ($Vijfde % $Zesde);
    }else{
        echo"Dit is geen getal";
    }
}else{
    echo "Dit is geen operatie.";
}
?>

