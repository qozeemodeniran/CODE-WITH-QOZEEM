<?php

$studentInfo = array(
    array("Qozeem Odeniran", "Unilorin", "Intern"),
    array("Omotayo Odupitan", "Yaba College of Technology", "CTO"),
    array("Anuoluwa Awe", "Unilag", "HR Manager"),
    array("Chritian Emeodi", "Unilag", "CFO"),
);
echo "<h2>PHP Multidimensional Array </h2><br>";
echo $studentInfo[0][0] . " attended " . $studentInfo[0][1] . " and currently the " . $studentInfo[0][2] . " at Parmz Digital Technologies." . "<br>";
echo $studentInfo[1][0] . " attended " . $studentInfo[1][1] . " and currently the " . $studentInfo[1][2] . " at parmz" . "<br>";
echo $studentInfo[2][0] . " attended " . $studentInfo[2][1] . " and currently the " . $studentInfo[2][2] . " at parmz" . "<br>";
echo $studentInfo[3][0] . " attended " . $studentInfo[3][1] . " and currently the " . $studentInfo[3][2] . " at parmz" . "<br>";

echo "<br>";
echo "<h2>Using 'for' loop inside another 'for' loop</h2>";
for($row = 0; $row < 4; $row++)
{
    echo "<p><b>Staff row $row</b></p>";

    echo "<ul>";

    for($col = 0; $col < 3; $col++)
    {
        echo "<li>". $studentInfo[$row][$col] . "</li>";
    }
    echo "</ul>";
}

?>