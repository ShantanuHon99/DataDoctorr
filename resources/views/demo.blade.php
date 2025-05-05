<!doctype html>
<html lang="en">

<head>
    <title>Carousel 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/owl.theme.default.min.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('css/demo.css')); ?>">
    <style>.recovery-card {
    border: 1px solid #ddd;
    border-radius: 12px;
    box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.08);
    background-color: #fff;
    margin-bottom: 30px;
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    animation: fadeInUp 0.6s ease forwards;
    opacity: 0;
}

.recovery-card:hover {
    transform: translateY(-6px);
    box-shadow: 0px 12px 25px rgba(0, 0, 0, 0.15);
}

.gradient-strip-top {
    height: 10px;
    background: linear-gradient(90deg, rgba(255,255,255,0.8) 0%, #005fe3 80%);
    border-radius: 10px 10px 0 0;
}

.service-icon {
    font-size: 90px;
    color: black;
    transition: transform 0.4s ease, color 0.4s ease;
}

.recovery-card:hover .service-icon {
    transform: scale(1.1);
    color: #005fe3;
}

.service-title {
    color: #005fe3;
    font-weight: 600;
    text-decoration: none;
    transition: color 0.3s ease;
}

.service-title:hover {
    color: #002966;
}

.watch-btn {
    transition: background 0.3s ease, transform 0.3s ease;
    border-radius: 25px;
    padding: 8px 20px;
}

.watch-btn:hover {
    transform: translateY(-2px);
    background: #004dcf;
}

@keyframes fadeInUp {
    0% {
        transform: translateY(20px);
        opacity: 0;
    }
    100% {
        transform: translateY(0);
        opacity: 1;
    }
}
.gradient-heading {
    font-size: 2.8em;
    font-weight: 700;
    background: linear-gradient(to right, #0084f2, #0059ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    color: transparent;
    position: relative;
    display: inline-block;
    animation: fadeInDown 0.8s ease both;
    letter-spacing: 1px;
    line-height: 1.2;
}

.gradient-heading::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background: #0059ff;
    margin: 12px auto 0 auto;
    border-radius: 2px;
    animation: slideIn 1s ease forwards;
}

@keyframes fadeInDown {
    0% {
        opacity: 0;
        transform: translateY(-20px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes slideIn {
    0% {
        width: 0;
        opacity: 0;
    }
    100% {
        width: 60px;
        opacity: 1;
    }
}

</style>
</head>

<body>
    <div id="">
    <section class="ftco-section" style="background-image:url('{{ asset('images/tool.jpg') }}')">
    <div class="container">
        <div class="row">
        <div class="col-md-12 text-center">
            <h2 class="heading-section gradient-heading mb-5 pb-md-4">
                Recovery Services Available
            </h2>
        </div>


            <div class="col-md-12">
                <div class="featured-carousel owl-carousel">
                    {{-- START: Recovery Items --}}
                    @php
                        $services = [
                            ['icon' => 'bx bx-mobile', 'title' => 'Mobile', 'desc' => 'Recover your important deleted files from your mobile phone.'],
                            ['icon' => 'bx bx-laptop', 'title' => 'Laptop', 'desc' => 'Recover all types of files deleted from your laptop.'],
                            ['icon' => 'bx bx-hdd', 'title' => 'Hard Drive', 'desc' => 'Recovering your data from the Hard Drive is easy with Data Doctor.'],
                            ['icon' => 'bx bx-memory-card', 'title' => 'Memory Card', 'desc' => 'Recover deleted photos and videos from corrupted Memory Cards.'],
                            ['icon' => 'bx bx-usb', 'title' => 'USB Data Recovery', 'desc' => 'Pen Drives corrupted? Data Doctor can recover your data.'],
                            ['icon' => 'bx bx-photo-album', 'title' => 'Photo Recovery', 'desc' => 'Recover all your memories captured in Photos easily.'],
                            ['icon' => 'bx bxs-videos', 'title' => 'Video Recovery', 'desc' => 'Recover your deleted Videos from devices.'],
                        ];
                    @endphp

                    @foreach ($services as $service)
                    <div class="item">
                        
                        <div class="blog-entry recovery-card">
                            <div class="gradient-strip-top"></div>
                            <div class="text p-4 d-flex flex-column align-items-center">
                                <i class="{{ $service['icon'] }} service-icon"></i>
                                <h3 class="heading text-center mt-3">
                                    <a href="/video" class="service-title">{{ $service['title'] }}</a>
                                </h3>
                                <p class="text-center text-muted">{{ $service['desc'] }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0">
                                        <a href="/video" class="btn btn-primary watch-btn">Watch tutorial 
                                            <span class="ion-ios-arrow-round-forward"></span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                    @endforeach
                    {{-- END: Recovery Items --}}
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
    <script src="<?php echo e(asset('js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/demo.js')); ?>"></script>
</body> **/

</html>
<?php /**PATH C:\Users\USER\Desktop\Namaskar Patil\Projects\DataDoctorr-Final1\resources\views/demo.blade.php ENDPATH**/ ?>