<?php
$result = mt_rand(1,4);

if($result == 1){
    echo 'Kop<br/>';
} else if($result == 2) {
    echo 'Munt<br/>';
} else{
    echo 'Geen van beide<br/>';
}

switch($result){
    case 1:
        print "Result is gelijk aan ". $result ." dus het is kop<br/>";
        break;
    case 2:
        print "Result is gelijk aan ". $result ." dus het is munt<br/>";
        break;
    default:
        print "Result is nergens gelijk aan<br/>";
        break;
}

$max = 10;
$number = 5;
//for($x = 1; $x <= $max; $x++){
//    echo 'teller: ' . $number*$x . '<br/>';
//}
$x = 1;
while($x !== 11){
    echo $number*$x . '<br/>';
    $x++;
}

$string = " dEzE TeKsT ";

$func = function ($tekst){
    $trimmed = trim($tekst);
    echo ucwords(strtolower($trimmed));
};

return $func(" dEzE TeKsT ");