<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Simple PHP Calculator</title>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="calc_res.php">
        <input type="number" name="num1" step="any" required placeholder="First number" />
        <select name="operator" required>
            <option value="">Select operation</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" step="any" required placeholder="Second number" />
        <button type="submit" name="calculate">Calculate</button>
    </form>



</body>
</html>
