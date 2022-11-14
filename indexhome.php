<!DOCTYPE html>
<head>
    <title>Ani Shop - Home Page</title>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet"> 
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="homestyle.css">
    <script src="home.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<header>
    <!-- Tab Untuk banner Pengumuman/Iklan-->
    <div class="announcement-bar" role="region" aria-label="Announcement">
        <a href="#" class="announcement-bar__link" aria-describedby="a11y-external-message">
            <p class="announcement-bar__message"><b>ANI-SHOP</b></p>
        </a>
        <!-- Tab Navigasi-->
        <nav>
            <div class="nav-item">
                <a class="nav-link" class="nav-link active" href="indexhome.php"><b>Beranda</b></a>
            </div>
            <div class="nav-item">
                <a class="nav-link" class="nav-link active" href="#"><b>Baju</b></a>
            </div>
            <div class="nav-item">
                <a class="nav-link" class="nav-link active" href="#"><b>Hoodie</b></a>
            </div>
            <div class="nav-item">
                <a class="nav-link" class="nav-link active" href="#"><b>Aksesoris</b></a>
            </div>
            <div class="nav-item">
                <a class="nav-link" class="nav-link active" href="#"><b>Lainnya</b></a>
                <div class="nav-dropdown">
                    <a class="nav-link" class="nav-link active" href="#"><b>Diskon Special</b></a>
                    <a class="nav-link" class="nav-link active" href="#"><b>Tentang Kami</b></a>
                    <a class="nav-link" class="nav-link active" href="#"><b>Hubungi Kami</b></a>
                </div>
            </div>
            <div class="nav-item">
                <a class="nav-link" class="nav-link active" href="./login.php"><b>Login</b></a>
                <div class="nav-dropdown">
                    <a class="nav-link" class="nav-link active" href="logout.php"><b>Logout</b></a>
                </div>
            </div>
            <!-- Tab Searce Bar-->
            <div class="nav-item" class="container">
                <div class="nav-link" class="nav-link active" class="search-box">
                    <div class="search-icon"><i class="fa fa-search search-icon"></i></div>
                    <form action="" class="search-form">
                        <input type="text" placeholder="Search" id="search" autocomplete="off">
                    </form>
                    <svg class="search-border" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" viewBox="0 0 671 111" style="enable-background:new 0 0 671 111;"
                        xml:space="preserve">
                <path class="border" d="M335.5,108.5h-280c-29.3,0-53-23.7-53-53v0c0-29.3,23.7-53,53-53h280"/>
                <path class="border" d="M335.5,108.5h280c29.3,0,53-23.7,53-53v0c0-29.3-23.7-53-53-53h-280"/>
                </svg>
                    <div class="go-icon"><i class="fa fa-arrow-right"></i></div>
                </div>
            </div>
            <!-- Tab Searce Bar Berakhir-->
        </nav>
        <!-- Tab Navigasi Berakhir-->
    </div>
    <!-- Tab Untuk banner Pengumuman/Iklan Berakhir-->
<!-- Tab Navigasi Berakhir-->
</header>

