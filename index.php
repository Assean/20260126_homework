<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Form</title>
    <!-- <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        form{
            width: 250px;
            height: 500px;
            border-radius: 10px;
            background-color: aquamarine;
        }
    </style> -->
</head>
<body>
    <form action="index.php" method="get">
        <p>
            <label for="">身高</label>
            <input type="text" name="height" id="height">
        </p>
        <p>
            <label for="">體重</label>
            <input type="text" name="weight" id="weight">
        </p>
            <button type="submit" value="計算BMI">計算BMI</button>
    </form>
</body>
</html>
<?php
$height = $_GET['height'];
$weight = $_GET['weight'];
//BMI計算
$BMI = $weight / (($height / 100) * ($height / 100));
if($BMI < 18.5){
    echo "<div style='background-color: blue';>過輕</div>";
}elseif($BMI >= 18.5 AND $BMI < 24){
    echo "<div style='background-color: green';>正常範圍</div>";
}else{
    echo "<div style='background-color: orange';>過重</div>";
}
?>