<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {
    background-color: #f0f0f0;
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.calculator {
    background-color: #fff;
    padding: 30px;
    border-radius: 12px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    text-align: center;
    width: 350px;
}

input,
select,
button {
    margin: 10px 0;
    padding: 10px;
    font-size: 16px;
    width: 100%;
    border-radius: 8px;
    border: 1px solid #ccc;
}

button {
    background-color: #4CAF50;
    color: white;
    cursor: pointer;
    border: none;
}

button:hover {
    background-color: #45a049;
}

h1 {
    color: #333;
}

h3 {
    margin-top: 20px;
    color: #222;
}

.result-box {
    margin-top: 20px;
    padding: 15px;
    background-color: #e0f7e9;
    color: rgb(0, 0, 0);
    /* hijau muda */
    border: 1px solid #2ecc71;
    border-radius: 8px;
    text-align: center;
    font-weight: bold;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}
</style>

<body>
    <div class="calculator">
        <h2>Kalkulator sederhana</h2>
        <form method="post">
            <input type="number" step="any" name="num1" required placeholder="Angka pertama">
            <select name="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="number" step="any" name="num2" required placeholder="Angka kedua">
            <button type="submit" name="calculate">Hitung</button>
        </form>
        <?php
        if (isset($_POST['calculate'])) {
             $num1 = (float) $_POST['num1'];
             $num2 = (float) $_POST['num2'];
    $operator = $_POST['operator'];
    $result = '';

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
        case '/':
            if ($num2 == 0) {
                $result = "Error: pembagian dengan nol!";
            } else {
                $result = $num1 / $num2;
            }
            break;
        default:
            $result = "operator tidak valid";
            break;
        }
            echo "<div class='result-box'>Hasil: $result</div>";
        
}
    ?>
    </div>
</body>

</html>