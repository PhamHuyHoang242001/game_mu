<?php
session_start();
include "db.php";
include "mobile.php";
$detect = new Mobile_Detect;
$ip = $conn->query("SELECT * FROM gc_info");
$rs = mysqli_fetch_array($ip);
$title = $rs['title'];
$link = $rs['urlgame'];
$down = explode(";",$link);
$page = $rs['page'];
$group = $page;
$ytb = $page;
$codeopen = $rs['code'];
?>
<html lang="vi">
<head>
<meta http-equiv="content-type" content="text/html;charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?=$title;?></title>
<meta name="theme-color" content="#ffffff">
<link rel="icon" href="/favicon.ico">
<meta name="description" content="<?=$title;?> Game nhập vai thành nhân vật chibi hot, và tự mình đè bẹp đối thối với những món đồ mà mình có.">
<meta name="keywords" content="Thiên hạ Mobile, Thiên hạ Free">
<meta property="og:locale" content="vi_VN">
<meta property="og:type" content="website">
<meta property="og:title" content="<?=$title;?>">
<meta property="og:description" content="<?=$title;?> Game nhập vai thành nhân vật chibi hot, và tự mình đè bẹp đối thối với những món đồ mà mình có.">
<meta property="og:site_name" content="<?=$title;?>">
<meta property="og:image" content="/img/share.jpg">
<meta property="og:image:alt" content="<?=$title;?>">
<meta property="og:title" content="<?=$title;?>">
<link rel="stylesheet" href="assets/frontend/home/assets/css/vendor.css">
<link rel="stylesheet" href="assets/frontend/home/assets/css/main9514.css?v=111">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>

<body>
  
      <div class="header">
      <input id="toggle-hambuger" type="checkbox" style="display:none">
      <nav class="navbar clearfix">
          <div class="container">
                                  <h1>
                      <a href="#" title="<?=$title;?>">
                          <img src="/assets/frontend/home/assets/images/icon-game.png" title="<?=$title;?>" class="logo-top hidden-1199">
                      </a>
                  </h1>
                              
                                  <h1>
                      <a href="#" class="hidden-1200">
                          <img class="icon-game" src="/assets/frontend/home/assets/images/icon-game.png" alt="<?=$title;?>">
                      </a>
                  </h1>
                              
                              
              <div class="info-game hidden-1200">
                  <p class="name-game f-uvn_laclongquanbold t-upper"><?=$title;?></p>
                  <p class="des ">NPH DEVGAME</p>
              </div>
			  <?php if(isset($_SESSION['username']))
					  {?>
				 <div class="right-nav hidden-1200">
                  
                  <div class="link-head-setting">
                      <!-- link home -->
                      <a href="/user/" class="link-hs"></a> 
					
                  </div>
   
              </div>
              <div class="navbar-content">
                  <ul id="menu">
                      <li class=""><a href="/user/" class="a100 t-upper">TÀI KHOẢN</a></li>
                      <li class=""><a href="/user/" class="a100 t-upper"><i class="fa fa-user"></i><font color="red"><?=$_SESSION['username'];?></font></a></li>
                      <li class=""><a href="/user/payment" class="a100 t-upper">Nạp thẻ</a></li>
                      <li class=""><a href="/user/giftcode" class="a100 t-upper">GiftCode</a></li>
                      <li class=""><a href="#" class="a100 t-upper">Hướng dẫn</a></li>
                      <li class=""><a class="a100 t-upper" target="_blank" href="<?=$group;?>">Cộng đồng</a></li>
                  </ul>
              </div>
					  <?php } else { ?>
              <div class="right-nav hidden-1200">
                  
                  <div class="link-head-setting">
                      <!-- link home -->
                      <a href="/user/" class="link-hs"></a> 
					
                  </div>
   
              </div>
              <div class="navbar-content">
                  <ul id="menu">
                      <li class=""><a href="/user/" class="a100 t-upper">TÀI KHOẢN</a></li>
                      <li class=""><a href="#" class="a100 t-upper">Trang chủ</a></li>
                      <li class=""><a href="/user/login" class="a100 t-upper">Đăng nhập</a></li>
					  <li class=""><a href="/user/giftcode" class="a100 t-upper">GiftCode</a></li>
                      <li class=""><a href="/user/payment" class="a100 t-upper">Nạp thẻ</a></li>
                      <li class=""><a href="#" class="a100 t-upper">Hướng dẫn</a></li>
                      <li class=""><a class="a100 t-upper" target="_blank" href="<?=$group;?>">Cộng đồng</a></li>
                  </ul>
              </div>
			    <?php } ?>
          </div>
      </nav>
  </div>

  
  