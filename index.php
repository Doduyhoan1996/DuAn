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

    if ($bmi<18.5) {
        $pl="Gầy";
        $benh="Thấp";
    } elseif ( (18.5 <= $bmi) && ($bmi <= 24.9) ){
        $pl="Bình Thường";
        $benh="TB";
    } elseif ( (25 >= $bmi) && ($bmi <= 29.9) ){
        $pl="Hơi Béo";
        $benh="Cao";
    } elseif ( (30 >= $bmi) && ($bmi <= 34.9) ){
        $pl="Béo Cấp độ 1";
        $benh="Cao";
    } elseif ( (35 >= $bmi) && ($bmi <= 39.9)) {
        $pl = "Béo Cấp độ 2";
        $benh = "Rất Cao";
    } elseif ($bmi > 40.9) {
        $pl = "Béo Cấp độ 3";
        $benh = "Nguy hiểm";
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