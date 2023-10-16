<?php

class Customer {

    protected $customerId;
    protected $customerName;
    protected $customerEmail;
    protected $password;
    protected $streetName;
    protected $cityName;
    protected $postalCode;
    protected $salt;
    protected $role;

    public function __construct($customerId="", $customerName="", $customerEmail="") {
    $this->customerId = $customerId;
    $this->customerName = $customerName;
    $this->customerEmail = $customerEmail;
    }

    public function setCustomerId($customerId) {
        $this->customerId = $customerId;
    }

    public function setCustomerName($customerName) {
        $this->customerName = $customerName;
    }

    public function setCustomerEmail($customerEmail) {
        $this->customerEmail = $customerEmail;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setStreetName($streetName) {
        $this->streetName = $streetName;
    }

    public function setCityName($cityName) {
        $this->cityName = $cityName;
    }

    public function setPostalCode($postalCode) {
        $this->postalCode = $postalCode;
    }

    public function setSalt($salt) {
        $this->salt = $salt;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function getCustomerId() {
        return $this->customerId;
    }

    public function getCustomerName() {
        return $this->customerName;
    }

    public function getCustomerEmail() {
        return $this->customerEmail;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getStreetName() {
        return $this->streetName;
    }

    public function getCityName() {
        return $this->cityName;
    }

    public function getPostalCode() {
        return $this->postalCode;
    }

    public function getSalt() {
        return $this->salt;
    }

    public function getRole() {
        return $this->role;
    }

    public function signup() {
        $this->createCustomer();
    }

    public function printCustomer() {
        echo "Customer ID: " . $this->getCustomerId() . "<br>";
        echo "Customer Name: " . $this->getCustomerName() . "<br>";
        echo "Customer Email: " . $this->getCustomerEmail() . "<br>";
        echo "Password: " . $this->getPassword() . "<br>";
        echo "Street Name: " . $this->getStreetName() . "<br>";
        echo "City Name: " . $this->getCityName() . "<br>";
    }

    public function createCustomer() {
        
        require_once '../data/connect.php';
        
        $conn = getConnection();
        $passwordHash = password_hash($this->getPassword(), PASSWORD_DEFAULT);
        if (!$conn) {
            error_log("Failed to establish database connection");
            return;
        }

        $customerId = $this->getCustomerId();
        $customerName = $this->getCustomerName();
        $customerEmail = $this->getCustomerEmail();
        $password = $this->getPassword();
        $streetName = $this->getStreetName();
        $cityName = $this->getCityName();

    
        $sql = $conn->prepare("
            INSERT INTO customers (customerId, customerName, customerEmail, password, streetName, cityName)
            VALUES (:customerId, :customerName, :customerEmail, :password, :streetName, :cityName)
        ");

        if (!$sql) {
            error_log("Failed to prepare SQL statement: " . $conn->errorInfo());
            return;
        }
    
        $sql->bindParam(':customerId', $customerId);
        $sql->bindParam(':customerName', $customerName);
        $sql->bindParam(':customerEmail', $customerEmail);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':streetName', $streetName);
        $sql->bindParam(':cityName', $cityName);
    
        $sql->execute();

        echo "Customer created successfully<br>";
    }
    
    public function readCustomer() {
            
        require_once '../data/connect.php';

        $conn = getConnection();
        if (!$conn) {
            error_log("Failed to establish database connection");
            return;
        }

        $sql = $conn->prepare("
            SELECT customerId, customerName, customerEmail, streetName, cityName, password FROM customers
        ");

        $sql->execute();

        foreach($sql as $customer)
        {
            echo $customer["customerId"]. " - ";
            echo $customer["customerName"]. " - ";
            echo $customer["customerEmail"]. " - ";
            echo $customer["password"]. " - ";
            echo $customer["streetName"]. " - ";
            echo $customer["cityName"]. " - ";

            echo "<br>";
        }
    }

    public function updateCustomer($customerId) {

        require_once '../data/connect.php';

        $conn = getConnection();
        if (!$conn) {
            error_log("Failed to establish database connection");
            return;
        }

        $customerId = $this->getCustomerId();
        $customerName = $this->getCustomerName();
        $customerEmail = $this->getCustomerEmail();
        $password = $this->getPassword();
        $streetName = $this->getStreetName();
        $cityName = $this->getCityName();

        $sql = $conn->prepare("
            UPDATE customers SET customerName = :customerName, customerEmail = :customerEmail, password = :password, streetName = :streetName, cityName = :cityName WHERE customerId = :customerId
        ");

        $sql->bindParam(':customerId', $customerId);
        $sql->bindParam(':customerName', $customerName);
        $sql->bindParam(':customerEmail', $customerEmail);
        $sql->bindParam(':password', $password);
        $sql->bindParam(':streetName', $streetName);
        $sql->bindParam(':cityName', $cityName);

        if (!$sql->execute()) {
            error_log("Failed to execute SQL statement: " . $sql->errorInfo());
            return;
        }
    }

    public function deleteCustomer($customerId) {

        require_once '../data/connect.php';

        $conn = getConnection();
        if (!$conn) {
            error_log("Failed to establish database connection");
            return;
        }

        $sql = $conn->prepare("
            DELETE FROM customers WHERE customerId = :customerId
        ");

        $sql->bindParam(':customerId', $customerId);

        $sql->execute();
    }

    public function searchCustomer($customerId) {

        require_once '../data/connect.php';

        $conn = getConnection();
        if (!$conn) {
            error_log("Failed to establish database connection");
            return;
        }

        $sql = $conn->prepare("
            SELECT * FROM customers WHERE customerId = :customerId
        ");

        $sql->bindParam(':customerId', $customerId);

        $sql->execute();

        foreach($sql as $customer)
        {
            $this->customerName = $customer["name"];
            $this->customerEmail = $customer["email"];
            $this->password = $customer["password"];
            $this->streetName = $customer["streetname"];
            $this->cityName = $customer["city"];
        }
    }
}