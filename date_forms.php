<html>  
<body>
<form method="post">
    <input type="date" name="date1" required>
    <input type="date" name="date2" required>
    <button type="submit">Сравнить</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $date1_input = $_POST['date1'];
    $date2_input = $_POST['date2'];
    
    $date1_obj = date_create($date1_input);
    $date2_obj = date_create($date2_input);
    
    if ($date1_obj > $date2_obj) {
        echo "Первая дата больше: " . date_format($date1_obj, "Y-m-d") . "<br>";
    } elseif ($date2_obj > $date1_obj) {
        echo "Вторая дата больше: " . date_format($date2_obj, "Y-m-d") . "<br>";
    } else {
        echo "Даты равны<br>";
    }
}
?>


</body>  
</html>
