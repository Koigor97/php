<?php
    $title = 'Learn PHP From Scratch';
    $heading = 'Welcome To The Course';
    $body = 'In this course, you will learn the fundamentals of the PHP language';

    // apply some string functions
    $person = new stdClass();
    $person->firstName = 'John';
    $person->lastName = 'Doe';

    $fullName = $person->firstName . ' ' . $person->lastName;

    // type casting
    $price = 9.99;
    $price = (int) $price; // convert to integer explicit casting

    // implicit casting
    $price = '9.99';
    $price2 = 10;
    $total = $price + $price2; // convert to float implicitly
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title; ?></title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold"><?= $title ?></h1>
        </div>
        
    </header>
    <div>
        <a href="index.php">Home</a>
        <a href="types.php">Types</a>
    </div>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <!-- Output -->
          <?= 'Hello my name is: ' . $fullName; ?>
          <h3><?= $heading; ?></h3>
        <p><?='Implicit casting: ' . $total ?></p>
        </div>
    </div>
</body>

</html>