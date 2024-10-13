<head>
    <link rel="stylesheet" href={{asset('../css/home.css')}}>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

</head>
<div id="home">
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h4 class="text-primary">WELCOME TO DATA DOCTOR</h4>
                <h1 class="hero-heading">We Provide <span class="text-primary">Data Recovery</span> & <span class="text-danger">File Restoration</span></h1>
                <p class="mt-3 data-doctor-description">
                   <span class="text-primary">Data Doctor</span> is an advanced data recovery solution designed to effectively restore lost or deleted files from any Windows device. 
                    With its user-friendly interface and powerful algorithms, Data Doctor ensures that your important files are recovered quickly and efficiently.
                </p>

                <div class="stats-section">
                    <div class="stat">
                        <span class="stat-number" data-target="10000">0</span><span class="sym">+</span>
                        <p>Downloads</p>
                    </div>
                    <div class="divider">|</div>
                    <div class="stat">
                        <span class="stat-number" data-target="99.99">0</span><span class="sym">%</span>
                        <p>Recovery Rate</p>
                    </div>
                    <div class="divider">|</div>
                    <div class="stat">
                        <span class="stat-number" data-target="40">0</span><span class="sym">+</span>
                        <p>Awards Received</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 text-center">
                <img src="{{ asset('images/home_img.png') }}" class="img-fluid" alt="Data Doctor Image">
            </div>
        </div>
    </div>
</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('../js/home.js') }}"></script> 