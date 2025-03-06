<?php
$title = "Services";
$subtitle = "Pay Skills For Various Vessel";

include 'layout/header.php';
include 'layout/layout.php';
?>

<div class="container border-bottom container-padding">
    <div class="my-5 text-center pb-1 custom-heading " style="position: relative;">
        <p style="font-size: 26px;color: #0F9FBF;margin-bottom: 0px;font-weight: 400;" class="underline-service d-flex justify-content-center align-items-center text-uppercase">
            WAGES AND ALLOWANCES OFFICERS & CREWS
        </p>
        <p style="font-size: 26px;color: #0F9FBF;margin-bottom: 0px;font-weight: 400;" class="underline-service d-flex justify-content-center align-items-center text-uppercase">
            (ALL WAGES ARE IN US DOLLARS)
        </p>
    </div>
    <div class="my-5 d-flex  justify-content-center">
        <div class="" style="width: 32%;">
            <input type="text" class="form-control" placeholder="RO-RO PASSENGER AND GENERAL CARGO)" aria-label="RO-RO PASSENGER AND GENERAL CARGO)" aria-describedby="basic-addon2">
        </div>
        <div class="dropdown">
            <button type="button" id="btn-click" style="background-color: #126DA6;color: #D9D9D9;" class="btn" data-bs-toggle="dropdown">
                <i class="fa-solid fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu dropdown-menu-end" style="min-width: 35%;">
                <li><a class="dropdown-item" href="services-skill-2.php">OIL TANKER AND CHEMICAL TANKER</a></li>
                <li><a class="dropdown-item" href="services-skill-3.php">LPG CARRIER TANKER</a></li>
                <li><a class="dropdown-item" href="services-skill-4.php">LPG CARRIER TANKER</a></li>
            </ul>
        </div>
    </div>

    <div class="mb-5 overflow-auto text-center">
        <a href="assets/images/service-skill3.png" target="_blank" rel="noopener noreferrer">
            <img src="assets/images/service-skill3.png" class="service-table" alt="">
        </a>
    </div>

</div>

<?php include 'layout/footer.php'; ?>