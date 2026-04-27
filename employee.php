<?php
class Employee {
    public $name;
    private $age;
    public $salary; /*1*/
    
    public function getName() {
        return $this->name;
    } /*3*/
   
    public function getAge() {
        return $this->age;
    } /*4*/
    
    public function getSalary() {
        return $this->salary;
    } /*5*/
    
    private function checkAge($age) {
        if ($age >= 18) {
            return true;
        } else {
            echo "Вам работать в нашей компании еще рано<br>";
            return false;
        }
    } /*9*/
    
    public function setAge($age) {
        if ($this->checkAge($age)) {
            $this->age = $age;
            return true;
        }
        return false;
    } /*7*/
}

$employee1 = new Employee();
$employee2 = new Employee();

$employee1->name = "Иван";
$employee1->setAge(25);
$employee1->salary = 50000;

$employee2->name = "Мария";
$employee2->setAge(17);
$employee2->salary = 60000;

echo "сумма зарплат: " . ($employee1->getSalary() + $employee2->getSalary()) . "<br>";
echo "сумма возрастов: " . ($employee1->getAge() + $employee2->getAge()) . "<br>"; /*2*/

echo "работник 1: " . $employee1->getName() . "<br>";
echo "возраст работника 1: " . $employee1->getAge() . "<br>";
echo "зп работника 1: " . $employee1->getSalary() . "<br>";

echo "возраст работника 2: " . $employee2->getAge() . "<br>";
echo "зп работника 2: " . $employee2->getSalary() . "<br>";

function getTotalSalary($employees) {
    $sum = 0;
    foreach ($employees as $employee) {
        $sum += $employee->getSalary();
    }
    return $sum;
}

$employees = [$employee1, $employee2];
echo "<br>сумма зарплат через функцию: " . getTotalSalary($employees) . "<br>";

$employee3 = new Employee();
$employee3->setAge(20);

foreach ($employees as $employee) {
    echo "имя: " . $employee->getName() . 
         ", возраст: " . $employee->getAge() . 
         ", зп: " . $employee->getSalary() . "<br>";
}

?>
