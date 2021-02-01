<?php
//  array declaration/definiation ...
$namesAge = array("Qozeem"=>"1", "Banji"=>"2", "Odeniran"=>"2021");

// looping through the array using "foreach" loop...
foreach($namesAge as $key => $value)
{
    echo $key . " is " . $value . " years old.";

    echo "<br>";
}
?>