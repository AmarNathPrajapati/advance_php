<?php
    class employee{
        public $name;
        public $salary;
        // private $bonus=500;
        public $bonus=500;
        function getBonus(){
            echo "the bonus of each employee is$this->bonus<br>";
        }

        public function __construct($name,$salary)
        {
            $this->name=$name;
            $this->salary=$salary;
            echo "I am also breathing<br>";
        }
        // function __destruct()
        // {
        //     echo "$this->name object is desructing<br>";
        // }
    }
    class programmer extends employee{
        public $lang;
        public function  __construct($name,$salary,$lang)
        {
            $this->$lang=$lang;
            $this->$name=$name;
            $this->$salary=$salary;
            echo $this->lang;
            echo $this->name;
            echo $this->salary;
            echo "I am breathing++<br>";
            echo $this->bonus;

        }
    }
    // $Chandan = new employee("Chandan",100);
    // $amar = new employee("Amar",200);
    // $golu= new employee("Golu",1000);
    // echo "The name of the employee is $amar->name <br>";
    // echo "The salary of the employee is $amar->salary<br>";
    // echo "The name of the employee is $golu->name <br>";
    // echo "The salary of the employee is $golu->salary<br>";
    // echo "The name of the employee is $Chandan->name <br>";
    // echo "The salary of the employee is $Chandan->salary<br>";
    // $Chandan->getBonus();
    $Amar_Nath = new programmer("Amar Nath",100,"python");
    echo "The bonus of the employee is $Amar_Nath->bonus<br>";
    echo "The name of the employee is $Amar_Nath->name<br>";
?>