<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">
    <script src="../../js/w3.js"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body onload="w3.includeHTML();">
    <?php
        
    ?>
    <div class="w-100">
        <nav class="navbar navbar-expand-lg py-4" style="background-color:#e4e4e4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../../assert/main.png" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    The Better Limited
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav  me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active text-black" aria-current="page" href="#">
                        Items
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-black" href="../placeorder.php.html">
                        Place Order
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-black" href="../account.php.html">
                        Accounts
                    </a>
                  </li>
                  <li class="nav-item text-black">
                    <a class="nav-link text-black" href="../order.php.html">
                        Orders
                    </a>
                  </li>
                  
                </ul>
                <span>
                    <a href="../../index.html" class="nav-link">
                        <span class="text-black fs-5 mx-3">Staff - Ken</span>
                        <span class="text-black">Logout</span>
                    </a>
                </span>
              </div>
            </div>
        </nav>
    </div>
    <div
        class="d-flex text-center justify-content-center align-content-center flex-column"
        style="height:70vh"
    >
        <div>
            <h1 class="text-center">Created Items !</h1>
        </div>
        <div class="mx-auto mt-5 border rounded p-3 border-3" style="width:40%">
        <div class="form-group mb-3">
            <label for="id" class="mb-2">Item ID</label>
            <input type="text"  disable readonly class="form-control"  value="ID">
        </div>
        <div class="form-group mb-3">
            <label for="itemname" class="mb-2">Item Name</label>
            <input type="text"  disable readonly class="form-control"  value="The greatest items">
        </div>
        <div class="form-group mb-3">
            <label for="itemprice" class="mb-2">Item Description</label>
            <input type="text"  disable readonly class="form-control"  value="Description of this items">
        </div>
        <div class="form-group mb-3">
            <label for="qty" class="mb-2">Stock Quantity</label>
            <input type="number" disable readonly class="form-control" value="123">
        </div>
        <div class="form-group">
            <label for="price" class="mb-2 block">Stock Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="number"  disable readonly class="form-control" value="100">
            </div>
        </div>

            <a href="./items.php">
                <button class="btn btn-primary">
                    <span class="text-white">Back</span>
                </button>
            </a>
        </div>
    </div>

    <div w3-include-html="../footer.html"></div>
</body>
</html>