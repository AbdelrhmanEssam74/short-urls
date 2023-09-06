<?php
require 'config.php';

$result = 0;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['submit'])) :
        if (empty($_POST['url'])) :
            header("Location:url_error.php");
        else :
            $url = $_POST['url'];
            $insert = $conn->prepare("INSERT INTO urls (longURL) VALUES (:long)");
            $result =  $insert->execute([
                ":long" => $url
            ]);
        endif;
    endif;
} else {
    header('location:url_error.php');
}
?>
<?php
if ($result) :
    $id = $conn->lastInsertId();
endif;
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

        .container {
            margin-top: 200px;
        }

        .url-box {
            border: 1px solid;
            padding: 8px;
            width: 63%;
            margin-right: 19px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <h2>Short URL</h2>
                <div class="input-group">
                    <div class="url-box" id="myLink">
                        <a name="url" id="inputToCopy" target="_blank" href="http://localhost/short-url/u/index.php?urlID=<?php echo $id ?>">http://localhost/short-url/<?php echo $id ?></a>
                    </div>
                    <div class="input-group-append">
                        <a href="index.php" class="btn btn-success">Short another URL</a>
                    </div>
                </div>
                <p>Long URL:</p>
                <a href="<?php echo $url ?>" target="_blank"><?php echo $url ?></a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        function copyText() {
            /* Get the input element by its ID */
            var inputElement = document.getElementById("inputToCopy");

            /* Select the text in the input field */
            inputElement.select();
            inputElement.setSelectionRange(0, 99999); /* For mobile devices */

            /* Execute the copy command */
            document.execCommand("copy");

            /* Optionally, provide some visual feedback to the user */
            alert("ULR copied to clipboard!");
        }
    </script>
</body>

</html>