<?php
$title = "Services";
include 'layout/header.php';
include 'layout/layout.php';
?>

<div class="container border-bottom container-padding">
    <div class="my-5 text-center pb-1" style="position: relative;">
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

    <div class="mb-5 overflow-auto">
        <a href="assets/images/service-skill1.png" target="_blank" rel="noopener noreferrer">
            <img src="assets/images/service-skill1.png" alt="">
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
                <th>Extra O/T Rate (USD/H)</th>
                <th>Total</th>
            </tr>
            <tr>
                <td>1</td>
                <td>MASTER</td>
                <td>2379</td>
                <td>923</td>
                <td></td>
                <td>198</td>
                <td>3700</td>
                <td></td>
                <td>6800</td>
            </tr>
            <tr>
                <td>2</td>
                <td>C/O</td>
                <td>1563</td>
                <td>607</td>
                <td></td>
                <td>130</td>
                <td>3300</td>
                <td></td>
                <td>6000</td>
            </tr>
            <tr>
                <td>3</td>
                <td>2/O</td>
                <td>1224</td>
                <td>474</td>
                <td></td>
                <td>102</td>
                <td>1700</td>
                <td></td>
                <td>3500</td>
            </tr>
            <tr>
                <td>4</td>
                <td>3/O</td>
                <td>1156</td>
                <td>448</td>
                <td></td>
                <td>96</td>
                <td>1300</td>
                <td></td>
                <td>3000</td>
            </tr>
            <tr>
                <td>5</td>
                <td>C/E</td>
                <td>2175</td>
                <td>844</td>
                <td></td>
                <td>181</td>
                <td>3700</td>
                <td></td>
                <td>6500</td>
            </tr>
            <tr>
                <td>6</td>
                <td>1/E</td>
                <td>1563</td>
                <td>607</td>
                <td></td>
                <td>130</td>
                <td>3300</td>
                <td></td>
                <td>6000</td>
            </tr>
            <tr>
                <td>7</td>
                <td>2/E</td>
                <td>1224</td>
                <td>474</td>
                <td></td>
                <td>102</td>
                <td>1700</td>
                <td></td>
                <td>3500</td>
            </tr>
            <tr>
                <td>8</td>
                <td>3/E</td>
                <td>1156</td>
                <td>448</td>
                <td></td>
                <td>96</td>
                <td>1300</td>
                <td></td>
                <td>3000</td>
            </tr>
            <tr>
                <td>9</td>
                <td>E/E</td>
                <td>1224</td>
                <td>774</td>
                <td></td>
                <td>102</td>
                <td>1700</td>
                <td></td>
                <td>3800</td>
            </tr>
            <tr>
                <td>10</td>
                <td>BSN (II-5)</td>
                <td>816</td>
                <td></td>
                <td>616</td>
                <td>68</td>
                <td></td>
                <td>5.29</td>
                <td>1500</td>
            </tr>
            <tr>
                <td>11</td>
                <td>AB (II-5)</td>
                <td>714</td>
                <td></td>
                <td>526</td>
                <td>60</td>
                <td></td>
                <td>4.67</td>
                <td>1300</td>
            </tr>
            <tr>
                <td>12</td>
                <td>BSN (II-4)</td>
                <td>544</td>
                <td></td>
                <td>461</td>
                <td>45</td>
                <td></td>
                <td>4.06</td>
                <td>1050</td>
            </tr>
            <tr>
                <td>13</td>
                <td>D/T (VI-1)</td>
                <td>185</td>
                <td>145</td>
                <td></td>
                <td>30</td>
                <td></td>
                <td></td>
                <td>360</td>
            </tr>
            <tr>
                <td>14</td>
                <td>FTR (III-5)</td>
                <td>816</td>
                <td></td>
                <td>616</td>
                <td>68</td>
                <td></td>
                <td>5.22</td>
                <td>1500</td>
            </tr>
            <tr>
                <td>15</td>
                <td>OLR (III-5)</td>
                <td>714</td>
                <td></td>
                <td>526</td>
                <td>60</td>
                <td></td>
                <td>4.67</td>
                <td>1300</td>
            </tr>
            <tr>
                <td>16</td>
                <td>WPR (III-4)</td>
                <td>544</td>
                <td></td>
                <td>461</td>
                <td>45</td>
                <td></td>
                <td>4.06</td>
                <td>1050</td>
            </tr>
            <tr>
                <td>17</td>
                <td>E/T (VI-1)</td>
                <td>185</td>
                <td>145</td>
                <td></td>
                <td>30</td>
                <td></td>
                <td></td>
                <td>360</td>
            </tr>
            <tr>
                <td>18</td>
                <td>C/CK</td>
                <td>816</td>
                <td></td>
                <td>616</td>
                <td>68</td>
                <td></td>
                <td>5.16</td>
                <td>1500</td>
            </tr>
            <tr>
                <td>19</td>
                <td>MESSMAN</td>
                <td>500</td>
                <td></td>
                <td>460</td>
                <td></td>
                <td></td>
                <td></td>
                <td>960</td>
            </tr>
        </table>
        <ol>
            <li>
                <p class="ms-3">Contract Duration : Office 8 + 1 months, Rating 10+1 months</p>
            </li>
            <li>
                <p class="ms-3">Regular Working Hours per week 44 HRS</p>
            </li>
            <li>
                <p class="ms-3">Maning feesperhead / permonth</p>
            </li> -->
        </ol>
    </div>

</div>

<?php include 'layout/footer.php'; ?>