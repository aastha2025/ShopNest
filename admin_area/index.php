<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!----  Bootstrap Css link  ---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
    <!----  Font Awesome link  ---->
   <link rel="stylesheet" href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
    <!---- css file ---->
    <link rel="stylesheet" href="../style.css">
</head>
<body>
   <!--- navbar --->
     <div class="container-fluid p-0">
        <!--- first child --->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../img/logo.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg ">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="" class="nav-link">Welcome Guest</a>
                    </li>
                </ul>
            </nav>
        </div>
      </nav>
    <!--- second child --->
    <div class="bg-light">
        <h3 class="text-center p-2">Manage Details</h3>
    </div>
    <div class="row">
        <div class="col-md-12 bg-secondary p-1 d-flex align-items-center">
              <div class="px-3ss">
                <a href="#"><img src="../img/pineapple-juice.jpg" alt="" class="admin_image"></a>
                <p class="text-light text-center">Admin Name</p>
</div>
         <!--- button*10>a.nav-link.text-light.bg-info.my-1 --->
        <div class="button text-center">
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>Insert Products</button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>View Products</button>
            <button class="my-3"><a href="insert_categories.php" class="nav-link text-light bg-info my-1"></a>Insert Categories</button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>View Categories</button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>Insert Brands</button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>View Brands</button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>All orders</button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>All payments</button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>List users</button>
            <button class="my-3"><a href="" class="nav-link text-light bg-info my-1"></a>Logout</button>
        </div>
  </div>
 </div>
     <!--- last child --->
     <?php include "../footer.php" ?>

</div>




    <!--- bootstrap js link --->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>