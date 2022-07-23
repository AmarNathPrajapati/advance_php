<?php
    class employee{
        
        public $name;
        public $age;
        public function __construct($name,$age)
        {
            $this->name=$name;
            $this->age=$age;
        }

    }
    class programmer{
        public $lang;
        public function __construct($name,$age,$lang)
        {
            $this->name=$name;
            $this->age= $age;
            $this->lang=$lang;
        }
    }
    $amar = new programmer("Amar Nath",19,"php");
    echo $amar->name;
    echo $amar->age;
    echo $amar->lang;
?>