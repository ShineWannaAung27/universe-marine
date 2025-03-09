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
            <input type="text" class="form-control" placeholder="OIL TANKER AND CHEMICAL TANKER" aria-label="OIL TANKER AND CHEMICAL TANKER" aria-describedby="basic-addon2">
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
        <a href="assets/images/service-skill2.png" target="_blank" rel="noopener noreferrer">
            <img src="assets/images/service-skill2.png" class="service-table" alt="">
        </a>
        <!-- <table class="table table-bordered border-dark text-center">
            <tr class="text-uppercase">
                <th>No</th>
                <th>Rank</th>
                <th>Basic Wages</th>
                <th>Fix O/T</th>
                <th>GOT (103Hrs)</th>
                <th>Leave Pay</th>
                <th>Other Allowances</th>
                <th>Tanker Allowances</th>
                <th>Extra O/T Rate (USD/H)</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>1</td>
                <td>MASTER</td>
                <td>3750</td>
                <td>2200</td>
                <td></td>
                <td>1800</td>
                <td>750</td>
                <td>1500</td>
                <td></td>
                <td>10000</td>
            </tr>
            <tr>
                <td>2</td>
                <td>C/O</td>
                <td>3200</td>
                <td>1500</td>
                <td></td>
                <td>1650</td>
                <td>450</td>
                <td>1200</td>
                <td></td>
                <td>8000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2/O</td>
                <td>1750</td>
                <td>1025</td>
                <td></td>
                <td>725</td>
                <td>300</td>
                <td>750</td>
                <td></td>
                <td>4550</td>
            </tr>
            <tr>
                <td>4</td>
                <td>3/O</td>
                <td>1450</td>
                <td>950</td>
                <td></td>
                <td>675</td>
                <td>225</td>
                <td>500</td>
                <td></td>
                <td>3800</td>
            </tr>
            <tr>
                <td>5</td>
                <td>C/E</td>
                <td>3750</td>
                <td>2200</td>
                <td></td>
                <td>1800</td>
                <td>750</td>
                <td>1500</td>
                <td></td>
                <td>10000</td>
            </tr>
            <tr>
                <td>6</td>
                <td>2/E</td>
                <td>3200</td>
                <td>1500</td>
                <td></td>
                <td>1650</td>
                <td>450</td>
                <td>1200</td>
                <td></td>
                <td>8000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>3/E</td>
                <td>1750</td>
                <td>1025</td>
                <td></td>
                <td>725</td>
                <td>300</td>
                <td>750</td>
                <td></td>
                <td>4550</td>
            </tr>
            <tr>
                <td>8</td>
                <td>4/E</td>
                <td>1450</td>
                <td>950</td>
                <td></td>
                <td>675</td>
                <td>225</td>
                <td>500</td>
                <td></td>
                <td>3800</td>
            </tr>
            <tr>
                <td>9</td>
                <td>E/E</td>
                <td>1750</td>
                <td>1025</td>
                <td></td>
                <td>725</td>
                <td>300</td>
                <td>750</td>
                <td></td>
                <td>4550</td>
            </tr>
            <tr>
                <td>10</td>
                <td>ETR</td>
                <td>1075</td>
                <td>525</td>
                <td></td>
                <td>275</td>
                <td>125</td>
                <td>500</td>
                <td></td>
                <td>2500</td>
            </tr>
            <tr>
                <td>11</td>
                <td>BSN (II-5)</td>
                <td>737</td>
                <td></td>
                <td>545</td>
                <td>293</td>
                <td></td>
                <td>125</td>
                <td>54.2</td>
                <td>1700</td>
            </tr>
            <tr>
                <td>12</td>
                <td>AB (II-5)</td>
                <td>548</td>
                <td></td>
                <td>481</td>
                <td>259</td>
                <td></td>
                <td>112</td>
                <td>4.79</td>
                <td>1500</td>
            </tr>
            <tr>
                <td>13</td>
                <td>O/S (II-4)</td>
                <td>563</td>
                <td></td>
                <td>418</td>
                <td>225</td>
                <td></td>
                <td>74</td>
                <td>4.22</td>
                <td>1280</td>
            </tr>
            <tr>
                <td>14</td>
                <td>D/T (VI-1)</td>
                <td>185</td>
                <td>145</td>
                <td></td>
                <td>30</td>
                <td></td>
                <td>50</td>
                <td></td>
                <td>410</td>
            </tr>
            <tr>
                <td>15</td>
                <td>FTR (III-5)</td>
                <td>724</td>
                <td></td>
                <td>538</td>
                <td>289</td>
                <td></td>
                <td>125</td>
                <td>5.42</td>
                <td>1676</td>
            </tr>
            <tr>
                <td>16</td>
                <td>OLR (III-5)</td>
                <td>648</td>
                <td></td>
                <td>481</td>
                <td>259</td>
                <td></td>
                <td>112</td>
                <td>4.79</td>
                <td>1500</td>
            </tr>
            <tr>
                <td>17</td>
                <td>WPR (III-4)</td>
                <td>563</td>
                <td></td>
                <td>418</td>
                <td>225</td>
                <td></td>
                <td>74</td>
                <td>4.22</td>
                <td>1280</td>
            </tr>
            <tr>
                <td>18</td>
                <td>E/T (VL-1)</td>
                <td>185</td>
                <td>146</td>
                <td></td>
                <td>30</td>
                <td></td>
                <td>50</td>
                <td></td>
                <td>410</td>
            </tr>
            <tr>
                <td>19</td>
                <td>C/CK</td>
                <td>715</td>
                <td></td>
                <td>531</td>
                <td>286</td>
                <td></td>
                <td>125</td>
                <td>5.42</td>
                <td>1657</td>
            </tr>
            <tr>
                <td>20</td>
                <td>MESSMAN</td>
                <td>563</td>
                <td></td>
                <td>418</td>
                <td>225</td>
                <td></td>
                <td>74</td>
                <td>4.79</td>
                <td>1280</td>
            </tr>
        </table>
        <div class="text-start mt-4 ms-3">
            <ol>
                <li>
                    <p class="ms-3">Contract Duration : Office 8 + 1 months, Rating 10+1 months</p>
                </li>
                <li>
                    <p class="ms-3">Regular Working Hours per week 44 HRS</p>
                </li>
                <li>
                    <p class="ms-3">Maning feesperhead / permonth</p>
                </li>
            </ol>
        </div> -->
    </div>

</div>

<?php include 'layout/footer.php'; ?>