<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <style>
        .v-center {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: auto;
            margin-bottom: auto;
            height: 100vh;
        }
    </style>
</head> 
<body>
    <div class="container" >
        <div class="v-center">
            <div class="">
                <h1 class="text-center">500</h1>
                <h2 class="text-center">Internal Server Error</h2>
                <p class="text-center">Trace: <?php echo $_COOKIE["error_msg"] ?></p>
                <p class="text-center">Please go back to <a href="../index.php">homepage</a>.</p>
            </div>
        </div>
    </div>
</body>
</html>