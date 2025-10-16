<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $jobTitle = $_POST['jobTitle'];
    $company = $_POST['company'];
    $location = $_POST['location'];
    $jobType = $_POST['jobType'];
    $techStack = $_POST['techStack'];
    $description = $_POST['description'];
    $password = $_POST['password'];

    // Validate admin password
    if ($password !== "J@n258") {
        die("Invalid password.");
    }

    // For example purposes, you'd typically save the data to a database
    // Here, you can implement your logic for adding the job to your job board

    echo "Job submitted successfully!";
} else {
    echo "Invalid request method.";
}
?>
