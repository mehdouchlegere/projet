
<!DOCTYPE html>
<html lang="zxx">
<head>
  <title>Divisima | eCommerce Template</title>
  <meta charset="UTF-8">
  <meta name="description" content=" Divisima | eCommerce Template">
  <meta name="keywords" content="divisima, eCommerce, creative, html">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="shortcut icon"/>

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

     <link rel="stylesheet" href="css/add.css">

  <!-- Stylesheets -->
  <link rel="stylesheet" href="css/bootstrap.min.css"/>
  <link rel="stylesheet" href="css/font-awesome.min.css"/>
  <link rel="stylesheet" href="css/flaticon.css"/>
  <link rel="stylesheet" href="css/slicknav.min.css"/>
  <link rel="stylesheet" href="css/jquery-ui.min.css"/>
  <link rel="stylesheet" href="css/owl.carousel.min.css"/>
  <link rel="stylesheet" href="css/animate.css"/>
  <link rel="stylesheet" href="css/style.css"/>


  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>

  <!-- Page Preloder -->
  <div id="preloder">
    <div class="loader"></div>
  </div>

  <!-- Header section -->
  <header class="header-section">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 text-center text-lg-left">
            <!-- logo -->
            <a href="./index.html" class="site-logo">
              <img src="img/logo.png" alt="">
            </a>
          </div>
          <div class="col-xl-6 col-lg-5">
            <form class="header-search-form">
              <input type="text" placeholder="Search on divisima ....">
              <button><i class="flaticon-search"></i></button>
            </form>
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="user-panel">
              <div class="up-item">
                <i class="flaticon-profile"></i>
                <a href="#">Sign</a> In or <a href="#">Create Account</a>
              </div>
              <div class="up-item">
                <div class="shopping-card">
                  <i class="flaticon-bag"></i>
                  <span>0</span>
                </div>
                <a href="#">Shopping Cart</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="main-navbar">
      <div class="container">
        <!-- menu -->
        <ul class="main-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Women</a></li>
          <li><a href="#">Event
            <span class="new">New</span>
          </a></li>
          <li><a href="#">Shoes</a>
            <ul class="sub-menu">
              <li><a href="#">Sneakers</a></li>
              <li><a href="#">Sandals</a></li>
              <li><a href="#">Formal Shoes</a></li>
              <li><a href="#">Boots</a></li>
              <li><a href="#">Flip Flops</a></li>
            </ul>
          </li>
          <li><a href="#">accessoires</a>
            <ul class="sub-menu">
              <li><a href="#">Hats</a></li>
              <li><a href="#">Perfume</a></li>
              <li><a href="#">jewelry</a></li>
              <li><a href="#">Sunglasses</a></li>
              <li><a href="#">Belts</a></li>
            </ul>
          </li>
          <li><a href="#">Blog</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Header section end -->


  <!-- Page info -->
  <div class="page-top-info">
    <div class="container">
      <h4>Your cart</h4>
      <div class="site-pagination">
        <a href="">Home</a> /
        <a href="">Your cart</a>
      </div>
    </div>
  </div>
  <!-- Page info end -->

     <!-- ADD PRODUCT-->
