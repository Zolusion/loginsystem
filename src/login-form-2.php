<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form 2</title>
</head>
<body>
    <?php
            
            // Includes
            include '../data/connect.php';
            include 'customer.php';
    
            $customerEmail = $_POST['customerEmail'];
            $password = $_POST['password'];

            $customer1 = new Customer($customerEmail, $password);
            $customer1->login();

            echo "<br><br><a href='index.php'>Back to homepage</a>"
    ?>
</body>
</html>