<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="nevigation.css">

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <title>Your Page Title</title>

        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #AA14F0;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input,
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #AA14F0;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>

<body>

   <header id="header" class="header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
            <img src="logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Order Details Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="orderDropdown" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Order Details
                    </a>
                    <div class="dropdown-menu" aria-labelledby="orderDropdown">
                        <!-- Add dropdown items as needed -->
                        <a class="dropdown-item" href="#">Order Item List</a>
                        <a class="dropdown-item" href="#">Order Delivery details </a>
                        <a class="dropdown-item" href="#">Daily order Report </a>
                    </div>
                </li>

                <!-- Product Details Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="productDropdown" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Product Details
                    </a>
                    <div class="dropdown-menu" aria-labelledby="productDropdown">
                        
                        <a class="dropdown-item" href="#">Product availability</a>
                        <a class="dropdown-item" href="#">Product availability report</a>
                        
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="inventoryManagement.html" id="inventoryDropdown" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Inventory Management
                    </a>
                    <div class="dropdown-menu" aria-labelledby="inventoryDropdown">
                        
                        <a class="dropdown-item" href="inventoryManagement.html">Add items </a>
                        <a class="dropdown-item" href="inventory_search.php">manage inventory</a>
                    </div>
                </li>

      
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="incomeDropdown" role="button" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Income Details
                    </a>
                    <div class="dropdown-menu" aria-labelledby="incomeDropdown">
                       
                        <a class="dropdown-item" href="sales.html">sales</a>
                        <a class="dropdown-item" href="incomeReport">Income report</a>
                    </div>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fas fa-sign-out-alt"></i> Logout</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<br><br><br>
<hr>


  <div class="container" style="width: 100%;">
        <!-- Main Content Area -->
        <iframe id="mainContent" style="width: 100%; height: 100vh; border: none;" src="inmanage.php"></iframe>
    </div>

 <footer>
        <div class="container footer-content">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; 2023 Bauhinia clothing. All rights reserved.</p>
                    <p>111 Main Street, Colombo, Srilanka</p>
                </div>
                <div class="col-md-6 social-icons">
                    <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fab fa-linkedin"></i></a>
                    
                </div>
            </div>
        </div>
  </footer>



    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/flex-slider.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                      
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>

</html>

