<?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = null;

        if (!is_numeric($num1) || !is_numeric($num2)) {
            echo "<p>Please enter valid numbers.</p>";
        } else {
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
                        echo "<p>Division by zero is not allowed.</p>";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
                default:
                    echo "<p>Please select a valid operation.</p>";
            }
            if ($result !== null) {
                echo "<p>Result: <strong>" . htmlspecialchars($result) .  "</strong> operator " . htmlspecialchars($operator)
 " </p>";
            }
        }
    }
?>
