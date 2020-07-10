<?php
include_once "base.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Edward Lin Resume Website</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/simple-line-icons.css">
  <link rel="stylesheet" type="text/css" href="css/slicknav.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/css.css">
  <style>
  .hero-area-bg {
    background: url(img/c1.jpg) no-repeat;
    background-size: cover;
    margin-top: 60px;
  }
  </style>

</head>

<body>

  <!-- Header Area wrapper Starts -->
  <header id="header-wrap">
    <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
      <div class="container">
        <div class="navbar-header">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar">
            <span class="navbar-toggler-icon"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
            <span class="icon-menu"></span>
          </button>
          <a href="index.html" class="navbar-brand"><img src="img/logo/logo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
            <li class="nav-item active">
              <a class="nav-link" href="#hero-area">
                Home
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">
                About
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#skill">
                Skill
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#experience">
                Experience
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#job">
                Job
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#auto">
                Autobiography
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#portfolios">
                Portfolios
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                Login
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- Mobile Menu Start -->
      <ul class="onepage-nev mobile-menu">
        <li>
          <a href="#hero-area">Home</a>
        </li>
        <li>
          <a href="#about">About</a>
        </li>
        <li>
          <a href="#skill">Skill</a>
        </li>
        <li>
          <a href="#experience">Experience</a>
        </li>
        <li>
          <a href="#job">Job</a>
        </li>
        <li>
          <a href="#auto">Autobiography</a>
        </li>
        <li>
          <a href="#portfolios">Portfolios</a>
        </li>
        <li>
          <a href="login.php">Login</a>
        </li>
      </ul>
      <!-- Mobile Menu End -->
    </nav>
    <!-- Navbar End -->
    <?php
      $title=new DB('title') ;
      $ti=$title->find(['sh'=>1]);
    ?>
    <!-- Hero Area Start -->
    <div id="hero-area" class="hero-area-bg" style="background:url(&#39;img/carousel/<?=$ti['img'];?>&#39;)">
      <div class="overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <div class="contents">
              <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">歡迎前往</h5>
              <h1 class="script-font wow fadeInUp" data-wow-delay="0.4s">林仕杰</h1>
              <p class="script-font wow fadeInUp" data-wow-delay="0.6s">個人專屬履歷</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Area End -->

  </header>

  <!-- About Section Start -->
  <?php
    $about=new DB('about') ;
    $ab=$about->find(1);
  ?>
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="img-thumb wow fadeInLeft" data-wow-delay="0.3s">
            <img class="img-fluid" src="img/about/<?=$ab['img'];?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="profile-wrapper wow fadeInRight" data-wow-delay="0.3s">
            <div class="about-profile">
              <ul class="admin-profile">
                <li><span class="pro-title"> 名字 </span> <span class="pro-detail"><?=$ab['name'];?></span></li>
                <li><span class="pro-title"> 年齡 </span> <span class="pro-detail"><?=$ab['year'];?> 歲</span></li>
                <li><span class="pro-title"> 工作經歷 </span> <span class="pro-detail"><?=$ab['exp'];?> 年</span></li>
                <li><span class="pro-title"> 國家 </span> <span class="pro-detail"><?=$ab['country'];?></span></li>
                <li><span class="pro-title"> 城市 </span> <span class="pro-detail"><?=$ab['city'];?></span></li>
                <li><span class="pro-title"> 手機 </span> <span class="pro-detail"><?=$ab['phone'];?></span></li>
                <li><span class="pro-title"> e-mail </span> <span class="pro-detail"><?=$ab['email'];?></span></li>
                <li><span class="pro-title"> 狀況 </span> <span class="pro-detail"><?=$ab['status'];?></span></li>
                <li><span class="pro-title"> 簡介 </span> <span class="pro-detail"><?=$ab['introduction'];?></span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Skill Section Start -->
  <section id="skill" class="services section-padding">
    <h2 class="section-title wow flipInX" data-wow-delay="0.2s">專業技能</h2>
    <div class="container">
      <div class="row">
        <!-- services item -->
        <?php
          $about=new DB('skill') ;
          $abs=$about->all(['sh'=>1]);
          foreach ($abs as $ab) {            
        ?>
        <div class="col-md-6 col-lg-3 col-xs-12 pb-4">
          <div class="services-item wow fadeInDown" data-wow-delay="0.3s">
            <img src="img/skill/<?=$ab['img'];?>" alt="HTML">
          </div>
        </div>
        <?php
          }
        ?>
      </div>
    </div>
  </section> 

  <!-- Experience Section Start -->
  <div id="experience" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
        <h2 class="section-title wow flipInX" data-wow-delay="0.2s">學經歷</h2>
          <div class="education wow fadeInRight" data-wow-delay="0.3s">
            <ul class="timeline">
              <li>
                <i class="icon-graduation"></i>
                <h2 class="timelin-title">學歷</h2>
              </li>
              <?php
                $edu=new DB("edu");
                $edus=$edu->all(['sh'=>1]);
                foreach($edus as $ed){
              ?>
              <li>
                <div class="content-text">
                  <h3 class="line-title"><?=$ed['school'];?></h3>
                  <span><?=$ed['year'];?></span>
                  <p class="line-text"><?=$ed['dep'];?></p>
                </div>
              </li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
        
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="education wow fadeInRight" data-wow-delay="0.3s">
            <ul class="timeline">
              <li>
                <i class="icon-graduation"></i>
                <h2 class="timelin-title">工作經歷</h2>
              </li>
              <?php
                $exp=new DB("exp");
                $exps=$exp->all(['sh'=>1]);
                foreach($exps as $ex){
              ?>
              <li>
                <div class="content-text">
                  <h3 class="line-title"><?=$ex['title'];?></h3>
                  <span><?=$ex['year'];?></span>
                  <p class="line-text"><?=nl2br($ex['content']);?></p>
                </div>
              </li>
              <?php
                }
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Job search conditions Section -->
  <section id="job" class="services section-padding">
    <h2 class="section-title wow flipInX" data-wow-delay="0.2s">求職條件</h2>
    <div class="container">
        <!-- services item -->
        <?php
          $job=new DB('job') ;
          $jobs=$job->all(['sh'=>1]);
          foreach ($jobs as $jo) {            
        ?>
        <div class="col-md-12 col-lg-12 col-xs-12 pb-3">
        <table>
          <tr>
            <td colspan=1>職類：</td>
            <td colspan=2><?=$jo['category'];?></td>
          </tr>
          <tr>
            <td colspan=1>待遇：</td>
            <td colspan=2><?=$jo['salary'];?></td>
          </tr>
          <tr>
            <td colspan=1>地點：</td>
            <td colspan=2><?=$jo['place'];?></td>
          </tr>
          <tr>
            <td colspan=1>工作性質：</td>
            <td colspan=2><?=$jo['property'];?></td>
          </tr>
        </table>
        </div>
        <?php
          }
        ?>
    </div>
  </section> 
  
  
  <!-- Autobiography Section -->
  <section id="auto" class="section-padding">
    <h2 class="section-title wow flipInX" data-wow-delay="0.2s">自傳</h2>
    <div class="container">
        <?php
          $auto=new DB('auto') ;
          $autos=$auto->all(['sh'=>1]);
          foreach ($autos as $au) {            
        ?>
        <div class="col-md-12 col-lg-12 col-xs-12 pb-3">
          <p><?=nl2br($au['content']);?></p>
        </div>
        <?php
          }
        ?>
    </div>
  </section> 


  <!-- Portfolio Section -->
  <section id="portfolios" class="section-padding">
    <div class="container">
      <h2 class="section-title wow flipInX" data-wow-delay="0.4s">我的作品集</h2>
      <div class="row">
        <div id="portfolio" class="row wow fadeInDown" data-wow-delay="0.4s">
          <?php
            $port=new DB("portf");
            $ports=$port->all(['sh'=>1]);
            foreach($ports as $pt){
          ?>
          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 mb-4">
            <div class="portfolio-item">
              <div class="shot-item">
                <a class="link" href="<?=$pt['href'];?>">
                  <img src="img/portfolio/<?=$pt['img'];?>">
                  <p><?=$pt['text'];?></p>                
                  <div class="overlay">
                  </div>
                </a>
              </div>
            </div>
          </div>
          <?php
            }
          ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Go to Top Link -->
  <a href="#" class="back-to-top">
    <i class="icon-arrow-up"></i>
  </a>

  <script src="js/jquery-min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.mixitup.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/nivo-lightbox.js"></script>
  <script src="js/jquery.slicknav.js"></script>
  <script src="js/main.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/js.js"></script>
</body>

</html>