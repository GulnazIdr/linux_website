<?php
try {
    $file = fopen("file.txt", "r");
    if (!$file) {
        throw new Exception("file doesnt exist");
    }
} catch(Exception $ex) {
    echo 'exception ' . $ex->getMessage();
}

try {
    $number1 = 10;
 $number2 = 0;
 $number = $number1 / $number2;
} catch(DivisionByZeroError $e) {
    $log = fopen("log.txt", "w");
    fwrite($log, $e->getMessage());
    fclose($log);
}

try {
    $countries = ['Spain' => 'Madrid', 'Russia' => 'Moscow'];
    if (!isset($countries['Germany'])) {
        throw new Exception("error element doesnt exist");
    }
    echo $countries['Germany'];
} catch(Exception $e) {
    echo 'exception ' . $e -> getMessage();
}
?>
