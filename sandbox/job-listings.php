<?php
$listings = [
  [
    'id' => 1,
    'title' => 'Software Engineer',
    'description' => 'We are seeking a skilled software engineer to develop high-quality software solutions.',
    'salary' => 80000,
    'location' => 'San Francisco',
    'tags' => ['Software Development', 'Java', 'Python']
  ],
  [
    'id' => 2,
    'title' => 'Marketing Specialist',
    'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
    'salary' => 60000,
    'location' => 'New York',
    'tags' => ['Digital Marketing', 'Social Media', 'SEO']
  ],
  [
    'id' => 3,
    'title' => 'Accountant',
    'description' => 'We are hiring an experienced accountant to handle financial transactions and ensure compliance.',
    'salary' => 55000,
    'location' => 'Chicago',
    'tags' => ['Accounting', 'Bookkeeping', 'Financial Reporting']
  ],
  [
    'id' => 4,
    'title' => 'UX Designer',
    'description' => 'We are seeking a talented UX designer to create intuitive and visually appealing user interfaces.',
    'salary' => 70000,
    'location' => 'Seattle',
    'tags' => ['User Experience', 'Wireframing', 'Prototyping', 'Web Development']
  ],
  [
    'id' => 5,
    'title' => 'Customer Service Representative',
    'description' => 'We are looking for a friendly customer service representative to assist customers and resolve issues.',
    'salary' => 40000,
    'location' => 'New York',
    'tags' => []
  ],
];

function formatSalary($salary)
{
  return '$' . number_format($salary, 2);
}

function highlightTags($tags, $searchTerm)
{
  $tagsArray = implode(', ', $tags);
  return str_replace($searchTerm, "<span class='bg-yellow-200'>$searchTerm</span>", $tagsArray);
}

function calculateAverageSalary($listings)
{
  $totalSalary = 0;
  $count = count($listings);

  // Calculate the total salary
  foreach ($listings as $job) {
    $totalSalary += $job['salary'];
  }

  // Calculate the average salary
  $averageSalary = ($count > 0) ? $totalSalary / $count : 0;

  return formatSalary($averageSalary);
}

// check if location query string is there
if (isset($_GET['location'])) {
  $location = $_GET['location'];
  $filteredJobs = [];

  // filter jobs by location
  foreach ($listings as $job) {
    if ($job['location'] === $location) {
      $filteredJobs[] = $job;
    }
  }

  // update the listings array
  $listings = $filteredJobs;

  // POST request
  $title = '';
  $description = '';
  $submitted = false;

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']) ?? '';
    $description = htmlspecialchars($_POST['description']) ?? '';

    // set submitted to true
    $submitted = true;

    // add new job to the listings array
    $listings[] = [
      'id' => count($listings) + 1,
      'title' => $title,
      'description' => $description,
      'salary' => 0,
      'location' => $location,
      'tags' => []
    ];
  }

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Job Listings</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Job Listings</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-green-100 rounded-lg shadow-md p-6 my-6">
      <h2 class="text-2xl font-semibold mb-4">Average Salary: <?= calculateAverageSalary($listings)  ?></h2>
    </div>
    <!-- Output -->
    <?php foreach ($listings as $index => $job) : ?>
      <div class="md my-4">
        <div class="rounded-lg shadow-md <?= $index % 2 === 0 ? 'bg-blue-100' : 'bg-white'; ?>">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
            <p class="text-gray-700 text-lg mt-2"><?= $job['description'] ?></p>
            <ul class="mt-4">
              <li class="mb-2">
                <strong>Salary:</strong> <?= formatSalary($job['salary']) ?>
              </li>
              <li class="mb-2">
                <strong>Location:</strong> <?= $job['location'] ?>

                <span class="text-xs text-white <?= $job['location'] === 'New York' ? 'bg-blue-500' : 'bg-green-500'; ?> rounded-full px-2 py-1 ml-2"><?= $job['location'] === 'New York' ? 'Local' : 'Remote'; ?></span>
              </li>
              <?php if (!empty($job['tags'])) : ?>
                <li class="mb-2">
                  <strong>Tags:</strong> <?= highlightTags($job['tags'], 'Development') ?>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="flex justify-center items-center h-screen">
    <div class="bg-white p-8 rounded shadow-md w-full max-w-md">
      <h1 class="text-2xl font-semibold mb-6">Create Job Listing</h1>
      <form method="post">
        <div class="mb-4">
          <label for="title" class="block text-gray-700 font-medium">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter job title" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none">
        </div>
        <div class="mb-6">
          <label for="description" class="block text-gray-700 font-medium">Description</label>
          <textarea id="description" name="description" placeholder="Enter job description" class="w-full px-4 py-2 border rounded focus:ring focus:ring-blue-300 focus:outline-none"></textarea>
        </div>
        <div class="flex items-center justify-between">
          <button type="submit" name="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none">
            Create Listing
          </button>
          <a href="#" class="text-blue-500 hover:underline">Back to Listings</a>
        </div>
      </form>

      <!-- Display submitted data -->
      <?php if ($submitted) : ?>
        <div class=".mt-6 p-4 border rounded bg-gray-200">
          <h2 class="text-lg font-semibold">Submitted Job Listing</h2>
          <p>
            <strong>Tiltle:</strong>
            <?= $title ?? 'N/A' ?>
          </p>
          <p>
            <strong>Description:</strong>
            <?= $description ?? 'N/A' ?>
          </p>
          <p>
            <strong>Submitted:</strong>
            <?= $submitted ? 'Yes' : 'No' ?>
          </p>

        </div>
      <?php endif; ?>
    </div>
  </div>
</body>

</html>