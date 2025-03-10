<?php include 'layout/header.php'; ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade " data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
            <span class="indicator-number">1</span>
        </button>
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="1" aria-label="Slide 2">
            <span class="indicator-number">2</span>
        </button>
        <button type="button" data-bs-target="#carouselExampleFade" data-bs-slide-to="2" aria-label="Slide 3">
            <span class="indicator-number">3</span>
        </button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="assets/images/home1.png" class="d-block w-100 zoom-fade" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/images/home2.png" class="d-block w-100 zoom-fade" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
            <img src="assets/images/home3.png" class="d-block w-100 zoom-fade" alt="...">
        </div>
    </div>

</div>
<div class="  " style="margin-top: 5rem;">
    <div class="container index-container">
        <div class="d-flex justify-content-center row ">
            <div class="col-lg-6 my-5">
                <img class="img-fluid" src="assets/images/home-img1.png" alt="">
            </div>
            <div class="col-lg-6 my-5">
                <p class="mb-3 text-uppercase poppins index-main-headers"><img src="assets/images/anchor.png" alt="" class="me-3 mb-2"></i>About of Company</p>
                <p class="my-4 text-uppercase header-about custom-heading">Find and Book<br>
                    Your Dream</p>
                <p style="font-weight: 500;font-size: 1.25rem;color:#404040;">Universe Marine Myanmar Co.,Ltd has founded in 2005.</p>
                <div class="" style="font-weight: 400;line-height: 30px;">
                    <p>
                        It has been registered, verified by SEAFARERS DIVISION (D.M.A), YANGON, MYANMAR  and  CLASS BV . Also It has been recognized by S.D (DMA) & CLASS ABS as SRPS  Provider since 21st November’ 2013.
                    </p>
                </div>
                <div class="row ">
                    <div class="d-flex justify-content-start mb-4 poppins">
                        <button type="button" id="submit-button" onclick="window.location.href='about-us.php';" class="btn rounded-0 submit-button text-uppercase" style="padding:  6px 12px;letter-spacing: 3px;">Read More <img src="assets/images/arrow-up-right.png" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-service flex align-self-center">
        <div class="container ">
            <div class="d-flex justify-content-center row">
                <div class="col-lg-6 my-2">
                    <p class="mb-3 text-uppercase index-main-headers"><img src="assets/images/anchor.png" alt="" class="me-3 mb-2"></i>Service of Company</p>
                    <p class="my-4 text-uppercase header-about custom-heading" style="">
                        Know What You're
                        <br>
                        Looking for?
                    </p>
                    <div style="font-weight: 400;line-height: 30px;">
                        <p>
                            We provide crew management for various cruise ships starting from screening of crew personal from various sources, validity check for certificates, interview with potential candidates.
                        </p>
                    </div>
                    <button type="button" id="submit-button" class="btn rounded-0 submit-button text-uppercase poppins"
                        style="padding:  6px 12px;letter-spacing: 3px;" onclick="window.location.href='services.php';">
                        Read More <img src="assets/images/arrow-up-right.png" alt="">
                    </button>
                </div>
                <div class="col-lg-3 my-2">
                    <a href="services-certificate.php" class="text-decoration-none">
                        <div class="card home-service-card border border-0" style="width: auto;background-color: #D9D9D9;">
                            <div class="text-center">

                                <img src="assets/images/services1.png" alt="">
                            </div>
                            <div class="card-body pt-1">
                                <div class="text-center px-3 text-uppercase custom-heading">
                                    CERTIFICATION OF
                                    MLC 2006
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 my-2">
                    <a href="services-deck.php" class="text-decoration-none">
                        <div class="card home-service-card border border-0" style="width: auto;background-color: #F2F2F2;">
                            <div class="text-center">
                                <img src="assets/images/services2.png" alt="">
                            </div>
                            <div class="card-body pt-1">
                                <div class="text-center px-5 text-uppercase custom-heading">
                                    SYLLABUS FOR DECK DEPARTMENT
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container index-container border-bottom">
        <p class="text-uppercase d-flex justify-content-center mb-0 index-main-headers"><img src="assets/images/anchor.png" alt="" class="me-3 mb-2"></i>Gallery of Company</p>
        <div class=" d-flex justify-content-center row my-md-3 ">
            <div class="col-md-4">
                <img
                    src="assets/images/gallery1.png"
                    class="w-100 shadow-1-strong  mb-4"
                    alt="Boat on Calm Water" />
            </div>
            <div class="col-md-4">
                <img
                    src="assets/images/gallery6.png"
                    class="w-100 shadow-1-strong  mb-4"
                    alt="Boat on Calm Water" />
            </div>
            <div class="col-md-4">
                <img
                    src="assets/images/gallery7.png"
                    class="w-100 shadow-1-strong  mb-4"
                    alt="Boat on Calm Water" />
            </div>
        </div>
        <div class=" d-flex justify-content-center mt-3 mb-5 poppins">
            <button type="button" id="submit-button" class="btn rounded-0 submit-button text-uppercase"
                style="padding:  6px 12px;letter-spacing: 3px;" onclick="window.location.href='gallery.php';">
                Read More <img src="assets/images/arrow-up-right.png" alt="">
            </button>
        </div>
    </div>


</div>
<?php include 'layout/footer.php'; ?>