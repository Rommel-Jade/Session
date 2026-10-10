<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}

$name = htmlspecialchars($_SESSION['fullname']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | MyWebsite</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand fw-bold" href="home.php">MyWebsite</a>

        <div class="ms-auto">
            <span class="text-white me-3">
                Hello, <?= $name ?>
            </span>

            <a href="logout.php" class="btn btn-light btn-sm">
                Logout
            </a>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="welcome-section">
        <h1>Welcome, <?= $name ?>!</h1>
        <p>
            You have successfully logged in to your account.
            Welcome to your home page.
        </p>
    </div>

    <div class="row g-4 mt-3">
        <div class="col-md-4">
            <div class="home-card">
                <h4>My Profile</h4>
            </div>
        </div>

        <div class="col-md-4">
            <div class="home-card">
                <h4>My Account</h4>
                <p>Welcome!</p>
            </div>
        </div>

        <div class="col-md-4">
            <div class="home-card">
                <h4>Security</h4>
                <p>Your login session keeps your account protected from
                   unauthenticated access.</p>
            </div>
        </div>
    </div>
</div>

<footer class="text-center py-4">
    <p class="mb-0">&copy; 2026 SessionLabExercise. All rights reserved.</p>
</footer>

</body>
</html>