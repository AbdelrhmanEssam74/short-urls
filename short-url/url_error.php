<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        /* Default styles */

        body {
            overflow: hidden;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class='alert alert-danger' role='alert'>An error occurred creating the Shortened URL</h1>
        <p class="text-body-secondary fs-3">The URL has not been shortened, possible errors:</p>
        <ol>
            <li>Check if the domain is correct</li>
            <li>Check if the site is online</li>
            <li> Check the address bars and punctuation</li>
            <li>The URL may be being used for spam</li>
            <li> The URL may have been blocked</li>
            <li> The URL may have been reported</li>
            <li> The URL was recently shortened</li>
            <li> The URL is not allowed</li>
            <li> You shortened many URLs in a short time</li>
        </ol>
        <a type="button" href="index.php" class="btn btn-primary">Go back and try again</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>