<form id="regForm"  method="POST" action="checkout.php" enctype="multipart/form-data">
  <h1>Ajouter une Commande:</h1>
  <!-- One "tab" for each step in the form: -->
  <div class="tab">Description:
    <p><input placeholder="Adresse 1..." oninput="this.className = ''" name="address1"></p>
    <p><input placeholder="Adresse 2..." oninput="this.className = ''" name="address2"></p>
    <select id="ville"  name="ville"   style="height: 50px;width:870px" required>
                          <option value="choisir ville">choisir ville</option>
                  <option value="tunis">Tunis</option>
                  <option value="Bizerte">Bizerte</option>
                  <option value="Nabeul">Nabeul</option>
                  <option value="Sousse">Sousse</option>
                  <option value="Mounastir">Mounastir</option>
                  <option value="Kélibia">Kélibia</option>
                  <option value="Gabes">Gabes</option>
                  <option value="Touzeur">Touzeur</option>
                  <option value="Ariana">Ariana</option>
                  <option value="Beja">Beja</option>
                  <option value="Jandouba">Jandouba</option>
                  <option value="Ben Arous">Ben Arous</option>
                  <option value="Gafsa">Gafsa</option>
                  <option value="Jandouba">Jandouba</option>
                  <option value="Kairouan">Kairouan</option>
                  <option value="Kasserine">Kasserine</option>
                  <option value="Kébili">Kébili</option>
                  <option value="le Kef">le Kef</option>
                  <option value="Mahdia">Mahdia</option>
                  <option value="Manouba">Manouba</option>
                  <option value="Sfax">Sfax</option>
                  <option value="Sidi">Sidi Bouzid</option>
                  <option value="Siliana">Siliana</option>
                  <option value="Tataouine">Tataouine</option>
                  <option value="Zaghouan">Zaghouan</option>
                          </select>
    <p><input placeholder="zip..." id="zip" oninput="this.className = ''" name="zip"></p>
    <p><input placeholder="phone..." oninput="this.className = ''" name="phone"></p>
  </div>
  <div class="tab">Mode Livraison:
    <select   name="type_livraison"   style="height: 50px" required>
                          <option value="choisir mode de Livraison">choisir mode</option>
                  <option value="Retrait">retrait magasin</option>
                  <option value="livraison">livraison</option>
    </select>

  </div>
  <div class="tab">Quantity:
 <select   name="mode_payement"   style="height: 50px" required>
                          <option value="choisir mode de payement">choisir mode</option>
                  <option value="cash" name="cash">payer comptant</option>
                  <option value="carte" name="carte">payement par carte</option>
    </select>
    <td><input type="submit" name="submit" value="valider commande"></td>
  </div>
    

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1);test_zip();test_ville();telephone()">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
   </form>
   <!-- Footer section -->
  <section class="footer-section">
    <div class="container">
      <div class="footer-logo text-center">
        <a href="index.html"><img src="./img/logo-light.png" alt=""></a>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>About</h2>
            <p>Donec vitae purus nunc. Morbi faucibus erat sit amet congue mattis. Nullam frin-gilla faucibus urna, id dapibus erat iaculis ut. Integer ac sem.</p>
            <img src="img/cards.png" alt="">
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Questions</h2>
            <ul>
              <li><a href="">About Us</a></li>
              <li><a href="">Track Orders</a></li>
              <li><a href="">Returns</a></li>
              <li><a href="">Jobs</a></li>
              <li><a href="">Shipping</a></li>
              <li><a href="">Blog</a></li>
            </ul>
            <ul>
              <li><a href="">Partners</a></li>
              <li><a href="">Bloggers</a></li>
              <li><a href="">Support</a></li>
              <li><a href="">Terms of Use</a></li>
              <li><a href="">Press</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget about-widget">
            <h2>Questions</h2>
            <div class="fw-latest-post-widget">
              <div class="lp-item">
                <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/1.jpg"></div>
                <div class="lp-content">
                  <h6>what shoes to wear</h6>
                  <span>Oct 21, 2018</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
              <div class="lp-item">
                <div class="lp-thumb set-bg" data-setbg="img/blog-thumbs/2.jpg"></div>
                <div class="lp-content">
                  <h6>trends this year</h6>
                  <span>Oct 21, 2018</span>
                  <a href="#" class="readmore">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="footer-widget contact-widget">
            <h2>Questions</h2>
            <div class="con-info">
              <span>C.</span>
              <p>Your Company Ltd </p>
            </div>
            <div class="con-info">
              <span>B.</span>
              <p>1481 Creekside Lane  Avila Beach, CA 93424, P.O. BOX 68 </p>
            </div>
            <div class="con-info">
              <span>T.</span>
              <p>+53 345 7953 32453</p>
            </div>
            <div class="con-info">
              <span>E.</span>
              <p>office@youremail.com</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-links-warp">
      <div class="container">
        <div class="social-links">
          <a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
          <a href="" class="google-plus"><i class="fa fa-google-plus"></i><span>g+plus</span></a>
          <a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
          <a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
          <a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
          <a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
          <a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
        </div>

<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --> 
<p class="text-white text-center mt-5">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      </div>
    </div>
  </section>
  <!-- Footer section end -->



  <!--====== Javascripts & Jquery ======-->
     <script src="js/add.js"></script>  
     <script src="js/checkout.js"></script>  
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
    <script src="js/checkout.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/jquery.zoom.min.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <script src="js/main.js"></script>
  <script>
    function toggle()
    {
      var click=document.getElementById("mastercard");
      if(click.style.display==="none")
      {
        click.style.display="block";
      }
      else{
        click.style.display="none";
      }
    }
  </script>

  </body>
</html>

