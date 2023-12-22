<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;700&family=Raleway:wght@100;200;400;500&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
    <title>The Kitchen Restaurant</title>
    <style>
        body {
            font-family: "Raleway", sans-serif;
        }

        .float {
            position: fixed;
            width: 50px;
            height: 50px;
            bottom: 40px;
            right: 20px;
            background-color: black;
            color: #fff;
            border-radius: 50px;
            text-align: center;
        }

        *::-webkit-scrollbar {
            display: none;
        }

        .accordion-button:focus {
            box-shadow: none;
        }

        .accordion {
            --bs-accordion-btn-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            --bs-accordion-btn-active-icon: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='white'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
        }
    </style>
</head>

<body class="container-fluid p-0 position-relative">

    <!-- NavBar -->
    <header class="container-fluid p-0 position-relative">
        <nav class="navbar bg-dark text-white text-center d-flex justify-content-center">
            <h3 class="navbar-brand text-white fs-3 fw-bold">
                <img src="assets/img/logo2.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top me-2" />
                The Kitchen Restaurant
            </h3>
        </nav>
    </header>


    <!-- Body Content -->
    <main class="container-fluid position-relative p-0 bg-light w-100">

        <!-- Slider -->
        <div id="slider" class="carousel slide position-relative" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Slider Item -->
                <div class="carousel-item active" data-bs-interval="4000">
                    <img src="assets/img/slider-pasta.jpg" class="d-block w-100 h-75" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <p class="fs-1 fw-bolder text-body-emphasis">
                            Welcome to 'THE KITCHEN'
                        </p>
                        <p class="fs-2 fst-italic fst-italic text-body-emphasis">
                            #Tasty #Delicious #Savoury
                        </p>
                    </div>
                </div>
                <!-- Slider Item -->
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="assets/img/slider-dessert.jpg" class="d-block w-100 h-75" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <p class="fs-1 fw-bolder text-body-emphasis">
                            Delicious Desserts
                        </p>
                        <p class="fs-2 fst-italic fst-italic text-body-emphasis">
                            Order it online now!
                        </p>
                    </div>
                </div>
                <!-- Slider Item -->
                <div class="carousel-item" data-bs-interval="4000">
                    <img src="assets/img/slider-burger.jpg" class="d-block w-100 h-75" alt="..." />
                    <div class="carousel-caption d-none d-md-block">
                        <p class="fs-1 fw-bolder text-body-emphasis">Free Burger</p>
                        <p class="fs-2 fst-italic fst-italic text-body-emphasis">
                            Get free burger from order higher than $30!
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Us -->
        <div class="position-relative container text-center p-0 mt-2 mb-2 bg-light w-100 d-md-block d-none">

            <div class="row d-flex justify-content-evenly">
                <div style="height: fit-content" class="col-8 col-lg-3 mt-2 me-lg-0 ms-lg-0 border rounded-3 border-3 border-dark">
                    <div class="card mb-1 mt-1 border-0 bg-light">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" src="https://img.icons8.com/ios/50/shopping-cart--v1.png" alt="shopping-cart--v1" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Pick your meal</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="height: fit-content" class="col-8 col-lg-3 mt-2 me-lg-0 ms-lg-0 border rounded-3 border-3 border-dark">
                    <div class="card mb-1 mt-1 border-0 bg-light">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" src="https://img.icons8.com/ios/50/wallet--v1.png" alt="wallet--v1" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Make payment</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="height: fit-content" class="col-8 col-lg-3 mt-2 me-lg-0 ms-lg-0 border rounded-3 border-3 border-dark">
                    <div class="card mb-1 mt-1 border-0 bg-light">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img class="img-fluid rounded-start" src="https://img.icons8.com/external-wanicon-lineal-wanicon/64/external-food-package-food-delivery-wanicon-lineal-wanicon.png" alt="external-food-package-food-delivery-wanicon-lineal-wanicon" />
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Receive food!</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Product List -->
        <div class="position-relative container p-0 mt-2 mb-2 bg-light w-100">
            <ul class="list-group accordion bg-light" id="productsAccordion">
                <!-- Burger Section -->
                <li class="list-group-item accordion-item border-0 bg-light">
                    <div class="card bg-transparent">
                        <div class="card-header bg-dark" style="
                  background-image: url('assets/img/menu-sample-burgers.jpg');
                  height: 10rem;
                  background-repeat: no-repeat;
                  background-size: cover;
                ">
                            <button class="accordion-button collapsed text-white fs-1 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#burgerDropDown" aria-expanded="true" aria-controls="burgerDropDown" style="height: 100%; text-shadow: 2px 2px 2px black;">
                                Burger
                            </button>
                        </div>
                        <div>
                            <div id="burgerDropDown" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div id="burgerCardsContainer" class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                            <!-- A product Cards load Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>

                <!-- Pizza Section -->
                <li class="list-group-item accordion-item border-0 bg-light">
                    <div class="card bg-transparent">
                        <div class="card-header bg-dark" style="
                  background-image: url('assets/img/menu-sample-pizza.jpg');
                  height: 10rem;
                  background-repeat: no-repeat;
                  background-size: cover;
                ">
                            <button class="accordion-button collapsed text-white fs-1 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#pizzaDropDown" aria-expanded="true" aria-controls="pizzaDropDown" style="height: 100%; text-shadow: 2px 2px 2px black;">
                                Pizza
                            </button>
                        </div>
                        <div>
                            <div id="pizzaDropDown" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div id="pizzaCardsContainer" class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                            <!-- product Cards load Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>

                <!-- Pasta Section -->
                <li class="list-group-item accordion-item border-0 bg-light">
                    <div class="card bg-transparent">
                        <div class="card-header bg-dark" style="
                  background-image: url('assets/img/menu-sample-pasta.jpg');
                  height: 10rem;
                  background-repeat: no-repeat;
                  background-size: cover;
                ">
                            <button class="accordion-button collapsed text-white fs-1 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#pastaDropDown" aria-expanded="true" aria-controls="pastaDropDown" style="height: 100%; text-shadow: 2px 2px 2px black;">
                                Pasta
                            </button>
                        </div>
                        <div>
                            <div id="pastaDropDown" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div id="pastaCardsContainer" class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                            <!-- product Cards load Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>

                <!-- Sushi Section -->
                <li class="list-group-item accordion-item border-0 bg-light">
                    <div class="card bg-transparent">
                        <div class="card-header bg-dark" style="
                  background-image: url('assets/img/menu-sample-sushi.jpg');
                  height: 10rem;
                  background-repeat: no-repeat;
                  background-size: cover;
                ">
                            <button class="accordion-button collapsed text-white fs-1 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#sushiDropDown" aria-expanded="true" aria-controls="sushiDropDown" style="height: 100%; text-shadow: 2px 2px 2px black;">
                                Sushi
                            </button>
                        </div>
                        <div>
                            <div id="sushiDropDown" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div id="sushiCardsContainer" class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                            <!-- product Cards load Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>

                <!-- Drinks Section -->
                <li class="list-group-item accordion-item border-0 bg-light">
                    <div class="card bg-transparent">
                        <div class="card-header bg-dark" style="
                  background-image: url('assets/img/menu-sample-drinks.jpg');
                  height: 10rem;
                  background-repeat: no-repeat;
                  background-size: cover;
                ">
                            <button class="accordion-button collapsed text-white fs-1 bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#drinksDropDown" aria-expanded="true" aria-controls="drinksDropDown" style="height: 100%; text-shadow: 2px 2px 2px black;">
                                Drinks
                            </button>
                        </div>
                        <div>
                            <div id="drinksDropDown" class="accordion-collapse collapse" data-bs-parent="#productsAccordion">
                                <div class="accordion-body">
                                    <div class="container">
                                        <div id="drinksCardsContainer" class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                                            <!-- product Cards load Here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </li>
            </ul>
        </div>
    </main>


    <!-- footer -->
    <footer class="container-fluid p-0 bg-dark text-white position-relative">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="d-flex justify-content-center">
                        <img src="assets/img/logo2.png" class="d-block w-50 mt-2" alt="..." />
                    </div>
                </div>
                <div class="col-12 col-lg-8">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="container pt-4 pb-3 ms-5 me-5">
                            <h4 class="mb-0">The Kitchen Restaurant</h4>
                            <span class="">Street 22, Colombo</span>
                            <hr />
                            <div class="row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <h6 class="mb-1">Phone:</h6>
                                    +94 112 154234
                                </div>
                                <div class="col-sm-6">
                                    <h6 class="mb-1">E-mail:</h6>
                                    <a class="link-light text-decoration-none" href="#" target="_blank">hello@example.com</a>
                                </div>
                            </div>
                            <hr />
                            <h6 class="mb-2">Follow Us!</h6>
                            <a class="text-decoration-none p-1 text-light" href="#">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a class="text-decoration-none p-1 text-light" href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                            <a class="text-decoration-none p-1 text-light" href="#">
                                <i class="bi bi-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr />
                <p>Copyright The Kitchen 2023©.</p>
            </div>
        </div>
    </footer>

    <!-- floating button for open cart -->
    <button class="float" data-bs-toggle="offcanvas" href="#cartOffcanvas" aria-controls="cartOffcanvas">
        <i class="bi bi-cart mt-5"></i>
    </button>

    <!-- Offcanvas for cart -->
    <div class="offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="cartOffcanvas" aria-labelledby="cartOffcanvasLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="cartOffcanvasLabel">Your Cart</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div class="card h-100">
                <div class="card-body overflow-y-scroll h-100">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A list item
                            <span class="badge"><button type="button" class="btn-close"></button></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            A list item
                            <span class="badge"><button type="button" class="btn-close"></button></span>
                        </li>
                    </ul>
                </div>

                <div class="card-body">
                    <button id="checkOut" type="button" class="btn btn-dark w-100">
                        GO TO CHECKOUT
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/jquery/jquery-3.7.1.min.js"></script>
    <script src="js/index.js"></script>

</body>

</html>