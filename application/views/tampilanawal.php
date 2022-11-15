<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Welcome</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/style.css">
</head>

<body>
  <div class="search-box">
    <input type="text" placeholder="Search here..." />
  </div>

  <div class="nav-container">
    <div class="wrapper">
      <?php $this->load->view('navbar') ?>
    </div>
  </div>

  <div class="header-container header-wrapper">
    <div class="wrapper " style="text-align:center; ">
      <div style="margin-top:-340px" class=" hero-content">
        <h2 style="font-size:48px;  font-weigth:700;  ">
          Kami Hadir disini

        </h2>
        <h2 style="font-size:48px;  font-weigth:700;  ">
          Untuk Memberikan Pelayanan Terbaik
        </h2>
        <h2 style="font-size:48px;  font-weigth:700;  ">
          Untuk Kamu
        </h2>
        <a style="color: #fffffa;
	font-size: 24px;
	text-decoration: none;
    margin-top:40px;
	border-radius: 8px;
	padding: 22px 88px;
	display: inline-block;
	transition: 300ms;
    background: #81CA9D;
    box-shadow: 10px 20px 4px rgba(0, 0, 0, 0.25);" href="#">
          Segera Wujudkan Ide-mu Bersama Kami
        </a>
      </div>


    </div>
  </div>
  <div class="header-container">
    <div class="wrapper">

      <div style="position: absolute;
	display: inline-block;
width: 1440px;
height: 244px;
left: 0px;
top: 1300px;

background: #FEF56C;
border-radius: 10px;">

      </div>
    </div>
  </div>

  <script src="main.js"></script>
</body>

</html>