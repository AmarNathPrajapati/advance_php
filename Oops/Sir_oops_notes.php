<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to OOPs</title>
</head>
<body>
    <h1>This is Oops Tutorial</h1>
    <h2>What is Oops?</h2>
    <p>OOPs is about creating classes and objects. Class serves as a template and multiple objects can be created using a class</p>

    <h2>What are Classes and Objects</h2>
    <p>Classes are templates for creating objects</p>
    <p>If car is a class then maruti suzuki alto and maruti Swift are two objects</p>
    
    <h2>Why OOPs</h2>
    <p>OOPs makes it easy to keep the code DRY? </p>
    <p>DRY - Do not repeat yourself - the code written by the programmer should be reusable</p> 
</body>
</html>






<?php
class Player {
    // Properties
    public $name;
    public $speed = 5;
    public $running = false;

    // Methods
    function set_name($name){
        $this->name = $name;
    }
    
    function get_name(){
        return $this->name;
    }

    function run(){
        $this->running = true;
    }

    function stopRun(){
        $this->running = false;
    }
}

echo "Lets understand OOPs Using GTA Vice City <br>";
$player1 = new Player();
$player1->set_name("Harry");
echo $player1->get_name();
echo "<br>";
echo $player1->speed;
echo "<br>";

$player2 = new Player();
$player2->set_name("Rohan");
echo $player2->get_name();
echo "<br>";

$player3 = new Player();
$player3->set_name("SkillF");
echo $player3->get_name();
echo "<br>";


?>






<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary;

        // Methods of Our Class
        // Constructor - It allows you to initialize objects. It is the code which is executed whenever a new object is instantiated.

        // Constructor without arguments
        // function __construct(){
        //     echo "This is my constructor for employee";
        // }

        // Constructor with arguments
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;

        }

    }

    $rohan = new Employee("Rohan", 73000);
    $harry = new Employee("Harry", 10000);
    $skillF = new Employee("SkillF", 56000); 

    echo "The salary of harry is $harry->salary <br>";
    echo "The salary of skillF is $skillF->salary";
?>









<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary; 

        // Constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;
        }

        // Destructor
        function __destruct(){
            echo "I am destructing $this->name <br>";
        }
    }

    $rohan = new Employee("Rohan", 73000);
    $harry = new Employee("Harry", 10000);
    $skillF = new Employee("SkillF", 56000); 

    echo "The salary of harry is $harry->salary <br>";
    echo "The salary of skillF is $skillF->salary <br>";
?>











<?php 
    // Access modifiers in Php
    // 1. Public - can be accessed from anywhere
    // 2. Private - can only be accessed from within the class
    // 3. Protected - can be accessed from withing the class and from derived class

    // By default the properties and methods are treated as public
    // Private properties and methods can only be accessed by other member functions of the class

    
    class Employee{

        private $name = "harry";

        function showName(){
            echo "$this->name";
        }
    }

    $harry = new Employee();
    // echo $harry->name; -> This will not work if harry is private
    $harry->showName();
?>








<?php 
    echo "What is Inheritance?<br>";
    class Employee{

        public $name = "harry";
        private $salary = 12000;
        private $grade = 3;

        function setSalary($salary){
            $this->salary = $salary; 
        }

        function getSalary(){ 
            echo "The salary of employee is $this->name is $this->salary <br>";
        }

        function showName(){
            echo "The name of this employee is $this->name <br>";
        }
    }

    // Inheriting a new class Programmer from Employee
    class Programmer extends Employee{
        private $language = "php";

        function changeLanguage($lang){
            $this->language = $lang; 
            // echo $this->grade; --> This will throw an error because grade is private in the parent class
        }
    }

    $rohan = new Employee();
    $rohan->name = "Rohan";
    $rohan->setSalary(100);
    $rohan->getSalary();
    $rohan->showName();

    $shubham = new Employee();
    $shubham->name = "Shubham";
    $shubham->setSalary(10000000);
    $shubham->getSalary();
    $shubham->showName();

    $geeta = new Programmer();
    $geeta->name = "Geeta";
    echo $geeta->changeLanguage("Python");
    $geeta->getSalary();
    $geeta->showName();

?>







