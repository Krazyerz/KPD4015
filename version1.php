<?php

//Array Jujukan
$result = array(//array pertama = pelajar
    "Riyad"=>array('KPD4015'=>80, 'SEJARAH'=>80, 'DISCRETE MATH'=>90, 'KPD4024'=>85, 'P.ISLAM'=>90),
    "Hamsyar"=>array('KPD4015'=>70, 'SEJARAH'=>75, 'DISCRETE MATH'=>92, 'KPD4024'=>87, 'P.ISLAM'=>91),
    "Fatin Adlina"=>array('KPD4015'=>90, 'SEJARAH'=>92, 'DISCRETE MATH'=>73, 'KPD4024'=>89, 'P.ISLAM'=>78),
    "Faheea Aided"=>array('KPD4015'=>60, 'SEJARAH'=>72, 'DISCRETEMATH'=>83, 'KPD4024'=>79, 'P.ISLAM'=>75),
    "Nadia Nabila"=>array('KPD4015'=>95, 'SEJARAH'=>92, 'DISCRETE MATH'=>93, 'KPD4024'=>82, 'P.ISLAM'=>76)
);

foreach($result as $Pelajar=>$value)
{
    echo'Pelajar:'.$Pelajar;
    echo"<br>";

    foreach ($value as $subjek=>$rst)
    {
        echo'Subjek:'.$subjek."Result:".$rst;
        echo"<br>";
    }

    echo "--------------------------------";
    echo"<br>";
}

?>

