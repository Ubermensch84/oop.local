<?php
	class User {
        public $name;
        public $login;
        public $password;
        public function showInfo () {
            echo '<p>Name: ' . $this -> name;
            echo '<br>Login: ' . $this -> login;
            echo '<br>Password: ' . $this -> password;
        }
    }
$user1 = new User;
$user1 -> name = 'John Smith';
$user1 -> login = 'John';
$user1 -> password = '1234';
$user1 -> showInfo();

$user2 = new User;
$user2 -> name = 'Mike Dow';
$user2 -> login = 'mike';
$user2 -> password = '4567';
$user2 -> showInfo();

$user3 = new User;
$user3 -> name = 'Ivan Petrov';
$user3 -> login = 'ivan';
$user3 -> password = '8912';
$user3 -> showInfo();

?>