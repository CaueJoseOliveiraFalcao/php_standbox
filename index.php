<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">numero1</label>
        <input type="number">
        <label for="">numero2</label>
        <input type="number">
        <input type="submit">
    </form>
    <?php
    function SumOfNumbers($n1,$n2){
        $soma = $n1 + $n2;
        echo $soma;
    }
    ?>
    SumOfNumbers(2,4);
</body>


</html>

