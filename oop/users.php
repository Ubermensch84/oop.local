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

        function __clone () {
            $this -> name = 'Guest';
            $this -> login = 'guest';
            $this -> password = '0000';
        }
    }

$user1 = new User ('John Smith', 'john', '1234');
$user1 -> showInfo();
$user2 = new User ('Mike Dow', 'mike', '4567');
$user2 -> showInfo();
$user3 = new User ( 'Ivan Petrov', 'ivan', '8912');
$user3 -> showInfo();
$user4 = clone $user1;
$user4 -> showInfo();


class SuperUser extends User {
    public $role;
    function __construct ($n, $l, $p, $r) {
        parent::__construct ($n, $l, $p);
        $this->role = $r;
    }
    function showInfo () {
        parent::showInfo();
        echo '<br>Role: ' . $this -> role;
    }
}

$user = new SuperUser('Vasya Pupkin', 'vasya', 'root', 'admin');
$user -> showInfo();

?>