<body>
    <!-- slide iklan product-->
    <div class="slider">
    <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
    <input type="radio" name="slider" title="slide2" class="slider__nav"/>
    <input type="radio" name="slider" title="slide3" class="slider__nav"/>
    <input type="radio" name="slider" title="slide4" class="slider__nav"/>
    <div class="slider__inner">
        <div class="slider__contents"><i class="slider__image fa fa-codepen"></i>
        <i class="slider__caption"><img class="img-responsive" src="gambar/1.png"/>codepen</i>
        <p class="slider__txt">Tambanhin text di sini juka perlu</p>
        </div>
        <div class="slider__contents"><i class="slider__image fa fa-newspaper-o"></i>
        <i class="slider__caption"><img class="img-responsive" src="gambar/2.png"/>codepen</i>
        <p class="slider__txt">Tambanhin text di sini juka perlu</p>
        </div>
        <div class="slider__contents"><i class="slider__image fa fa-television"></i>
        <i class="slider__caption"><img class="img-responsive" src="gambar/3.png"/>codepen</i>
        <p class="slider__txt">Tambanhin text di sini juka perlu</p>
        </div>
        <div class="slider__contents"><i class="slider__image fa fa-diamond"></i>
        <i class="slider__caption"><img class="img-responsive" src="gambar/1.png"/>codepen</i>
        <p class="slider__txt">Tambanhin text di sini juka perlu</p>
    </div>
    </div>
    </div>
    <!-- slide iklan product berakhir-->

    <!-- Page content -->
    <div class="wrapper">
        <div class="product-img">
        <img src="gambar/4.png" height="420" width="327">
        </div>
        <div class="product-info">
        <div class="product-text">
            <h1>Harvest Vase</h1>
            <h2>by studio and friends</h2>
            <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
        </div>
        <div class="product-price-btn">
            <p><span>78</span>$</p>
            <button type="button">buy now</button>
        </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="product-img">
        <img src="gambar/5.png" height="420" width="327">
        </div>
        <div class="product-info">
        <div class="product-text">
            <h1>Harvest Vase</h1>
            <h2>by studio and friends</h2>
            <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
        </div>
        <div class="product-price-btn">
            <p><span>78</span>$</p>
            <button type="button">buy now</button>
        </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="product-img">
        <img src="gambar/6.png" height="420" width="327">
        </div>
        <div class="product-info">
        <div class="product-text">
            <h1>Harvest Vase</h1>
            <h2>by studio and friends</h2>
            <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
        </div>
        <div class="product-price-btn">
            <p><span>78</span>$</p>
            <button type="button">buy now</button>
        </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="product-img">
        <img src="gambar/7.png" height="420" width="327">
        </div>
        <div class="product-info">
        <div class="product-text">
            <h1>Harvest Vase</h1>
            <h2>by studio and friends</h2>
            <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
        </div>
        <div class="product-price-btn">
            <p><span>78</span>$</p>
            <button type="button">buy now</button>
        </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="product-img">
        <img src="gambar/8.png" height="420" width="327">
        </div>
        <div class="product-info">
        <div class="product-text">
            <h1>Harvest Vase</h1>
            <h2>by studio and friends</h2>
            <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
        </div>
        <div class="product-price-btn">
            <p><span>78</span>$</p>
            <button type="button">buy now</button>
        </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="product-img">
        <img src="gambar/9.png" height="420" width="327">
        </div>
        <div class="product-info">
        <div class="product-text">
            <h1>Harvest Vase</h1>
            <h2>by studio and friends</h2>
            <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
        </div>
        <div class="product-price-btn">
            <p><span>78</span>$</p>
            <button type="button">buy now</button>
        </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="product-img">
        <img src="gambar/10.png" height="420" width="327">
        </div>
        <div class="product-info">
        <div class="product-text">
            <h1>Harvest Vase</h1>
            <h2>by studio and friends</h2>
            <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
        </div>
        <div class="product-price-btn">
            <p><span>78</span>$</p>
            <button type="button">buy now</button>
        </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="product-img">
        <img src="gambar/11.png" height="420" width="327">
        </div>
        <div class="product-info">
        <div class="product-text">
            <h1>Harvest Vase</h1>
            <h2>by studio and friends</h2>
            <p>Harvest Vases are a reinterpretation<br> of peeled fruits and vegetables as<br> functional objects. The surfaces<br> appear to be sliced and pulled aside,<br> allowing room for growth. </p>
        </div>
        <div class="product-price-btn">
            <p><span>78</span>$</p>
            <button type="button">buy now</button>
        </div>
        </div>
    </div>
</body>

<!-- Footer -->
<footer class="footer">
  <div class="footer__addr">
    <h1 class="footer__logo">Something</h1>
        
    <h2>Contact</h2>
    
    <address>
      5534 Somewhere In. The World 22193-10212<br>
          
      <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
    </address>
  </div>
  
  <ul class="footer__nav">
    <li class="nav__item">
      <h2 class="nav__title">Media</h2>

      <ul class="nav__ul">
        <li>
          <a href="#">Online</a>
        </li>

        <li>
          <a href="#">Print</a>
        </li>
            
        <li>
          <a href="#">Alternative Ads</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item nav__item--extra">
      <h2 class="nav__title">Technology</h2>
      
      <ul class="nav__ul nav__ul--extra">
        <li>
          <a href="#">Hardware Design</a>
        </li>
        
        <li>
          <a href="#">Software Design</a>
        </li>
        
        <li>
          <a href="#">Digital Signage</a>
        </li>
        
        <li>
          <a href="#">Automation</a>
        </li>
        
        <li>
          <a href="#">Artificial Intelligence</a>
        </li>
        
        <li>
          <a href="#">IoT</a>
        </li>
      </ul>
    </li>
    
    <li class="nav__item">
      <h2 class="nav__title">Legal</h2>
      
      <ul class="nav__ul">
        <li>
          <a href="#">Privacy Policy</a>
        </li>
        
        <li>
          <a href="#">Terms of Use</a>
        </li>
        
        <li>
          <a href="#">Sitemap</a>
        </li>
      </ul>
    </li>
  </ul>
  
  <div class="legal">
    <p>&copy; 2019 Something. All rights reserved.</p>
  </div>
</footer>