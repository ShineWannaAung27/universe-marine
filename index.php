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
<div class=" border-bottom  " style="margin-top: 5rem;">
    <div class="container " style="margin-top:7rem;margin-bottom: 7rem;">
        <div class="d-flex justify-content-center row ">
            <div class="col-lg-6">
                <img class="img-fluid" src="assets/images/home-img1.png" alt="">
            </div>
            <div class="col-lg-6">
                <p class="mb-3" style="color: #126DA6;font-weight: 500;font-size: 20px;"><img src="assets/images/anchor.png" alt="" class="me-3 mb-2"></i>About of Company</p>
                <p class="my-4 text-uppercase header-about custom-heading" style="">Find and Book
                    Your Dream</p>
                <p>Universe Marine Myanmar Co.,Ltd has founded in 2005.</p>
                <div style="color: #595959;font-weight: 400;font-size: 17px;line-height: 30px;">
                    <p>
                        It has been registered, verified by SEAFARERS DIVISION (D.M.A), YANGON, MYANMAR  and  CLASS BV . Also It has been recognized by S.D (DMA) & CLASS ABS as SRPS  Provider since 21st November’ 2013.
                    </p>
                </div>
                <div class="row ">
                    <div class="d-flex justify-content-start mb-4">
                        <button type="button" id="submit-button" onclick="window.location.href='about-us.php';" class="btn rounded-0 submit-button text-uppercase" style="padding: 15px 30px;letter-spacing: 3px;">Read More <img src="assets/images/arrow-up-right.png" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-service flex align-self-center">
        <div class="container ">
            <div class="d-flex justify-content-center row">
                <div class="col-lg-6 my-2">
                    <p class="mb-3" style="color: #0F9FBF;font-weight: 500;font-size: 20px;"><img src="assets/images/anchor.png" alt="" class="me-3 mb-2"></i>Service of Company</p>
                    <p class="my-4 text-uppercase custom-heading" style="color: #1B378C;font-weight: 600;font-size: 26px;width: 50%;">Know What You're Looking for? </p>
                    <div style="color: #595959;font-weight: 400;font-size: 17px;line-height: 30px;">
                        <p>
                            We provide crew management for various cruise ships starting from screening of crew personal from various sources, validity check for certificates, interview with potential candidates.
                        </p>
                    </div>
                    <button type="button" id="submit-button" class="btn rounded-0 submit-button text-uppercase"
                        style="padding: 15px 30px;letter-spacing: 3px;" onclick="window.location.href='services.php';">
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
                            <div class="text-center" style="font-size: 53px;">
                                <i class="fa-solid fa-ship"></i>
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
    <div class="container " style="margin-top:7rem;margin-bottom: 7rem;">
        <p class=" d-flex justify-content-center mb-0" style="color: #0F9FBF;font-weight: 500;font-size: 20px;"><img src="assets/images/anchor.png" alt="" class="me-3 mb-2"></i>Gallery of Company</p>
        <div class=" d-flex justify-content-center row my-md-5 ">
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
        <div class=" d-flex justify-content-center my-5">
            <button type="button" id="submit-button" class="btn rounded-0 submit-button text-uppercase"
                style="padding: 15px 30px;letter-spacing: 3px;" onclick="window.location.href='gallery.php';">
                Read More <img src="assets/images/arrow-up-right.png" alt="">
            </button>
        </div>
    </div>


</div>
<?php include 'layout/footer.php'; ?>