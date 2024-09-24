<?php
$tab = array();

for($i=0;$i<20;$i++){
    $tab[$i] = rand(1,50); 
}

foreach($tab as $item){
    echo $item," ";
}

$lenght = count($tab);
echo "<br>dlugosc: ",$lenght


$tab = array(3,9,1,2,4,8,7,5,3,1);
echo "tab przed: ";
foreach($tab as $item){
    echo $item," ";
}

echo "<br>tab po: ";
foreach($tab as $item){
    echo $item+2," ";
}
$parzyste = 0;
$nieparzyste = 0;
foreach($tab as $item){
    if($item%2==0){
        $parzyste++;
    }else{
        $nieparzyste++;
    }
}
echo "ilosc parzystych: ",$parzyste;
echo "<br>ilosc nieparzystych: ",$nieparzyste;

$sum = 0;
foreach($tab as $elem){
    $sum += $elem;
}
echo "suma: ",$sum;


$tab2 = array(
    "day1"=>"monday",
    "day2"=>"tuesday",
    "day3"=>"wednesday",
    "day4"=>"thursday",
    "day5"=>"friday",
    "day6"=>"saturday",
    "day7"=>"sunday",
);

foreach($tab2 as $key => $desc){
    echo $key,": ",$desc,"<br>";
}

$tab["name"]="jan";
$tab["surname"]="kowalski";
$tab["street"]="zwycienstwa";

echo $tab["name"]." ".$tab["surname"]." ul. ".$tab["street"]

$tab[0] = array("miejscowosc"=>"wawa",
                "zaludnienie"=>2000000);
$tab[1] = array("miejscowosc"=>"krakow",
                "zaludnienie"=>1000000);
$tab[2] = array("miejscowosc"=>"poznan",
                "zaludnienie"=>450000);
$tab[3] = array("miejscowosc"=>"kato",
                "zaludnienie"=>600000);
$tab[4] = array("miejscowosc"=>"torun",
                "zaludnienie"=>700000);
$tab[5] = array("miejscowosc"=>"bialystok",
                "zaludnienie"=>650000);

foreach($tab as $elem){
    if($elem["zaludnienie"]>=600000 and $elem["zaludnienie"]<=700000){
        echo $elem["miejscowosc"]."<br>";
    }
}

$cena = array(
    'mleko'=>'10zl',
    'jogurt'=>'6zl',
    'szynka'=>'12zl',
    'ser'=>'11.50zl',
    'maslo'=>'4.75zl',
    'jablko'=>'2zl',
    'marchew'=>'3zl',
    'ziemniak'=>'1.50zl',
    'keczup'=>'6.99zl',
);

natsort($cena);
foreach($cena as $item => $desc){
    echo $item,": ",$desc,"<br>";
}

$tab = array(1,3,4,5,6,7,8,9,10,2);

if(in_array(2,$tab)){
    echo "jest";
}else{
    echo "nie ma";
}

$text = ("Litwo, Ojczyzno moja!
        Ty jestes jak zdrowie,
        Ile cie trzeba cenic");

echo $text."<br>";
echo nl2br($text)."<br>";
echo wordwrap($text,20,"<br>",true);


?>
