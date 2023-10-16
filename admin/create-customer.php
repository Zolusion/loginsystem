<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/index.css">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Customer</title>
</head>
<body>
    <?php
        class CreateCustomer {

            private $servername;
            private $username;
            private $password;
            private $dbname;
            private $conn;

            public function __construct($servername, $username, $password, $dbname) {
                $this->servername = $servername;
                $this->username = $username;
                $this->password = $password;
                $this->dbname = $dbname;

                $this->conn = new mysqli($servername, $username, $password, $dbname);
                if($this->conn->connect_error) {
                    die("Connection failed: " . $this->conn->connect_error);
                }
            }

            public function createCustomer() {
                echo "<form action='create-customer.php' method='POST' enctype='multipart/form-data' class='max-w-md mx-auto mt-8'>";
                echo "<div class='mb-4'>";
                echo "<label class='block text-gray-700 font-bold mb-2' for='customerName'>Name</label>";
                echo "<input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='customerName' placeholder='Name' required>";
                echo "</div>";
                echo "<div class='mb-4'>";
                echo "<label class='block text-gray-700 font-bold mb-2' for='customerEmail'>Email</label>";
                echo "<input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='customerEmail' placeholder='Email' required>";
                echo "</div>";
                echo "<div class='mb-4'>";
                echo "<label class='block text-gray-700 font-bold mb-2' for='streetName'>Streetname</label>";
                echo "<input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='streetName' placeholder='Streetname' required>";
                echo "</div>";
                echo "<div class='mb-4'>";
                echo "<label class='block text-gray-700 font-bold mb-2' for='cityName'>City</label>";
                echo "<input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='cityName' placeholder='City' required>";
                echo "</div>";
                echo "<div class='mb-4'>";
                echo "<label class='block text-gray-700 font-bold mb-2' for='postalcode'>Postal Code</label>";
                echo "<input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='postalcode' placeholder='Postal Code' required>";
                echo "</div>";
                echo "<div class='mb-4'>";
                echo "<label class='block text-gray-700 font-bold mb-2' for='password'>Password</label>";
                echo "<input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='password' name='password' placeholder='Password' required>";
                echo "</div>";
                echo "<div class='mb-4'>";
                echo "<label class='block text-gray-700 font-bold mb-2' for='role'>Role</label>";
                echo "<input class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline' type='text' name='role' placeholder='Role' required>";
                echo "</div>";
                echo "<div class='flex items-center justify-between'>";
                echo "<input class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline' type='submit' name='submit' value='Create Customer'>";
                echo "<a class='inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800' href='dashboard.php'>Back to dashboard</a>";
                echo "</div>";
                echo "</form>";

                if(isset($_POST['submit'])) {
                    $customerName = $_POST['customerName'];
                    $customerEmail = $_POST['customerEmail'];
                    $streetName = $_POST['streetName'];
                    $cityName = $_POST['cityName'];
                    $password = $_POST['password'];
                    $role = $_POST['role'];

                    $sql = "INSERT INTO customers (customerName, customerEmail, streetName, cityName, password, role) VALUES (?, ?, ?, ?, ?, ?)";

                    $stmt = $this->conn->prepare($sql);

                    if ($stmt === false) {
                        echo "Error preparing statement: " . $this->conn->error;
                        return;
                    }

                    $stmt->bind_param("ssssss", $customerName, $customerEmail, $streetName, $cityName, $password, $role);

                    if ($stmt->execute()) {
                        echo "<br>";
                        echo "Customer created successfully";
                    } else {
                        echo "Error creating customer: " . $stmt->error;
                    }

                    $stmt->close();
                }
            }

            public function __destruct() {
                $this->conn->close();
            }
        }

        $create = new createCustomer("localhost", "root", "", "fashion-shop");
        $create->createCustomer();
    ?>
</body>
</html>