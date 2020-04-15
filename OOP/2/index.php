<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Калькулятор</h1>
    <form action="calk.php" method="post">
        <input type="text" name="a">
        <select name="op" id="">
            <option value="div">/</option>
            <option value="mul">*</option>
            <option value="sum">+</option>
            <option value="dif">-</option>

        </select>
        <input type="text" name="b">
        <input type="submit" name="ok">
    </form>
</body>
</html>