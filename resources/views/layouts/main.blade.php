<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <link rel="stylesheet" href={{asset('../css/main.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">


</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg "> 
        <div class="container">
            <!-- Logo Section -->
            <a class="navbar-brand" href="#">
                <img src="{{ asset('../images/logo.png') }}" alt="Logo" width="120" class="img-fluid"> <!-- Fluid image for responsive sizing -->
            </a>

            <!-- Toggler for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Items -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link fw-semibold fs-5 active" aria-current="page" href="#">Home</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-5" href="#">About Us</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-5" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-5" href="#">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  fs-5" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>




<!-- Main Content -->
    <div class="main-content">
        @yield('content')
    </div>

<!-- Partner Company -->
 <!-- Partnered Companies Section -->
 <section class="partner-companies ">
    <div class="container text-center">
        <h2 class="mb-4">Our Partners</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('../images/amazon.png') }}" alt="Company 1" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('../images/google.png') }}" alt="Company 2" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('../images/microsoft.png') }}" alt="Company 3" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('../images/gs.png') }}" alt="Company 4" class="img-fluid">
            </div>
        </div>
    </div>
</section>




<!-- Footer -->
<footer class="footer text-white text-center text-lg-start" style="margin: 0; padding: 2rem 0; position: relative;">
    <div class="container p-4">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">About Company</h5>
                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.</p>
                <div class="mt-4">
                    <a type="button" class="btn btn-floating btn-light btn-lg footer-icon"><i class='bx bxl-facebook'></i></a>
                    <a type="button" class="btn btn-floating btn-light btn-lg footer-icon"><i class='bx bxl-instagram'></i></a>
                    <a type="button" class="btn btn-floating btn-light btn-lg footer-icon"><i class='bx bxl-twitter'></i></a>
                    <a type="button" class="btn btn-floating btn-light btn-lg footer-icon"><i class='bx bxl-google-plus'></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4 pb-1">Contact</h5>
                
                <div class="d-flex align-items-start mb-3">
                    <span class="fa-li me-2">
                        <i class='bx bx-map' style="font-size: 1.5rem;"></i>
                    </span>
                    <span class="ms-2">Warsaw, 00-967, Poland</span>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <span class="fa-li me-2">
                        <i class='bx bx-envelope' style="font-size: 1.5rem;"></i>
                    </span>
                    <span class="ms-2">contact@example.com</span>
                </div>

                <div class="d-flex align-items-start mb-3">
                    <span class="fa-li me-2">
                        <i class='bx bx-phone' style="font-size: 1.5rem;"></i>
                    </span>
                    <span class="ms-2">+48 234 567 88</span>
                </div>
            </div>


            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Opening Hours</h5>
                <table class="table text-center text-white">
                    <tbody class="fw-normal">
                        <tr>
                            <td>Mon - Thu:</td>
                            <td>8am - 9pm</td>
                        </tr>
                        <tr>
                            <td>Fri - Sat:</td>
                            <td>8am - 1am</td>
                        </tr>
                        <tr>
                            <td>Sunday:</td>
                            <td>9am - 10pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.6); margin-bottom: 0;">
        © 2020 Copyright:
        <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
    </div>
</footer>



  
</body>
</html>
