<?php
// Include necessary PHP files for database connection and user authentication.
require_once("config/database.php");
require_once("controllers/TutorController.php");

// Check if the user is logged in as a tutor; if not, redirect to the login page.
// You should implement user authentication and session management here.
if (!isset($_SESSION['tutor_id'])) {
    header("Location: login.php");
    exit;
}

// Fetch tutor's information from the database.
$tutor = TutorController::getTutorById($_SESSION['tutor_id']);

// Load tutor's courses, students' progress, or other relevant data.

// Include the HTML header and navigation menu.
include("header.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="width: 1440px; height: 1047px; position: relative; background: #F1F4FA">
  <div style="width: 702px; height: 408px; left: 248px; top: 244px; position: absolute">
    <div style="width: 702px; height: 408px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 10px"></div>
    <div style="width: 3.50px; height: 14px; left: 677px; top: 39px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; opacity: 0.30">
      <div style="width: 3.50px; height: 3.50px; left: 0px; top: 0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
      <div style="width: 3.50px; height: 3.50px; left: -5.25px; top: -0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
      <div style="width: 3.50px; height: 3.50px; left: -10.50px; top: -0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
    </div>
    <div style="width: 640px; height: 255px; left: 62px; top: 90px; position: absolute">
      <div style="width: 640px; height: 0px; left: 0px; top: 255px; position: absolute; opacity: 0.05; border: 1px #06152B solid"></div>
      <div style="width: 640px; height: 0px; left: 0px; top: 204px; position: absolute; opacity: 0.05; border: 1px #06152B solid"></div>
      <div style="width: 640px; height: 0px; left: 0px; top: 153px; position: absolute; opacity: 0.05; border: 1px #06152B solid"></div>
      <div style="width: 640px; height: 0px; left: 0px; top: 102px; position: absolute; opacity: 0.05; border: 1px #06152B solid"></div>
      <div style="width: 640px; height: 0px; left: 0px; top: 51px; position: absolute; opacity: 0.05; border: 1px #06152B solid"></div>
      <div style="width: 640px; height: 0px; left: 0px; top: 0px; position: absolute; opacity: 0.05; border: 1px #06152B solid"></div>
    </div>
    <div style="width: 22px; height: 271px; left: 24px; top: 82px; position: absolute; opacity: 0.70">
      <div style="left: 0px; top: 0px; position: absolute; opacity: 0.70; text-align: right; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">100</div>
      <div style="left: 5px; top: 51px; position: absolute; opacity: 0.70; text-align: right; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">80</div>
      <div style="left: 5px; top: 102px; position: absolute; opacity: 0.70; text-align: right; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">60</div>
      <div style="left: 5px; top: 153px; position: absolute; opacity: 0.70; text-align: right; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">40</div>
      <div style="left: 6px; top: 204px; position: absolute; opacity: 0.70; text-align: right; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">20</div>
      <div style="left: 13px; top: 255px; position: absolute; opacity: 0.70; text-align: right; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">0</div>
    </div>
    <div style="width: 639px; height: 16px; left: 63px; top: 360px; position: absolute; justify-content: center; align-items: flex-start; gap: 27px; display: inline-flex">
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">January</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">February</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">March</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">April</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">May</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">June</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">July</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">August</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">September</div>
      <div style="opacity: 0.70; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">October</div>
    </div>
    <div style="width: 639px; height: 186px; left: 63px; top: 159px; position: absolute; background: linear-gradient(90deg, rgba(58, 54, 219, 0.50) 0%, rgba(255, 105, 180, 0.35) 93%)"></div>
    <div style="width: 431px; height: 98px; left: 192px; top: 167px; position: absolute">
      <div style="width: 14px; height: 14px; left: 0px; top: 26px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(96, 91, 255, 0.17); border-radius: 9999px; border: 3px #FF69B4 solid"></div>
      <div style="width: 14px; height: 14px; left: 82px; top: 80px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(96, 91, 255, 0.17); border-radius: 9999px; border: 3px #FF69B4 solid"></div>
      <div style="width: 14px; height: 14px; left: 183px; top: 46px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(96, 91, 255, 0.17); border-radius: 9999px; border: 3px #FF69B4 solid"></div>
      <div style="width: 14px; height: 14px; left: 326px; top: 84px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(96, 91, 255, 0.17); border-radius: 9999px; border: 3px #FF69B4 solid"></div>
      <div style="width: 14px; height: 14px; left: 417px; top: 0px; position: absolute; background: white; box-shadow: 0px 4px 4px rgba(96, 91, 255, 0.17); border-radius: 9999px; border: 3px #FF69B4 solid"></div>
    </div>
    <div style="left: 25px; top: 25px; position: absolute; opacity: 0.70; color: #06152B; font-size: 18px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">My Performance</div>
    <div style="width: 89px; height: 64px; left: 338px; top: 144px; position: absolute">
      <img style="width: 89px; height: 64px; left: 0px; top: 0px; position: absolute; box-shadow: 0px 4px 7px rgba(3, 2, 41, 0.07)" src="https://via.placeholder.com/89x64" />
      <div style="left: 28px; top: 8px; position: absolute; color: white; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Users</div>
      <div style="left: 23px; top: 26px; position: absolute; color: white; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">2,678</div>
    </div>
    <div style="width: 117px; height: 0px; left: 382px; top: 344px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; border: 1px #605BFF dotted"></div>
  </div>
  <div style="width: 1162px; height: 116px; left: 248px; top: 98px; position: absolute">
    <div style="width: 268px; height: 116px; left: 596px; top: 0px; position: absolute">
      <div style="width: 268px; height: 116px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 10px"></div>
      <div style="width: 92px; height: 48px; left: 112px; top: 33px; position: absolute">
        <div style="left: 0px; top: 0px; position: absolute; opacity: 0.70; color: #06152B; font-size: 22.78px; font-family: DM Sans; font-weight: 700; word-wrap: break-word">5</div>
        <div style="left: 0px; top: 29px; position: absolute; opacity: 0.70; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">New Students</div>
      </div>
      <div style="width: 60px; height: 60px; left: 29px; top: 28px; position: absolute; opacity: 0.10; background: #3A36DB; border-radius: 38px"></div>
      <div style="width: 31px; height: 37px; left: 44px; top: 40px; position: absolute; background: black"></div>
    </div>
    <div style="width: 268px; height: 116px; left: 298px; top: 0px; position: absolute">
      <div style="width: 268px; height: 116px; left: 0px; top: 0px; position: absolute">
        <div style="width: 268px; height: 116px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 10px"></div>
        <div style="left: 111px; top: 33px; position: absolute; opacity: 0.70; color: #06152B; font-size: 22.78px; font-family: DM Sans; font-weight: 700; word-wrap: break-word">1500</div>
        <div style="left: 111px; top: 62px; position: absolute; opacity: 0.70; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Purchases</div>
        <div style="width: 32px; height: 32px; left: 42px; top: 42px; position: absolute">
          <div style="width: 24.75px; height: 20px; left: 3px; top: 7px; position: absolute; background: black"></div>
        </div>
      </div>
      <div style="width: 60px; height: 60px; left: 28px; top: 28px; position: absolute; opacity: 0.20; background: #3A36DB; border-radius: 38px"></div>
    </div>
    <div style="width: 268px; height: 116px; left: 0px; top: 0px; position: absolute">
      <div style="width: 268px; height: 116px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 10px"></div>
      <div style="width: 95px; height: 50px; left: 111px; top: 33px; position: absolute">
        <div style="left: 0px; top: 0px; position: absolute; opacity: 0.70; color: #06152B; font-size: 22.78px; font-family: DM Sans; font-weight: 700; word-wrap: break-word">178</div>
        <div style="left: 0px; top: 31px; position: absolute; opacity: 0.70; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Total Students</div>
      </div>
      <div style="width: 60px; height: 60px; left: 28px; top: 28px; position: absolute; opacity: 0.10; background: #3A36DB; border-radius: 38px"></div>
      <div style="width: 27px; height: 27px; left: 45px; top: 45px; position: absolute">
        <div style="width: 18px; height: 20.25px; left: 4.50px; top: 2.25px; position: absolute; background: black"></div>
      </div>
    </div>
    <div style="width: 268px; height: 116px; left: 894px; top: 0px; position: absolute">
      <div style="width: 268px; height: 116px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 10px"></div>
      <div style="width: 188px; height: 48px; left: 54px; top: 33px; position: absolute">
        <div style="width: 20px; height: 20.75px; left: 0px; top: 13px; position: absolute; background: black"></div>
        <div style="left: 57px; top: 0px; position: absolute; opacity: 0.70; color: #06152B; font-size: 22.78px; font-family: DM Sans; font-weight: 700; word-wrap: break-word">Rs 25786.25</div>
        <div style="left: 57px; top: 29px; position: absolute; opacity: 0.70; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Total Revenue</div>
      </div>
      <div style="width: 60px; height: 60px; left: 34px; top: 28px; position: absolute; opacity: 0.10; background: #3A36DB; border-radius: 38px"></div>
    </div>
  </div>
  <div style="width: 275px; height: 40px; left: 1135px; top: 30px; position: absolute">
    <div style="width: 130px; height: 40px; left: 145px; top: 0px; position: absolute">
      <div style="width: 130px; height: 40px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 5px"></div>
      <div style="width: 96px; height: 19px; left: 17px; top: 11px; position: absolute">
        <div style="left: 0px; top: 0px; position: absolute; opacity: 0.70; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">10-10-2021</div>
        <div style="width: 8px; height: 4px; left: 88px; top: 7px; position: absolute; opacity: 0.50; border: 1px #06152B solid"></div>
      </div>
    </div>
    <div style="width: 130px; height: 40px; left: 0px; top: 0px; position: absolute">
      <div style="width: 130px; height: 40px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 5px"></div>
      <div style="left: 17px; top: 11px; position: absolute; opacity: 0.70; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">10-06-2021</div>
      <div style="width: 8px; height: 4px; left: 105px; top: 18px; position: absolute; opacity: 0.50; border: 1px #06152B solid"></div>
    </div>
  </div>
  <div style="width: 432px; height: 335px; left: 978px; top: 682px; position: absolute">
    <div style="width: 432px; height: 335px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 9.82px"></div>
    <div style="width: 237.10px; height: 102px; left: 32.15px; top: 219px; position: absolute">
      <div style="width: 61.85px; height: 64px; left: 7.47px; top: 12px; position: absolute"></div>
      <div style="width: 102.47px; left: 104.12px; top: 7px; position: absolute; color: #06152B; font-size: 15.71px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Linear Motion</div>
      <div style="width: 132.61px; height: 41px; left: 104.48px; top: 61px; position: absolute; opacity: 0.40; color: #06152B; font-size: 15.71px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">250+ Purchases </div>
      <div style="width: 80.05px; height: 14px; left: 103.03px; top: 37px; position: absolute">
        <div style="width: 14.47px; height: 14px; left: 0px; top: 0px; position: absolute; background: #FF69B4"></div>
        <div style="width: 14.47px; height: 14px; left: 16.40px; top: 0px; position: absolute; background: #FF69B4"></div>
        <div style="width: 14.47px; height: 14px; left: 32.79px; top: 0px; position: absolute; background: #FF69B4"></div>
        <div style="width: 14.47px; height: 14px; left: 49.19px; top: -0px; position: absolute; opacity: 0.40; background: #FF69B4"></div>
        <div style="width: 14.47px; height: 14px; left: 65.58px; top: -0px; position: absolute; opacity: 0.40; background: #FF69B4"></div>
      </div>
      <div style="width: 92.78px; height: 96px; left: 0px; top: 0px; position: absolute">
        <div style="width: 92.78px; height: 96px; left: 0px; top: 0px; position: absolute; background: #FAFAFB; border-radius: 9.82px"></div>
        <img style="width: 114.04px; height: 141px; left: -12.56px; top: -1px; position: absolute; border-radius: 24.55px" src="https://via.placeholder.com/114x141" />
      </div>
    </div>
    <div style="width: 245.09px; height: 96px; left: 24.16px; top: 75px; position: absolute">
      <div style="width: 92.78px; height: 96px; left: 0px; top: 0px; position: absolute">
        <div style="width: 92.78px; height: 96px; left: 0px; top: 0px; position: absolute; background: #FAFAFB; border-radius: 9.82px"></div>
        <img style="width: 114.04px; height: 141px; left: -12.56px; top: -1px; position: absolute; border-radius: 24.55px" src="https://via.placeholder.com/114x141" />
      </div>
      <div style="width: 81.38px; left: 112.47px; top: 11px; position: absolute; color: #06152B; font-size: 15.71px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Mechanics</div>
      <div style="width: 132.61px; height: 20px; left: 112.47px; top: 65px; position: absolute; opacity: 0.40; color: #06152B; font-size: 15.71px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">500+ Purchases</div>
      <div style="width: 80.05px; height: 14px; left: 111.02px; top: 41px; position: absolute">
        <div style="width: 14.47px; height: 14px; left: 0px; top: 0px; position: absolute; background: #FF69B4"></div>
        <div style="width: 14.47px; height: 14px; left: 16.40px; top: 0px; position: absolute; background: #FF69B4"></div>
        <div style="width: 14.47px; height: 14px; left: 32.79px; top: 0px; position: absolute; background: #FF69B4"></div>
        <div style="width: 14.47px; height: 14px; left: 49.19px; top: -0px; position: absolute; background: #FF69B4"></div>
        <div style="width: 14.47px; height: 14px; left: 65.58px; top: -0px; position: absolute; opacity: 0.40; background: #FF69B4"></div>
      </div>
    </div>
    <div style="width: 366.28px; height: 0px; left: 25.13px; top: 193px; position: absolute; opacity: 0.05; border: 0.98px #06152B solid"></div>
    <div style="width: 3.50px; height: 13.50px; left: 405.23px; top: 39px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; opacity: 0.30">
      <div style="width: 3.50px; height: 3.38px; left: 0px; top: -0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
      <div style="width: 3.50px; height: 3.38px; left: -5.06px; top: -0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
      <div style="width: 3.50px; height: 3.38px; left: -10.13px; top: -0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
    </div>
    <div style="width: 171.80px; left: 24.16px; top: 25px; position: absolute; opacity: 0.70; color: #06152B; font-size: 17.68px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Top Selling Chapters</div>
  </div>
  <div style="width: 432px; height: 408px; left: 978px; top: 244px; position: absolute">
    <div style="width: 432px; height: 408px; left: 0px; top: 0px; position: absolute; opacity: 0.40; background: white; border-radius: 9.82px"></div>
    <div style="width: 171.80px; height: 28.01px; left: 23px; top: 17px; position: absolute; opacity: 0.70; color: #06152B; font-size: 17.68px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Top Students</div>
    <div style="width: 382px; height: 340px; left: 25px; top: 55px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
      <div style="width: 382px; height: 60px; flex-direction: column; justify-content: space-between; align-items: flex-start; display: flex">
        <div style="width: 382px; height: 60px; background: white; border-radius: 10px"></div>
        <div style="width: 30px; height: 30px; position: relative">
          <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #3A36DB; border-radius: 9999px"></div>
          <img style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; border-radius: 9999px" src="https://via.placeholder.com/30x30" />
        </div>
        <div style="color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">5521 points</div>
        <div style="color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">John Deo</div>
      </div>
      <div style="width: 382px; height: 60px; position: relative">
        <div style="width: 382px; height: 60px; left: 0px; top: 0px; position: absolute; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
          <div style="width: 382px; height: 60px; background: white; border-radius: 10px"></div>
        </div>
        <div style="left: 61px; top: 22px; position: absolute; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Shelby Goode</div>
        <div style="width: 30px; height: 30px; left: 20px; top: 15px; position: absolute">
          <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #FF69B4; border-radius: 9999px"></div>
          <img style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; border-radius: 9999px" src="https://via.placeholder.com/30x30" />
        </div>
        <div style="left: 177px; top: 22px; position: absolute; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">4256 points</div>
      </div>
      <div style="width: 382px; height: 60px; position: relative">
        <div style="width: 382px; height: 60px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 10px"></div>
        <div style="left: 177px; top: 21px; position: absolute; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">2564  Points</div>
        <div style="left: 61px; top: 22px; position: absolute; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Robert Bacins</div>
        <div style="width: 30px; height: 30px; left: 20px; top: 15px; position: absolute">
          <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #03A89E; border-radius: 9999px"></div>
          <img style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; border-radius: 9999px" src="https://via.placeholder.com/30x30" />
        </div>
      </div>
      <div style="width: 382px; height: 60px; position: relative">
        <div style="width: 382px; height: 60px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 10px"></div>
        <div style="left: 177px; top: 21px; position: absolute; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">1253 points</div>
        <div style="left: 61px; top: 22px; position: absolute; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">John Carilo</div>
        <div style="width: 30px; height: 30px; left: 20px; top: 15px; position: absolute">
          <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #03A89E; border-radius: 9999px"></div>
          <img style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; border-radius: 9999px" src="https://via.placeholder.com/30x30" />
        </div>
      </div>
      <div style="width: 382px; height: 60px; position: relative">
        <div style="width: 382px; height: 60px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 10px"></div>
        <div style="left: 189px; top: 22px; position: absolute; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">996 points</div>
        <div style="left: 61px; top: 22px; position: absolute; color: #06152B; font-size: 14.22px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Adriene Watson</div>
        <div style="width: 30px; height: 30px; left: 20px; top: 15px; position: absolute">
          <div style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; background: #FF69B4; border-radius: 9999px"></div>
          <img style="width: 30px; height: 30px; left: 0px; top: 0px; position: absolute; border-radius: 9999px" src="https://via.placeholder.com/30x30" />
        </div>
      </div>
    </div>
  </div>
  <div style="width: 702px; height: 335px; left: 256px; top: 682px; position: absolute">
    <div style="width: 702px; height: 335px; left: 0px; top: 0px; position: absolute; background: white; border-radius: 9.75px"></div>
    <div style="width: 532.52px; height: 16.41px; left: 145.48px; top: 74px; position: absolute">
      <div style="width: 91px; height: 16px; left: 441.52px; top: 0px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Total Revenue</div>
      <div style="width: 79.11px; height: 16.41px; left: 0px; top: 0px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Material</div>
      <div style="width: 29.04px; height: 16.41px; left: 177.70px; top: 0px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Price </div>
      <div style="width: 111px; height: 16px; left: 280.52px; top: 0px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Total Purchases</div>
    </div>
    <div style="width: 653.18px; height: 55px; left: 24.41px; top: 263px; position: absolute">
      <div style="width: 653.18px; height: 55px; left: 0px; top: 0px; position: absolute; opacity: 0.50; background: #F1F4FA; border-radius: 4.87px"></div>
      <div style="width: 53.08px; height: 16.41px; left: 580.93px; top: 22px; position: absolute; text-align: right; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">$3,46,981</div>
      <div style="width: 94px; height: 16px; left: 158.59px; top: 22px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Measurements</div>
      <div style="width: 22.03px; height: 16.41px; left: 298.76px; top: 22px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">$32</div>
      <div style="width: 59.56px; height: 30px; left: 419.83px; top: 13px; position: absolute; opacity: 0.20; background: #3A36DB; border-radius: 7.80px"></div>
      <div style="width: 15.62px; height: 12px; left: 442.29px; top: 20px; position: absolute; text-align: center; color: #3A36DB; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">98</div>
      <img style="width: 29.29px; height: 30px; left: 119.12px; top: 13px; position: absolute; border-radius: 4.87px" src="https://via.placeholder.com/29x30" />
    </div>
    <div style="width: 514.97px; height: 33px; left: 143.52px; top: 220px; position: absolute">
      <div style="width: 56.08px; height: 16.41px; left: 458.89px; top: 9px; position: absolute; text-align: right; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">$3,46,676</div>
      <div style="width: 89px; height: 16px; left: 39.48px; top: 8px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Model Paper 10</div>
      <div style="width: 18.03px; height: 16.41px; left: 179.65px; top: 8px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">$21</div>
      <div style="width: 59.56px; height: 30px; left: 300.72px; top: 3px; position: absolute; opacity: 0.20; background: #3A36DB; border-radius: 7.80px"></div>
      <div style="width: 22.46px; height: 12px; left: 319.27px; top: 10px; position: absolute; text-align: center; color: #3A36DB; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">78</div>
      <img style="width: 29.29px; height: 30px; left: 0px; top: 0px; position: absolute; border-radius: 4.87px" src="https://via.placeholder.com/29x30" />
    </div>
    <div style="width: 653.18px; height: 55px; left: 24.41px; top: 155px; position: absolute">
      <div style="width: 653.18px; height: 55px; left: 0px; top: 0px; position: absolute; opacity: 0.50; background: #F1F4FA; border-radius: 4.87px"></div>
      <div style="width: 49.07px; height: 16.41px; left: 584.84px; top: 22px; position: absolute; text-align: right; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">$46,660</div>
      <div style="width: 41.06px; height: 16.41px; left: 158.17px; top: 21px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Fields</div>
      <div style="width: 19.03px; height: 16.41px; left: 298.76px; top: 22px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">$14</div>
      <div style="width: 59.56px; height: 30px; left: 419.83px; top: 13px; position: absolute; opacity: 0.20; background: #3A36DB; border-radius: 7.80px"></div>
      <div style="width: 15.62px; height: 12px; left: 442.29px; top: 20px; position: absolute; text-align: center; color: #3A36DB; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">53</div>
      <img style="width: 29.29px; height: 30px; left: 119.12px; top: 12px; position: absolute; border-radius: 4.87px" src="https://via.placeholder.com/29x30" />
    </div>
    <div style="width: 513.89px; height: 30px; left: 143.52px; top: 115px; position: absolute">
      <div style="width: 52.07px; height: 15.39px; left: 461.82px; top: 7px; position: absolute; text-align: right; color: #06152B; font-size: 11.70px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">$1,46,660</div>
      <div style="width: 89.13px; height: 16.41px; left: 39.05px; top: 8px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Linear Motion</div>
      <div style="width: 25.04px; height: 16.41px; left: 179.65px; top: 7px; position: absolute; color: #06152B; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">$178</div>
      <div style="width: 59.56px; height: 30px; left: 300.72px; top: 0px; position: absolute; opacity: 0.20; background: #3A36DB; border-radius: 7.80px"></div>
      <div style="width: 23.43px; height: 16.41px; left: 319.27px; top: 7px; position: absolute; text-align: center; color: #3A36DB; font-size: 12.32px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">325</div>
      <img style="width: 29.29px; height: 30px; left: 0px; top: 0px; position: absolute; border-radius: 4.87px" src="https://via.placeholder.com/29x30" />
    </div>
    <div style="width: 653.18px; height: 0px; left: 24.41px; top: 105px; position: absolute; opacity: 0.05; border: 0.97px #06152B solid"></div>
    <div style="width: 3.50px; height: 13.64px; left: 650.58px; top: 39px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; opacity: 0.30">
      <div style="width: 3.50px; height: 3.41px; left: 0px; top: -0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
      <div style="width: 3.50px; height: 3.41px; left: -5.11px; top: -0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
      <div style="width: 3.50px; height: 3.41px; left: -10.23px; top: -0px; position: absolute; transform: rotate(-90deg); transform-origin: 0 0; background: #06152B"></div>
    </div>
    <div style="width: 206px; height: 24px; left: 24px; top: 25px; position: absolute; opacity: 0.70; color: #06152B; font-size: 17.55px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Recently Updated</div>
  </div>
  <div style="left: 248px; top: 35px; position: absolute; color: #06152B; font-size: 25.63px; font-family: DM Sans; font-weight: 700; word-wrap: break-word">Tutor Dashboard</div>
  <div style="width: 218px; height: 1047px; left: 0px; top: 0px; position: absolute">
    <div style="width: 218px; height: 1047px; left: 0px; top: 0px; position: absolute; background: white"></div>
    <div style="width: 174px; height: 43px; left: 26px; top: 35px; position: absolute">
      <div style="width: 45px; height: 43px; left: 0px; top: 0px; position: absolute">
        <div style="width: 45px; height: 43px; left: 0px; top: 0px; position: absolute; background: #F7F7F8; border-radius: 12px"></div>
        <div style="width: 45px; height: 43px; left: 0px; top: 0px; position: absolute; background: #F1F4FA; border-radius: 12px"></div>
        <img style="width: 45px; height: 43px; left: 0px; top: 0px; position: absolute; border-radius: 12px" src="https://via.placeholder.com/45x43" />
      </div>
      <div style="width: 119px; height: 30px; left: 55px; top: 6px; position: absolute">
        <div style="left: 0px; top: 0px; position: absolute; color: #06152B; font-size: 12.64px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Kasun Gunawardane</div>
        <div style="left: 0px; top: 17px; position: absolute; opacity: 0.50; color: #06152B; font-size: 10px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">Physics</div>
      </div>
    </div>
    <div style="left: 26px; top: 159.54px; position: absolute; flex-direction: column; justify-content: center; align-items: center; gap: 36px; display: inline-flex">
      <div style="flex-direction: column; justify-content: center; align-items: flex-start; gap: 36px; display: flex">
        <div style="width: 165px; height: 48px; position: relative">
          <div style="width: 121px; height: 24px; left: 20px; top: 12px; position: absolute">
            <div style="left: 38px; top: 1px; position: absolute; color: #3A36DB; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Dashboard</div>
            <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
              <img style="width: 20px; height: 20px" src="https://via.placeholder.com/20x20" />
            </div>
          </div>
          <div style="width: 165px; height: 48px; left: 0px; top: 0px; position: absolute; opacity: 0.20; background: #99B2C6; border-top-left-radius: 5px; border-top-right-radius: 5px"></div>
        </div>
        <div style="align-self: stretch; flex-direction: column; justify-content: center; align-items: flex-start; gap: 36px; display: flex">
          <div style="width: 127px; position: relative">
            <div style="left: 38px; top: 2.34px; position: absolute; opacity: 0.50; color: #06152B; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">My Lessons</div>
            <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute; opacity: 0.40; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
              <div style="width: 20px; height: 21px; background: #06152B"></div>
            </div>
          </div>
          <div style="position: relative">
            <div style="left: 38px; top: 1.14px; position: absolute; opacity: 0.50; color: #06152B; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">My Status</div>
            <div style="width: 24px; height: 24px; padding-top: 4.46px; padding-bottom: 3.54px; padding-left: 4px; padding-right: 4px; left: 0px; top: 0px; position: absolute; opacity: 0.40; justify-content: center; align-items: center; display: inline-flex">
              <div style="width: 16px; height: 16px; position: relative; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
                <div style="width: 16px; height: 16px; background: black"></div>
              </div>
            </div>
          </div>
          <div style="position: relative">
            <div style="left: 38px; top: 0px; position: absolute; opacity: 0.50; color: #06152B; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">My Students</div>
            <div style="width: 24px; height: 24px; left: 0px; top: 0.69px; position: absolute; opacity: 0.40; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
              <div style="width: 19px; height: 16px; background: black"></div>
            </div>
          </div>
          <div style="width: 159px; height: 24px; position: relative">
            <div style="left: 38px; top: 2px; position: absolute; opacity: 0.50; color: #06152B; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Messages</div>
            <div style="width: 22px; height: 14px; left: 137px; top: 7px; position: absolute; opacity: 0.10; background: #FF69B4; border-radius: 7px"></div>
            <div style="left: 142px; top: 7px; position: absolute; color: #FF69B4; font-size: 10px; font-family: DM Sans; font-weight: 400; word-wrap: break-word">49</div>
            <div style="width: 24px; height: 24px; left: 0px; top: 0px; position: absolute; opacity: 0.40">
              <img style="width: 20px; height: 20px; left: 2px; top: 2px; position: absolute" src="https://via.placeholder.com/20x20" />
            </div>
          </div>
          <div style="position: relative">
            <div style="left: 38px; top: 0px; position: absolute; opacity: 0.50; color: #06152B; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Settings</div>
            <div style="width: 24px; height: 24px; left: 0px; top: 0.23px; position: absolute; opacity: 0.40; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
              <img style="width: 19px; height: 20px" src="https://via.placeholder.com/19x20" />
            </div>
          </div>
          <div style="position: relative">
            <img style="width: 22px; height: 16.67px; left: 0px; top: 2.46px; position: absolute" src="https://via.placeholder.com/22x17" />
            <div style="left: 38px; top: 0px; position: absolute; opacity: 0.50; color: #06152B; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word">Log Out</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
