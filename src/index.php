<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main menu</title>
    <link href="/dist/output.css" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
</head>

<body>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
        <?php
        echo
        "<img src='https://minesa.live/assets/images/main_logo.png' class='
            w-1/4 mt-4 text-center mb-4 rounded-lg shadow-2xl border-2 border-gray-300 bg-white p-4'
        '>
        <a href='../login-master/aanmeldForm1.php' class='
        bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-1/4 mt-4 text-center''>
            Sign up
        </a>
        <a href='../login-master/inlogForm1.php' class='
        bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-1/4 mt-4 text-center''>
            Log in
        </a>
        <div class='flex flex-row justify-center items-center w-1/4 text-center p-4'>
            <img src='../images/instagram.svg' class='w-1/6 text-center border-gray-300 p-4'>
            <img src='../images/linkedin.svg' class='w-1/6 text-center border-gray-300 p-4'>
            <img src='../images/github.svg' class='w-1/6 text-center border-gray-300 p-4'>
        </div>
        <p class='text-center text-gray-500 text-xs'>
            &copy;2020 Minesea. All rights reserved.
        </p>
        ";
    ?>
    </div>
</body>

</html>