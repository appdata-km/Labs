<?php


class ID
{
    	private $name;
    	private $surname;
    	private $age;
    	private $sex;
	private $number;

    public function __construct($age, $sex, $number)
    {
        $this ->age = $age;
        $this ->sex = $sex;
	$this ->number = $number;
    }


    public function setName($name){
        $this -> name = $name;
    }

    public function setSurname($surname){
        $this -> surname = $surname;
    }

    public function getAge(){
        return $this -> age;
    }

    public function getSex(){
        return $this -> sex;
    }

    public function getNumber(){
        return $this -> number;
    }

    public function getName(){
        return $this -> name;
    }

    public function getSurname(){
        return $this -> surname;
    }

    public function printObj(){
        echo "<br><br>";
        echo "���: " .$this ->getName(). "<br>";
        echo "�������: " .$this->getSurname(). "<br>";
        echo "�������: " .$this->getAge(). "<br>";
        echo "���: " .$this->getSex(). "<br>";
	echo "�����: " .$this->getNumber(). "<br>";
    }
}

?>