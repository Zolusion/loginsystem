<?php
session_start();

class Klant {
    protected $email;
    protected $password;

    public function __construct($email = NULL, $password = NULL) {
        $this->email = $email;
        $this->password = $password;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function register() {
        require "dbh.php";

        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);

        $error = array();
        $sql = $conn->prepare("INSERT INTO gegevens VALUES (:email, :password)");

        $sql->bindParam(":email", $this->email);
        $sql->bindParam(":password", $passwordHash);
        $sql->execute();
        echo "Client has been added to the database";
    }

    public function controleer() {
        require "dbh.php";

        $sql = $conn->prepare("SELECT * FROM gegevens WHERE email = :email");
        $sql->bindParam(":email", $this->email);
        $sql->execute();

        foreach($sql as $klant)
        {
            if($this->email == $klant["email"]){
                echo "<script>
                        alert('This email already exists')
                        window.location.replace('aanmeldForm1.php')
                    </script>";
            }
        }
    }

    public function login() {
        require "dbh.php";

        $sql = $conn->prepare("SELECT * FROM gegevens WHERE email = :email");
        $sql->bindParam(":email", $this->email);
        $sql->execute();

        foreach($sql as $klant)
        {
            if(password_verify($this->password, $klant["password"]))
            {echo "successfully logged in.<br>";
                $_SESSION['emailvanklant'] = $klant["email"] ;
                header("location:/project/fashion-shop-main/src/index.php");
            }
            else
            {echo "<script>
                    alert('Login failed, Check your email & password')
                    window.location.replace('inlogForm1.php')
                    </script>";}
            }
        }

        public function alleKlanten() {
            require "dbh.php";
            $sql = $conn->prepare("SELECT * FROM gegevens");
            $sql->execute();

            foreach($sql as $klant)
            {
                echo $this->email = $klant["email"] . " - ";
                echo $this->password = $klant["password"] . "<br>";
            }
        }

        public function printKlant() {
            echo "Welcome, " . $this->getEmail();
            echo "<br>";
            echo $this->getPassword();
        }
}