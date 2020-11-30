<head>
    <style>
        .red {
           border: 2px red solid;
        }
        .green {
            border: 2px green solid;
        }
    </style>
</head>
<body>

<?php

for($a = 1; $a <= 9; $a++){
    if($a % 2 == 0){
        echo "<img class='red' src='IMG/f".$a.".jpg'>";
    }else{
        echo "<img class='green' src='IMG/f".$a.".jpg'>";
    }
}

?>

</body>
