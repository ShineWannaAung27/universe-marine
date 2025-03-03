<?php
$title = "Contact Us";
include 'layout/header.php';
include 'layout/layout.php';
?>

<div class="container border-bottom" style="padding: 0px 70px;">
    <div class="row my-5 grid column-gap-6 border-bottom">

        <div class="col-12 col-lg-6">
            <div id="map"></div>
        </div>
        <div class="contact-info" style="font-weight: 400;font-size: 18px;color: #6E6E6E;">
            <h5 style="color: #1F2025;"><img src="assets/images/location.png" alt="" class="me-4">Address</h5>
            <p class="ms-5">No.(15/17), 2nd floor, 45th Street,<br>Bo Ta Htaung Township, Yangon, Myanmar.</p>

            <h5 style="color: #1F2025;"><img src="assets/images/phone.png" alt="" class="me-4">Phone</h5>
            <p class="ms-5">09-5140571, 09-5075165, 09-250025646,<br>09-955075165</p>

            <h5 style="color: #1F2025;"><img src="assets/images/mail.png" alt="" class="me-4">Email</h5>
            <p class="ms-5">universemarine45@gmail.com,<br>thantunaung9449@gmail.com,<br>phuephue08@gmail.com</p>
        </div>
    </div>
    <form class="" style="margin-bottom: 5rem;">
        <div class="row">
            <div class="col-12 col-lg-4 mb-4">
                <input class="form-control" type="text" id="name" placeholder="Your Name*" aria-label="default input example">
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <input class="form-control" type="text" id="name" placeholder="Phone*" aria-label="default input example">
            </div>
            <div class="col-12 col-lg-4 mb-4">
                <input class="form-control" type="text" id="name" placeholder="Email*" aria-label="default input example">
            </div>
        </div>
        <div class="row">
            <div class="col-12 mb-4">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message*" rows="5"></textarea>
            </div>
        </div>
        <div class="row ">
            <div class="d-flex justify-content-center  mb-4">
                <button type="button" id="submit-button" class="btn submit-button">Send Message <img src="assets/images/arrow-up-right.png" alt=""></button>
            </div>
        </div>
    </form>
</div>

<?php include 'layout/footer.php'; ?>