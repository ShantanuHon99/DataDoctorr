
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <title></title>
    <!-- Link to external CSS file -->
    <link rel="stylesheet" href="{{ asset('css/video.css') }}">

    <link rel="stylesheet" href={{asset('../css/main.css')}}>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
<header>
<div class="div101">
        <img src="../images/logo.png" alt="Logo" class="logo">
        <div class="nav101" id="navbar">
            <div class="menu-toggle" id="menuToggle">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
            <ul class="navlink101" id="navLinks">
                <li><a href="/" style="font-weight: 600;">Home</a></li>
                <li><a href="/#services">Services</a></li>
                <li><a href="/#contact">Contact</a></li>
                <li><a href="/#about">About Us</a></li>
            </ul>
        </div>
    </div>



</header>




<!-- Main Content -->
<h1 style="text-align: center; margin-top: 20px;">Responsive Video Gallery</h1>

<div class="video-gallery">
    <!-- Video 1 -->
    <div class="video-item">
    <div class="video-thumbnail">
        <video width="320" height="240" controls style="width:100%; height:auto;">
            <source src="../images/Data.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <div class="video-content">
        <h3 class="video-title">Video Title 1</h3>
        <p class="video-description">This is a sample description of the video. It provides a brief overview of the content.</p>
    </div>
</div>

    <!-- Video 2 -->
    <div class="video-item">
        <div class="video-thumbnail" style="background-image: url('https://via.placeholder.com/320x180');"></div>
        <div class="video-content">
            <h3 class="video-title">Video Title 2</h3>
            <p class="video-description">Another description here, giving some insight into the content of the video in an appealing way.</p>
        </div>
    </div>
    <!-- Video 3 -->
    <div class="video-item">
        <div class="video-thumbnail" style="background-image: url('https://via.placeholder.com/320x180');"></div>
        <div class="video-content">
            <h3 class="video-title">Video Title 3</h3>
            <p class="video-description">This description gives a quick preview of the video's topic and keeps it engaging.</p>
        </div>
    </div>
    <!-- Add more videos here as needed -->
</div>

<!-- Partner Company -->
<!-- Partnered Companies Section -->
<section class="partner-companies">
    <div class="container text-center">
        <h2 class="mb-4">Our Partners</h2>
        <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/amazon.png') }}" alt="Company 1" class="img-fluid1">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/google.png') }}" alt="Company 2" class="img-fluid1">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/microsoft.png') }}" alt="Company 3" class="img-fluid1">
            </div>
            <div class="col-6 col-md-3 mb-4">
                <img src="{{ asset('images/gs.png') }}" alt="Company 4" class="img-fluid1">
            </div>
        </div>
    </div>
</section>





<!-- Footer -->
<footer class="footer text-white text-center text-lg-start" style="margin: 0; padding: 2rem 0; position: relative; background-color: #00abe3;">
    <div class="container p-4">
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12 mb-4 mb-md-0" style="background-color: white; padding: 10px; border-radius: 20px;">
                <h5 class="text-uppercase mb-4" style="color: black; font-weight: 600;">About Company</h5>
                <p style="color: black;">
    Data Doctor offers efficient data recovery software that quickly restores lost files from various storage devices. Our user-friendly tools provide reliable solutions for accidental deletions and system failures, all at an affordable price.
</p>
                <div class="mt-4">
                    <a href="https://www.instagram.com/datadoctorr?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="btn btn-floating btn-light btn-lg footer-icon" aria-label="Instagram">
                        <i class='bx bxl-instagram'></i>Instagram
                    </a>
                    <!-- <a href="#" class="btn btn-floating btn-light btn-lg footer-icon" aria-label="Facebook">
                        <i class='bx bxl-facebook'></i>
                    </a>
                    <a href="#" class="btn btn-floating btn-light btn-lg footer-icon" aria-label="Twitter">
                        <i class='bx bxl-twitter'></i>
                    </a>
                    <a href="#" class="btn btn-floating btn-light btn-lg footer-icon" aria-label="Google Plus">
                        <i class='bx bxl-google-plus'></i>
                    </a> -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Contact</h5>
                <div class="d-flex align-items-start mb-3" style="justify-content: flex-start;">
                    <i class='bx bx-map' style="font-size: 1.5rem; margin-right: 10px;"></i>
                    <span>Shop no 11, Saiplaza Complex, near Kundan Petroleum, Rahata, Maharashtra 423107</span>
                </div>

                <div class="d-flex align-items-start mb-3" style="justify-content: flex-start;">
                    <i class='bx bx-envelope' style="font-size: 1.5rem; margin-right: 10px;"></i>
                    <span>smartcomputersrahata@gmail.com</span>
                </div>

                <div class="d-flex align-items-start mb-3" style="justify-content: flex-start;">
                    <i class='bx bx-phone' style="font-size: 1.5rem; margin-right: 10px;"></i>
                    <span>+91 7769081078 (Satyam Sadaphal)</span>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase mb-4">Opening Hours</h5>
                <table class="table text-white text-center" style="margin: auto;">
                    <tbody>
                        <tr>
                            <td>Monday - Sunday:</td>
                            <td>9:00am - 7:00pm</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.6); margin-bottom: 0;">
        © 2024 Copyright: 
        <a class="text-white" href="#">DataDoctor.com</a>
    </div>
</footer>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('../js/main.js') }}"></script> 
  
</body>
</html>
