<?php

foreach ($_POST['drivers'] as $driver) {
    echo "<img src='IMG/".$driver.".jpg'>";
}
//echo "<img src='IMG/".$_POST['drivers'].".jpg'>";