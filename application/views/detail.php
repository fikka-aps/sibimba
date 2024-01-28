<!DOCTYPE html>
<html lang="en">

<head>
  <title><?= $title; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=B612+Mono|Cabin:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="../vendor/fonts/icomoon/style.css">

  <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
  <link rel="stylesheet" href="../vendor/css/jquery-ui.css">
  <link rel="stylesheet" href="../vendor/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../vendor/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="../vendor/css/owl.theme.default.min.css">

  <link rel="stylesheet" href="../vendor/css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="../vendor/css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="../vendor/fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="../vendor/css/aos.css">
  <link href="../vendor/css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="../vendor/css/style.css">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    <div class="header-top">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 d-flex">
            <a href="<?= base_url('login') ?>" class="site-logo font-weight-bold" style="color:black;">
              SiBimba
            </a>

            <a href="#" class="ml-auto d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>

          </div>
          <div class="col-12 col-lg-6 ml-auto d-flex">
            <div class="ml-md-auto top-social d-none d-lg-inline-block">
              <a href="#" class="d-inline-block p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="d-inline-block p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="d-inline-block p-3"><span class="icon-instagram"></span></a>
            </div>
            <form action="#" class="search-form d-inline-block">

              <div class="d-flex">
                <input type="email" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-secondary"><span class="icon-search"></span></button>
              </div>
            </form>


          </div>
          <div class="col-6 d-block d-lg-none text-right">

          </div>
        </div>
      </div>




      <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

        <div class="container">
          <div class="d-flex align-items-center">

            <div class="mr-auto">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                  <li class="active">
                    <a href="<?= base_url('auth') ?>" class="nav-link text-left">Home</a>
                  </li>
                  <li>
                    <a href="<?= base_url('bimbel') ?>" class="nav-link text-left">Bimbel</a>
                  </li>
                  <li><a href="<?= base_url('contact') ?>" class="nav-link text-left">Contact</a></li>
                </ul>
              </nav>

            </div>

          </div>
        </div>

      </div>

    </div>
    <div class="site-section">
      <div class="container text-center">
        <div class="card">
          <img src="<?= base_url('img/bimbel/') . $detail['pict']; ?>" width="300px" class="img mx-auto mt-5 mb-5" alt="...">
          <div class="card-body">
            <h2 class="card-title"><?= $detail['bimbel_name'] ?></h2>
            <p class="card-text"><?= $detail['desc'] ?></p>
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item">Alamat : <br> <?= $detail['address'] ?></li>
            <li class="list-group-item">Telepon :<br> <?= $detail['telepon_num'] ?></li>
          </ul>
          <div class="card-body">
            <a href="<?= $detail['website'] ?>" class="card-link"><i class="fas fa-globe"></i>Website</a>
          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- .site-wrap -->


  <!-- loader -->
  <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15" />
    </svg></div>

  <script src="../vendor/js/jquery-3.3.1.min.js"></script>
  <script src="../vendor/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../vendor/js/jquery-ui.js"></script>
  <script src="../vendor/js/popper.min.js"></script>
  <script src="../vendor/js/bootstrap.min.js"></script>
  <script src="../vendor/js/owl.carousel.min.js"></script>
  <script src="../vendor/js/jquery.stellar.min.js"></script>
  <script src="../vendor/js/jquery.countdown.min.js"></script>
  <script src="../vendor/js/bootstrap-datepicker.min.js"></script>
  <script src="../vendor/js/jquery.easing.1.3.js"></script>
  <script src="../vendor/js/jquery.sticky.js"></script>
  <script src="../vendor/js/aos.js"></script>
  <script src="../vendor/js/jquery.fancybox.min.js"></script>
  <script src="../vendor/js/jquery.sticky.js"></script>
  <script src="../vendor/js/jquery.mb.YTPlayer.min.js"></script>



  <script src="../vendor/js/main.js"></script>

</body>

</html>