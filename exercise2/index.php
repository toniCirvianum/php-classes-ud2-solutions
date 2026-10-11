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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>USer class</h1>
    <p>
        <?= $user1->showProfile() ?>
    </p>
        <p>
        <?= $user2->showProfile() ?>
    </p>
        <p>
        <?= $user3->showProfile() ?>
    </p>
</body>
</html>


