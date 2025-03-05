<section class="container  text-center mt-4">
    <div class="row py-5">
        <div class="col col-lg-3 col-12 text-center">
            <img src="assets/images/footer-icon.png" alt="">
        </div>
        <div class="col col-lg-3 col-12 text-center">
            <p style="color: #126DA6;font-size: 24px;font-weight: 600;">
                CONTACT US
            </p>
            <div class="d-flex justify-content-between align-items-center w-100 mb-4">
                <div class="d-flex align-items-start">
                    <img src="assets/images/location.png" alt="" class="pb-3">
                </div>
                <div class="ms-3 text-start" style="color:#6E6E6E;font-weight: 400; font-size: 14px;">
                    No.(15/17), 2nd floor, 45th Street, Bo Ta Htaung Township, Yangon, Myanmar
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center w-100 mb-4">
                <div class="d-flex align-items-start">
                    <img src="assets/images/phone.png" alt="" class="pb-3">
                </div>
                <div class="ms-3 text-start" style="color:#6E6E6E;font-weight: 400; font-size: 14px;">
                    09-5140571, 09-5075165,
                    09-250025646, 09-955075165
                </div>
            </div>
            <div class="d-flex justify-content-between align-items-center w-100">
                <div class="d-flex align-items-start">
                    <img src="assets/images/mail.png" alt="" class="pb-3">
                </div>
                <div class="ms-3 text-start" style="color:#6E6E6E;font-weight: 400; font-size: 14px;">
                    universemarine45@gmail.com, thantunaung9449@gmail.com, phuephue08@gmail.com
                </div>
            </div>
        </div>
        <div class="col col-lg-3 col-12 text-center">
            <p style="color: #126DA6;font-size: 24px;font-weight: 600;">
                LINKS
            </p>
            <div class="mb-2">
                <a href="index.php" class="link-offset-2 link-underline link-underline-opacity-0 pe-4" style="color: #767676;">
                    Home
                </a>
            </div>
            <div class="mb-2">
                <a href="about-us.php" class="link-offset-2 link-underline link-underline-opacity-0 " style="color: #767676;">
                    About Us
                </a>
            </div>
            <div class="mb-2">
                <a href="services.php" class="link-offset-2 link-underline link-underline-opacity-0 pe-1" style="color: #767676;">
                    Services
                </a>
            </div>
            <div class="mb-2">
                <a href="gallery.php" class="link-offset-2 link-underline link-underline-opacity-0 pe-3" style="color: #767676;">
                    Gallery
                </a>
            </div>
            <div class="mb-2">
                <a href="contact-us.php" class="link-offset-2 link-underline link-underline-opacity-0 ps-3" style="color: #767676;">
                    Contact Us
                </a>
            </div>
        </div>
        <div class="col col-lg-3 col-12 text-center">
            <div class="d-flex justify-content-center align-items-center">
                <img class="mx-3" src="assets/images/logo 02.png" alt="">
                <img class="mx-3" src="assets/images/logo 01.png" alt="">
                <img class="mx-3" src="assets/images/logo 03.png" alt="">
            </div>
            <div class=" d-flex align-items-center mt-5 justify-content-center"">
                <a href=" https://www.facebook.com/universe.mtravelstour" target="_blank">
                <img class="mx-2" src="assets/images/facebook.png" alt="">
                </a>
                <a href="" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on bottom">
                    <img class="mx-2 ms-1" src="assets/images/line.png" alt="">
                </a>
                <a href="">
                    <img class="mx-2" src="assets/images/wechat.png" alt="" class="ms-1">
                </a>
                <a href="https://join.skype.com/invite/sOqqdh5J35zs" target="_blank">
                    <img class="mx-2" src="assets/images/skype.png" alt="" class="ms-1">
                </a>
            </div>
        </div>
    </div>
</section>
</body>
<script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
<script>
    
    document.addEventListener("DOMContentLoaded", function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });

    function initMap() {
        var location = {
            lat: 16.77306193546069,
            lng: 96.16771638203106

        }; // Example: San Francisco
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 12,
            center: location
        });

        var marker = new google.maps.Marker({
            position: location,
            map: map,
            title: "Universe Marine!"
        });
    }

    
</script>

</html>