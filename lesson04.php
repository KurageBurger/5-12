<?php

class Person {
    protected $name;
    protected $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "私の名前は{$this->name}です。{$this->age}歳です。";
    }
}

class Teacher extends Person {
    private $subject;

    public function __construct($name, $age, $subject) {
        parent::__construct($name, $age);
        $this->subject = $subject;
    }

    public function introduce() {
        return "私は{$this->name}です。{$this->subject}を教えています。";
    }
}
