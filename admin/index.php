<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../style/styles.css">
    <script src="https://kit.fontawesome.com/45c92c3ef1.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin dashboard</title>
</head>
<body>

<!-- nav bar -->
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg">
            <div class="logo">Galaxy Men dashboard</div>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Welcome</a>
                  </li>
            </ul>
        </nav>
    </div>

    <!-- body -->

    <div class="bg-light">
        <h2 class="text-center p-2">Manage inventory</h2>

        <div class="row">
            <div class="col-md-12 bg-secondary p-1">
                 <p class="text-light">Admin name</p>
            </div>
            <div class="button text-center">
             <button><a href="add_products.php" class="nav-link">add products</a> </button>
             <button><a href="" class="nav-link">users</a></button>
             <button><a href="" class="nav-link"> Logout</a></button>
            </div>
        </div>
    </div>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>