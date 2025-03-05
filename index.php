<?php include 'layout/header.php'; ?>

<div id="carouselExampleFade" class="carousel slide carousel-fade mb-5" data-bs-ride="carousel">
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
<div class=" border-bottom  index-margin" style="margin-top: 5rem;">
    <div class="home-margin  row my-5 grid column-gap-6">
        <div class="col-12 col-lg-6">
            <img class="img-fluid" src="assets/images/home-img1.png" alt="">
        </div>
        <div class="col-12 col-lg-6">
            <p class="mb-0" style="color: #0F9FBF;font-weight: 500;font-size: 20px;"><i class="fa-solid fa-anchor me-3 mb-3"></i>About of Company</p>
            <p class="mb-3 text-uppercase header-about custom-heading" style="">Find and Book
                Your Dream</p>
            <p>Universe Marine Myanmar Co.,Ltd has founded in 2005.</p>
            <div style="color: #595959;font-weight: 400;font-size: 17px;line-height: 30px;">
                <p>
                    It has been registered, verified by SEAFARERS DIVISION (D.M.A), YANGON, MYANMAR  and  CLASS BV . Also It has been recognized by S.D (DMA) & CLASS ABS as SRPS  Provider since 21st November’ 2013.
                </p>
            </div>
            <div class="row ">
                <div class="d-flex justify-content-start mb-4">
                    <button type="button" id="submit-button" onclick="window.location.href='about-us.php';" class="btn rounded-0 submit-button" style="padding: 15px 30px;">Read More <img src="assets/images/arrow-up-right.png" alt=""></button>
                </div>
            </div>
        </div>

    </div>
    <div class="row grid column-gap-6 index-margin home-service">
        <div class="col-md-6">
            <p class="mb-0" style="color: #0F9FBF;font-weight: 500;font-size: 20px;"><i class="fa-solid fa-anchor me-3 mb-3"></i>Service of Company</p>
            <p class="mb-3 text-uppercase custom-heading" style="color: #1B378C;font-weight: 600;font-size: 26px;width: 50%;">Know What You're Looking for? </p>
            <div style="color: #595959;font-weight: 400;font-size: 17px;line-height: 30px;">
                <p>
                    We provide crew management for various cruise ships starting from screening of crew personal from various sources, validity check for certificates, interview with potential candidates.
                </p>
            </div>
            <div class="row ">
                <div class="d-flex justify-content-start mb-4">
                    <button type="button" id="submit-button" class="btn rounded-0 submit-button"
                        style="padding: 15px 30px;" onclick="window.location.href='services.php';">
                        Read More <img src="assets/images/arrow-up-right.png" alt="">
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <a href="services-certificate.php" class="text-decoration-none">
                <div class="card home-service-card" style="width: auto;background-color: #D9D9D9;">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="#000000" viewBox="0 0 256 256">
                            <path d="M128,136a8,8,0,0,1-8,8H72a8,8,0,0,1,0-16h48A8,8,0,0,1,128,136Zm-8-40H72a8,8,0,0,0,0,16h48a8,8,0,0,0,0-16Zm112,65.47V224A8,8,0,0,1,220,231l-24-13.74L172,231A8,8,0,0,1,160,224V200H40a16,16,0,0,1-16-16V56A16,16,0,0,1,40,40H216a16,16,0,0,1,16,16V86.53a51.88,51.88,0,0,1,0,74.94ZM160,184V161.47A52,52,0,0,1,216,76V56H40V184Zm56-12a51.88,51.88,0,0,1-40,0v38.22l16-9.16a8,8,0,0,1,7.94,0l16,9.16Zm16-48a36,36,0,1,0-36,36A36,36,0,0,0,232,124Z"></path>
                        </svg>
                    </div>
                    <div class="card-body pt-1">
                        <div class="text-center px-5">
                            CERTIFICATION OF
                            MLC 2006
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3">
            <a href="services-deck.php" class="text-decoration-none">
                <div class="card home-service-card" style="width: auto;background-color: #F2F2F2;">
                    <div class="text-center" style="font-size: 53px;">
                        <i class="fa-solid fa-ship"></i>
                    </div>
                    <div class="card-body pt-1">
                        <div class="text-center px-5">
                            SYLLABUS FOR DECK DEPARTMENT
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="home-margin container-padding d-flex justify-content-center index-margin">
        <p class="mb-0" style="color: #0F9FBF;font-weight: 500;font-size: 20px;"><i class="fa-solid fa-anchor me-3 mb-3"></i>Gallery of Company</p>
    </div>
    <div class="home-margin container-padding row my-md-5 grid column-gap-6">
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
    <div class="d-flex justify-content-center mb-4">
        <button type="button" id="submit-button" class="btn rounded-0 submit-button" style="padding: 15px 30px;">Read More <img src="assets/images/arrow-up-right.png" alt=""></button>
    </div>
</div>
<?php include 'layout/footer.php'; ?>