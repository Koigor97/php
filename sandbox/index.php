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

    // arithmetic operators
    $num1 = 10;
    $num2 = 5;

    $output = $num1 + $num2;

    // Built-in PHP functions
    // rand()
    $rand = rand(1, 100);
    $output = 'Random number: ' . $rand;

    // strlen()
    $length = strlen('Hello World');
    $output = 'String length: ' . $length;

    // substr()
    $substring = substr('Hello World', 0, 5);
    $output = 'Substring: ' . $substring;

    // strpos()
    $position = strpos('Hello World', 'o');
    $output = 'Position: ' . $position;

    // trim()
    $text = 'Hello World       ';
    $trimmed = trim($text);
    $output = 'Trimmed: ' . $trimmed;

    // round()
    $number = 3.14159265359;
    $rounded = round($number, 2);
    $output = 'Rounded: ' . $rounded;

    // date()
    $date = date('Y-m-d H:i:s');
    $output = 'Date: ' . $date;

    // include()
    // include 'header.php';
    // $output = 'Hello World';

    //circle area
    $radius = 10;
    $area = pi() * pow($radius, 2);
    $output = 'Area: ' . $area;

    // sqrt()
    $number = 9;
    $squareRoot = sqrt($number);
    $output = 'Square root: ' . $squareRoot;

    // max()
    $numbers = [1, 2, 3, 4, 5];
    $max = max($numbers);
    $output = 'Max: ' . $max;

    // min()
    $numbers = [1, 2, 3, 4, 5];
    $min = min($numbers);
    $output = 'Min: ' . $min;

    // explode()
    $text = 'Hello World';
    $parts = explode(' ', $text);
    $output = 'Parts: ' . var_dump($parts);

    // implode()
    $parts = ['Hello', 'World'];
    $text = implode(' ', $parts);
    $output = 'Text: ' . $text;

    //floor()
    $number = 3.14159265359;
    $rounded = floor($number);
    $output = 'Rounded: ' . $rounded;

    //ceil()
    $number = 3.14159265359;
    $rounded = ceil($number);
    $output = 'Rounded: ' . $rounded;

    // pi()
    $pi = pi();
    $output = 'Pi: ' . $pi;

    // pow()
    $number = 2;
    $power = 3;
    $result = pow($number, $power);
    $output = 'Result: ' . $result;

    // abs()
    $number = -10;
    $absolute = abs($number);
    $output = 'Absolute: ' . $absolute;

    // var_dump()
    $number = 10;
    $output = var_dump($number);

    // is_int()
    $number = 10;
    $output = 'Is integer: ' . var_dump(is_int($number));

    // if statement
    $number = 10;
    if ($number > 5) {
        $output = 'Number is greater than 5';
    } else {
        $output = 'Number is less than 5';
    }

    // switch statement 
    $number = 10;
    switch ($number) {
        case 5:
            $output = 'Number is 5';
            break;
        case 10:
            $output = 'Number is 10';
            break;
        default:
            $output = 'Number is not 5 or 10';
            break;
    }

    // while loop
    $number = 0;
    while ($number < 10) {
        $output = 'Number: ' . $number;
        $number++;
    }

    // for loop
    for ($i = 0; $i < 10; $i++) {
        $output = 'Number: ' . $i;
    }

    // foreach loop
    $numbers = [1, 2, 3, 4, 5];
    foreach ($numbers as $number) {
        $output = 'Number: ' . $number;
    }

    // function
    function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    $output = 'Result: ' . add(1, 2);

    // str_word_count()
    $text = 'Hello World';
    $words = str_word_count($text);
    $output = 'Words: ' . $words;

    // array_push()
    $numbers = [1, 2, 3, 4, 5];
    array_push($numbers, 6);
    $output = 'Numbers: ' . var_dump($numbers);

    // range()
    $numbers = range(1, 10);
    $output = 'Numbers: ' . var_dump($numbers);

    // str_replace()
    $text = 'Hello World';
    $replaced = str_replace('World', 'PHP', $text);
    $output = 'Replaced: ' . $replaced;

    //ucwords()
    $text = 'hello world';
    $capitalized = ucwords($text);
    $output = 'Capitalized: ' . $capitalized;

    for($i = 0; $i < 10; $i++) {
        $output = 'Number: ' . $i;
    }

    // do while loop
    $number = 0;
    do {
        $output = 'Number: ' . $number;
        $number++;
    } while ($number < 15);

    // conditional statement
    $isLoggedin = true;

    // comparison operators
    $number = 10;
    $number2 = 5;

    $compare = 'Number: ' . $number;

    // Common server variables:
    $requestMethod = $_SERVER['REQUEST_METHOD'] ?? '';
    $serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? '';
    $serverName = $_SERVER['SERVER_NAME'] ?? '';
    $serverPort = $_SERVER['SERVER_PORT'] ?? '';
    $serverSoftware = $_SERVER['SERVER_SOFTWARE'] ?? '';
    $serverAdmin = $_SERVER['SERVER_ADMIN'] ?? '';
    $documentRoot = $_SERVER['DOCUMENT_ROOT'] ?? '';
    $scriptFilename = $_SERVER['SCRIPT_FILENAME'] ?? '';
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $phpSelf = $_SERVER['PHP_SELF'] ?? '';
    $remoteAddr = $_SERVER['REMOTE_ADDR'] ?? '';
    $connection = $_SERVER['HTTP_CONNECTION'] ?? '';
    $host = $_SERVER['HTTP_HOST'] ?? '';
    $referer = $_SERVER['HTTP_REFERER'] ?? '';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    $queryString = $_SERVER['QUERY_STRING'] ?? '';
    $requestUri = $_SERVER['REQUEST_URI'] ?? '';
    
    // environment variables
    putenv('DB_HOST=localhost');
    putenv('DB_USER=root');

    $host = getenv('DB_HOST');
    $user = getenv('DB_USER'); 
    
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
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="types.php">Types</a></li>
            <li><a href="working_with_date.php">Date</a></li>
            <li><a href='functions.php'>Functions</a></li>
            <li><a href="classes.php">Classes</a></li>
        </ul>
        
        
        
    </div>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <!-- Output -->
          <?= 'Hello my name is: ' . $fullName; ?>
          <h3><?= $heading; ?></h3>
        <p><?='Implicit casting: ' . $total ?></p>
        </div>
    </div>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <!-- Output -->
          <p>Calcalulation output: </p>
          <?='Output: ' . $output; ?>
        </div>
    </div>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <!-- Output -->
          <p>Loop output: </p>
          <ul>
            <?php for($i = 0; $i < 10; $i++) { ?>
              <li><?= 'Number: ' . $i; ?></li>
            <?php } ?>
          </ul>
        </div>
    </div>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <!-- Output -->
          <p>Conditionals:  </p>
          <?php if($isLoggedin) { ?>
            <p>You are logged in</p>
            <h1 class="text-3xl">Welcome to the App</h1>
            <?php } else { ?>
            <p>You are not logged in</p>
            <?php } ?>
        </div>
    </div>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6">
          <!-- Output -->
          <p>Comparison Operators:  </p>
          <?php if($number > $number2) { ?>
            <p><?= $number ?> is greater than <?= $number2 ?></p>
            <?php } elseif($number < $number2) { ?>
            <p><?= $number ?> is less than <?= $number2 ?></p>
            <?php } else { ?>
            <p><?= $number ?> is equal to <?= $number2 ?></p>
            <?php } ?>

            // and operator
            <?php if($number > $number2 && $number > 0) { ?>
            <p><?= $number ?> is greater than <?= $number2 ?> and greater than 0</p>
            <?php } ?>

            // or operator
            <?php if($number > $number2 || $number > 0) { ?>
            <p><?= $number ?> is greater than <?= $number2 ?> or greater than 0</p>
            <?php } ?>

            // not operator
            <?php if(!$number > $number2) { ?>
            <p><?= $number ?> is not greater than <?= $number2 ?></p>
            <?php } ?>

            // ternary operator
            <p><?= $number > $number2 ? $number . ' is greater than ' . $number2 : $number . ' is less than ' . $number2 ?></p>

            // null coalescing operator
            <p><?= $compare ?? 'Number is not set' ?></p>

            // spaceship operator
            <p><?= $number <=> $number2 ?></p>

            // null coalescing assignment operator
            <?php $compare ??= 'Number is not set' ?>
            <p><?= $compare ?></p>
        </div>
    </div>
   <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">Server Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Method:</strong>
        <?= $requestMethod ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Protocol:</strong>
        <?= $serverProtocol ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Name:</strong>
        <?= $serverName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Port:</strong>
        <?= $serverPort ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Software:</strong>
        <?= $serverSoftware ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Server Admin:</strong>
        <?= $serverAdmin ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Document Root:</strong>
        <?= $documentRoot ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Filename:</strong>
        <?= $scriptFilename ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Script Name:</strong>
        <?= $scriptName ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">PHP Self:</strong>
        <?= $phpSelf ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Remote Addr:</strong>
        <?= $remoteAddr ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Connection:</strong>
        <?= $connection ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Host:</strong>
        <?= $host ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Referer:</strong>
        <?= $referer ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">User Agent:</strong>
        <?= $userAgent ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Query String:</strong>
        <?= $queryString ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">Request Uri:</strong>
        <?= $requestUri ?>
      </div>
    </div>

    <div class="container mx-auto p-8 bg-white shadow-md mt-10 rounded-lg">
    <h1 class="text-3xl font-semibold mb-4 text-center">System Information</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">DB Host:</strong>
                <?= $host ?>
      </div>
      <div class="bg-gray-200 p-4 rounded-lg">
        <strong class="block mb-2">DB User:</strong>
                <?= $user ?>
      </div>

    </div>
</body>

</html>