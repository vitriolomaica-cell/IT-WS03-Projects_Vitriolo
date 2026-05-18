<!-- ternary operator -->

<?php
$listings = [
    [
        'id' => 1,
        'title' => 'Software Engineer',
        'description' => 'We are seeking a skilled software engineer to develop a high quality software solution.',
        'salary' => 80000,
        'location' => 'Silicon Valley, San Francisco',
        'tags' => ['JavaScript', 'React', 'Python']
    ],
    [
        'id' => 2,
        'title' => 'Data Scientist',
        'description' => 'Join our team to analyze large datasets and derive actionable insights.',
        'salary' => 90000,
        'location' => 'New York City, NY',
        'tags' => ['Python', 'R', 'Machine Learning']
    ],
    [
        'id' => 3,
        'title' => 'DevOps Engineer',
        'description' => 'Looking for a DevOps engineer to manage our cloud infrastructure and CI/CD pipelines.',
        'salary' => 85000,
        'location' => 'Austin, TX',
        'tags' => ['AWS', 'Docker', 'Kubernetes']
    ],
    [
        'id' => 4,
        'title' => 'Information Technologist',
        'description' => 'Looking for an information technologist to manage our IT infrastructure and support systems.',
        'salary' => 75000,
        'location' => 'North Carolina, NC',
        'tags' => []
    ],
    [
        'id' => 5,
        'title' => 'Design Engineer',
        'description' => 'Looking for a design engineer to create and maintain our product designs.',
        'salary' => 60000,
        'location' => 'Chicago, IL',
        'tags' => ['Figma', 'Docker', 'C#']
    ]

];
function formatSalary($salary)
{
    return '$' . number_format($salary, 2);
}
$name = 'Maica';
$greet = function () use ($name) {
    echo 'Hello ' . $name;
};
$greet();
function filterByLocation($listing, $location)
{
    return array_filter($listing, function ($job) use ($location) {
        return strcasecmp($job['location'], $location) === 0;
    });
}
if (isset($_GET['location'])) {
    $location = $_GET['location'];
    $filtteredList = filterByLocation($listings, $location);
} else {
    $filtteredList = $listings;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:ital,wght@0,400;0,700;1,400;1,700&family=Geologica:wght,CRSV@100..900,0&family=Imperial+Script&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Geologica', 'UI-sans-serif'],
                        display: ['Inter', 'UI-sans-serif'],
                    },
                },
            }
        };
    </script>
    <title>Job Listings</title>
</head>

<body class="bg-gray-100">
    <header class="bg-purple-400 text-black p-4">
        <div class="container mx-auto">
            <h1 class="font-display text-3xl font-semibold tracking-tight">Job Listings</h1>
        </div>
    </header>

    <div class="container mx-auto p-4 mt-4">
        <!-- Output -->
        <?php foreach ($filtteredList as $index => $listing) : ?>
            <div class="md my-4">
                <div class="<?= $index % 2 === 0 ? "bg-purple-300 rounded-lg shadow-md p-4" : "bg-purple-100 rounded-lg shadow-md p-4" ?>"> <!-- ternary operator -->
                    <div class="p-4">
                        <h2 class="font-sans text-xl font-semibold"><?= $listing['title'] ?></h2>
                        <p class="text-gray-700 text-lg mt-2"><?= $listing['description'] ?></p>

                        <ul class="mt-4">
                            <li class="mb-2">
                                <strong>Salary:</strong> <?= formatSalary($listing['salary']) ?>
                            </li>
                            <li class="mb-2">
                                <strong>Location:</strong> <?= $listing['location'] ?>
                                <?= $listing['location'] === 'New York City, NY' ? //ternary operator
                                    '<span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-500 border border-green-400">Work from Home</span>' :
                                    '<span class="inline-flex items-center px-3 py-1 text-xs font-medium rounded-full bg-red-100 text-red-500 border border-red-400">On-site</span>' ?>
                            </li>
                            <?php if (!empty($listing['tags'])): ?>
                                <li class="mb-2">
                                    <strong>Tags:</strong> <?= implode(', ', $listing['tags']) ?>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>