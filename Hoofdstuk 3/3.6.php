<?php

$a = 25;
$b = 32;
$c = 11;
$d = 23;

?>

<table border="1">
    <tr>
        <th>
            De spartelkuikens
        </th>
        <th>
            <?php
            echo $a;
            ?>
        </th>
        <th>
            <?php
            for ($i = 1; $i <= $a/5; $i++) {
                echo "<img src='IMG/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>
            De Waterbuffels
        </th>
        <th>
            <?php
            echo $b;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $b/5; $i++){
                echo "<img src='IMG/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>
            Plonsmderin
        </th>
        <th>
            <?php
            echo $c;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $c/5; $i++){
            echo "<img src='IMG/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>
    </tr>
    <tr>
        <th>
            Bommetje
        </th>
        <th>
            <?php
            echo $d;
            ?>
        </th>
        <th>
            <?php
            for($i = 1; $i <= $d/5; $i++){
            echo "<img src='IMG/swim.png' width='50px' height='50px'>";
            }
            ?>
        </th>
    </tr>
</table>
