<?php

$arr = array(1,2,3,4);

for ($i=0; $i < 4; $i++) { 
    echo $arr[$i];
    echo "<br>";
}

echo "<br>";

foreach ($arr as $value) {
    echo $value;
    echo "<br>";
}


?>