<?php

class User
{
    public $name;
    public $email;
    public $role;

    public function __construct($name, $email, $role)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function showProfile()
    {
        return $this->name . " - " . $this->email . " - " . $this->role;
    }
}

$user1 = new User("Anna", "anna@gmail.com", "admin");
$user2 = new User("Marc", "marc@gmail.com", "user");
$user3 = new User("Laura", "laura@gmail.com", "editor");

echo $user1->showProfile() . PHP_EOL;
echo $user2->showProfile() . PHP_EOL;
echo $user3->showProfile() . PHP_EOL;
