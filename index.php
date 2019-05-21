<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
if (isset($_POST['height']) && isset($_POST['weight'])){
    $height = (int) $_POST['height'];
    $weight = (int) $_POST['weight'];
    $bmi =$weight/($height*$height);
    echo "chỉ số BMI là $bmi";
}
?>
<div class="container">
    <div class="row">
        <h1>Tính chỉ số BMI</h1>
        <form name="bmi" action="" method="post">
            <div class="form-group">
                <label>Chiều Cao (m)</label>
                <input type="text" class="form-control" name="height" placeholder="Nhập chiều cao (m)" required>
            </div>
            <div class="form-group">
                <label>Cân nặng (kg)</label>
                <input type="text" class="form-control" name="weight" placeholder="Nhập cân nặng (kg)" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>

</body>
</html>