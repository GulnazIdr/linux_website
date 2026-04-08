<?php
if (!isset($_POST["email"]) || !isset($_POST["password"])) {
    echo "Ошибка: форма отправлена не корректно";
    exit;
}

$email = $_POST["email"];
$password = $_POST["password"];
$confirm = $_POST["password_repeat"];
$name = $_POST["name"] ?? "";
$gender = $_POST["gender"] ?? "";

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Результат</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="form-box">
    <h2>Результат регистрации</h2>

    <?php
    if (empty($email) || empty($password)) {
        echo "<p class='message'>Поля Email и Пароль обязательны!</p>";
    }
    elseif ($password != $confirm) {
        echo "<p class='message'>Пароли не совпадают</p>";
    } else {
        echo "<p class='success'>Регистрация успешна!</p>";
        echo "<p>Email: $email</p>";
    }
    ?>

    <a href="index.php">Назад</a>
    <a href="calc.php">Калькулятор</a>
</div>

</body>
</html>
