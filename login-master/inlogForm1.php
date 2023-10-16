<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <title>Login</title>
</head>
<body>
<div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
    <?php
        echo"
        <form action='inlogForm2.php' method='post' class='bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4'>
        <h2 class='text-center text-2xl font-bold mb-4'>Login</h2>
        <img src='https://minesa.live/assets/images/main_logo.png' alt='Avatar' style='width: 100px; display: block; margin: 0 auto;'>
        <div class='flex flex-col p-4'>
            <label for='emailvak' class='text-gray-700 font-bold mb-2'>Email</label>
            <input type='email' id='emailvak' name='emailvak' class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'>
            <label for='passwordvak' class='text-gray-700 font-bold mb-2 mt-4'>Password</label>
            <input type='password' id='passwordvak' name='passwordvak' class='shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline'>
            <input type='submit' id='submit' value='submit' class='bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4'>
        </div>
        </form>
        <br><a href='../src/index.php'>Go back to main menu</a>
        ";
    ?>
</div>
</body>
</html>