<?php
    echo "here I am learning oops in php";
    class player{

        public $name;
        public $speed=10;

        function set_name($name){
            $this->name=$name;
        }
        function get_name(){
            return $this->name;
        }
    }
    $Amar = new player();
    echo "$Amar->speed<br>";
    $Amar->set_name("Chandan");
    echo "$Amar->name<br>";
    echo $Amar->get_name();
?>