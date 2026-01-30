<?php
$height = $_GET['height'];
$weight = $_GET['weight'];
//BMI計算
$BMI = $weight / (($height / 100) * ($heighta / 100));
if($BMI < 18.5){
    echo "<div style='background-color: blue';>過輕</div>";
}elseif($BMI >= 18.5 AND $BMI < 24){
    echo "<div style='background-color: green';>正常範圍</div>";
}else{
    echo "<div style='background-color: orange';>過重</div>";
}
?>