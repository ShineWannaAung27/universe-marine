<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Universe Marine</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon.png">
    <link rel="shortcut icon" href="../assets/images/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&family=Roboto+Slab:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_GOOGLE_MAPS_API_KEY&callback=initMap" async defer></script>
    <link
        rel="stylesheet"
        type="text/css"
        href="https://unpkg.com/@phosphor-icons/web@2.1.1/src/bold/style.css" />
    <style>
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
        }

        .custom-heading {
            font-family: 'Roboto Slab', serif;
        }

        .poppins {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <div class="sticky-top" style="background-color: white;">
        <div class="container container-padding  d-flex justify-content-between py-1">
            <div class="d-flex align-items-center">
                <a href="index.php">
                    <img class="header-image" src="assets/images/icon.png" alt="">
                </a>
                <a href="index.php">
                    <img src="assets/images/name.png" alt="" class="ms-1 header-image mobile-hide">
                </a>

            </div>
            <button class=" navbar-toggler-top" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="size-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
            <div class="d-none d-lg-flex align-items-center">
                <a href="https://www.facebook.com/universe.mtravelstour" target="_blank">
                    <img class="mx-2" src="assets/images/facebook.png" alt="">
                </a>
                <div class="header-tooltip">
                    <img class="mx-2 ms-1" src="assets/images/line.png" alt="">
                    <div class="tooltiptext shadow p-2">
                        <a href="https://web.whatsapp.com/send/?phone=9595075165" target="_blank">
                            <span>+95-9-5075165</span>
                        </a>
                        <a href="https://web.whatsapp.com/send/?phone=9595140571" target="_blank">
                            <span>+95-9-5140571</span>
                        </a>
                    </div>
                </div>

                <div class="header-tooltip">
                    <img class="mx-2" src="assets/images/wechat.png" alt="">
                    <div class="tooltiptext shadow p-2">
                        <a href="https://weixin://contacts/profile/9595075165" target="_blank">
                            <span>+95-9-5075165</span>
                        </a>
                        <a href="https://weixin://contacts/profile/9595140571" target="_blank">
                            <span>+95-9-5140571</span>
                        </a>
                    </div>
                </div>

                <a href=" https://join.skype.com/invite/sOqqdh5J35zs" target="_blank">
                    <img class="mx-2" src="assets/images/skype.png" alt="" class="ms-1">

                </a>

            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light justify-content-center p-0" role="navigation" style="background-color: #1B378C; ">
            <div class="text-center">
                <!-- Brand and toggle get grouped for better mobile display -->
                <!-- <button class=" navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse " id="navbarNavDropdown">
                    <ul class=" navbar-nav me-auto mb-2 mb-lg-0 ml-5 text-uppercase poppins">
                        <li class="nav-item mx-4"><a class="nav-link nav-custom" style="color: white !important;font-size: 1.125rem;" href="index.php"> &nbsp;&nbsp;Home</a></li>
                        <li class="nav-item mx-4"><a class="nav-link nav-custom" style="color: white !important;font-size: 1.125rem;" href="about-us.php"> &nbsp;&nbsp;About Us</a></li>
                        <li class="nav-item mx-4"><a class="nav-link nav-custom" style="color: white !important;font-size: 1.125rem;" href="services.php"> &nbsp;&nbsp;services</a></li>
                        <li class="nav-item mx-4"><a class="nav-link nav-custom" style="color: white !important;font-size: 1.125rem;" href="gallery.php"> &nbsp;&nbsp;Gallery</a></li>
                        <li class="nav-item mx-4"><a class="nav-link nav-custom" style="color: white !important;font-size: 1.125rem;" href="contact-us.php"> &nbsp;&nbsp;Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>