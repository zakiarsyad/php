<?php
	class Human {
        public $age = '30';
        public $name = 'Human';

        public function introduce() {
            return "Hi! I am $this->name, I am $this->age years old.";
        }
    }

    $human1 = new Human();
    $human2 = new Human();
    $human3 = new Human();
    $human4 = new Human();

    echo $human4->introduce();
?>