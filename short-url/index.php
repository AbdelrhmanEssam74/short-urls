<?php
require "config.php";
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

    .margin {
      margin-top: 200px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row gx-4 gx-lg-5 justify-content-center">
      <div class="col-md-10 col-lg-8 col-xl-7">
        <form class="card p-2 margin" method="post" action="shortUrl.php">
          <div class="input-group">
            <input type="text" name="url" class="form-control" placeholder="your url" />
            <div class="input-group-append">
              <button type="submit" name="submit" class="btn btn-success">Shorten</button>
            </div>
          </div>
        </form>
        <h2>Simple and fast URL shortener!</h2>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>