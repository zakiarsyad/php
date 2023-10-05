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

class Teacher extends Human {
    private $subject;

    public function __construct($name, $age, $subject) {
        parent::__construct($name, $age);
        $this->subject = $subject;
    }

    public function teach() {
        return "I teach {$this->subject}.";
    }
}

$programmer = new Programmer("Arsyad", "30", "PHP");
$teacher = new Teacher("Sam", "40", "Mathematics");

echo $programmer->introduce();
echo "<br>";
echo $teacher->introduce();


?>
