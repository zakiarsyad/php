<?php
	class Human {
        public $age = '30';
        public $name = 'Human';

        public function __construct($nameInput, $ageInput) {
            $this->name = $nameInput;
            $this->age = $ageInput;
        }

        public function introduce() {
            return "Hi! I am $this->name, I am $this->age years old.";
        }

        public function greet() {
            $greeting = $this->introduce();
            return "Good morning! $greeting";
        }
    }

    $human1 = new Human("Zaki", "20");
    $human2 = new Human("Silvi", "22");

    echo $human2->greet();
?>