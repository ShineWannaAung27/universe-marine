<?php
$title = "Contact Us";
include 'layout/header.php';
include 'layout/layout.php';
?>

<div class="container border-bottom container-padding">
    <div class="row my-5 grid column-gap-6 border-bottom">

        <div class="col-12 col-lg-6">
            <!-- <div id="map"></div> -->
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3820.074484119124!2d96.16510927515114!3d16.772969484013256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2s!5e0!3m2!1sen!2sth!4v1741148610493!5m2!1sen!2sth" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="contact-info" style="font-weight: 400;font-size: 18px;color: #6E6E6E;">
            <h5 style="color: #1F2025;"><img src="assets/images/location.png" alt="" class="me-4">Address</h5>
            <p class="ms-5 text-break">No.(15/17), 2nd floor, 45th Street,<br>Bo Ta Htaung Township, Yangon, Myanmar.</p>

            <h5 style="color: #1F2025;"><img src="assets/images/phone.png" alt="" class="me-4">Phone</h5>
            <p class="ms-5 text-break">09-5140571, 09-5075165, 09-250025646,<br>09-955075165</p>

            <h5 style="color: #1F2025;"><img src="assets/images/mail.png" alt="" class="me-4">Email</h5>
            <p class="ms-5 text-break">
                universemarine45@gmail.com,thantunaung9449@gmail.com,phuephue08@gmail.com
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
                <button type="button" id="submit-button" class="btn submit-button rounded-0" style="padding: 15px 30px;letter-spacing: 3px;">Send Message <img src="assets/images/arrow-up-right.png" alt=""></button>
            </div>
        </div>
    </form>
</div>

<?php include 'layout/footer.php'; ?>