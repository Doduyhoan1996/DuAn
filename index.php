<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$height = $weight=$pl=$benh='';
if (isset($_POST['height']) && isset($_POST['weight'])){
    $height = (float) $_POST['height'];
    $weight = (float) $_POST['weight'];
    $bmi =$weight/($height*$height);

    if ($bmi < 18.5) {
        echo "<br> Phân loại gầy";
    } elseif ( ($bmi >= 18.5) && ($bmi <= 24.9 ) ) {
        echo "<br>Bình thường";
    } elseif ( ($bmi >= 25) && ($bmi <= 29.9 )) {
        echo "<br> Hơi béo";
    } elseif ( ($bmi >= 30) && ($bmi <= 34.9 )) {
        echo "<br> Béo phì độ 1";
    } elseif ( ($bmi >= 35) && ($bmi <= 39.9 )) {
        echo "<br> Béo phì độ 2";
    } elseif ($bmi >= 40) {
        echo "<br> Béo phì độ 3";
    } else {
        echo "<br> Không xác định";
    }


    echo "chỉ số BMI là $bmi";
    echo "<br>";
    echo "phân loại: $pl";
    echo "<br>";
    echo "nguy cơ phát triển bệnh: $benh";
}
?>
<div class="container">
    <h1>Tính chỉ số BMI</h1>
    <div class="row">
        <form name="bmi" action="" method="post">
            <div class="form-group">
                <label>Chiều Cao (m)</label>
                <input type="text" class="form-control" name="height" placeholder="Nhập chiều cao (m)" value="<?php echo $height ?>" required>
            </div>
            <div class="form-group">
                <label>Cân nặng (kg)</label>
                <input type="text" class="form-control" name="weight" placeholder="Nhập cân nặng (kg)" value="<?php echo $weight ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</body>
</html>