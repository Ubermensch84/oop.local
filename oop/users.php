<?php
	class User {
        public $name;
        public $login;
        public $password;
        function __construct ($n, $l, $p) {
            $this -> name = $n;
            $this -> login = $l;
            $this -> password = $p;
        }
        function __destruct () {
            echo "<br />Пользователь " . $this -> name . " удален";
        }
        public function showInfo () {
            echo '<p>Name: ' . $this -> name;
            echo '<br>Login: ' . $this -> login;
            echo '<br>Password: ' . $this -> password;
        }
    }
$user1 = new User ('John Smith', 'john', '1234');
$user1 -> showInfo();

$user2 = new User ('Mike Dow', 'mike', '4567');
$user2 -> showInfo();

$user3 = new User ( 'Ivan Petrov', 'ivan', '8912');
$user3 -> showInfo();

?>