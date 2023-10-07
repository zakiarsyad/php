<?php
	abstract class Human {
        protected $age = '30';
        protected $name = 'Human';

        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        public function introduce() {
            return "Hi! I am $this->name, I am $this->age years old.";
        }
    }

    class Programmer extends Human {
        private $language;
    
        public function __construct($name, $age, $language) {
            parent::__construct($name, $age);
            $this->language = $language;
        }
    
        public function code() {
            return "I code in {$this->language}.";
        }
    }

    // $human1 = new Human("Zaki", "20");
    // echo $human1->introduce();
    // echo "<br>";

    $human2 = new Programmer("Arsyad", "30", "PHP");
    echo $human2->introduce();
    echo $human2->code();

?>