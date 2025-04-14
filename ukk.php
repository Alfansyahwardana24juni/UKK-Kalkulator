<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    background-color: rgb(201, 201, 201);
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 50px;

}

.kalkulator {
    padding: 30px;
    width: 350px;
    background-color: white;
    border-radius: 20px;
}

form {
    width: 20px;
    margin: 50px;
    margin-top: 20;
}

input {}
</style>

<body>
    <div class="kalkulator">
        <h2>Kalkulator Sederhana</h2>
        <form method="post">
            <input type="number" step="any" name="num1" required>
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" step="any" name="num2" required>
            <button name="calculate">Hitung</button>
        </form>
        <?php
    if (isset($_POST['calculate'])) {
        $num1 = (float) $_POST['num1'];
        $num2 = (float) $_POST['num2'];
        $operator =  $_POST['operator'];
        $result =  [''];

        switch ($operator) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '*':
                $result = $num1 * $num2;
                break;
            case '/';
            if ($num2 == 0) {
                $result = "Error : hasil di bagi dengan nol!";
            }
            else {
                $result = $num1 / $num2;
            }
            default:
            $result = "Operator tidak valid!";
            break;
        }

        echo "<h2>Hasil: $result</h2>";
    }
?>
    </div>
</body>

</html>