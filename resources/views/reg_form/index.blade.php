<!DOCTYPE html>
<!--
Template Name: Sislaf
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->

<head>
  <title>Velopokatuszki</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
  <link rel="stylesheet" href="/layout/styles/pokatuszkiStyle.css">

</head>


<body id="top">
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- Top Background Image Wrapper -->
  <div class="bgded overlay" style="background-image:url('/images/demo/backgrounds/01.png');">
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
      <div id="topbar" class="hoc clear">
        <div class="fl_left">
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><i class="fas fa-phone rgtspace-5"></i> +00 (123) 456 7890</li>
            <li><i class="far fa-envelope rgtspace-5"></i> info@domain.com</li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
        <div class="fl_right">
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><a href="/"><i class="fas fa-home"></i></a></li>
            <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
            @if(Session::has('user-session-key'))
            <li><a href="/profile" title="Profile {!!Session::get('user-session-key')->name!!}"><i class="fas fa-bicycle"></i></a></li>
            @else
            <li><a href="/login" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
            <li><a href="/registration" title="Sign Up"><i class="fas fa-edit"></i></a></li>
            @endif
            <li id="searchform">
              <div>
                <form action="#" method="post">
                  <fieldset>
                    <legend>Quick Search:</legend>
                    <input type="text" placeholder="Enter search term&hellip;">
                    <button type="submit"><i class="fas fa-search"></i></button>
                  </fieldset>
                </form>
              </div>
            </li>
          </ul>
          <!-- ################################################################################################ -->
        </div>
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
      <header id="header" class="hoc clear">
        <div id="logo" class="fl_left">
          <!-- ################################################################################################ -->
          <h1><a href="/">Velopokatuszki</a></h1>
          <!-- ################################################################################################ -->
        </div>
        <nav id="mainav" class="fl_right">
          <!-- ################################################################################################ -->
          <ul class="clear">
            <li class="active"><a href="/">Home</a></li>
            <li><a class="drop" href="#">Pages</a>
              <ul>
                <li><a href="gallery">Gallery</a></li>
                <li><a href="pages/full-width.html">Full Width</a></li>
                <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                <li><a href="pages/font-icons.html">Font Icons</a></li>
              </ul>
            </li>
            <li><a class="drop" href="#">Adverts</a>
              <ul>
                <li><a href="/advert">Show trip</a></li>
                <li><a href="/advert/create">Create trip</a></li>
              </ul>
            </li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Link Text</a></li>
            <li><a href="#">Link Text</a></li>
          </ul>
          <!-- ################################################################################################ -->
        </nav>
      </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->

    <div id="pageintro" class="hoc clear">
      <!-- ################################################################################################ -->


      <article>
        <h3 class="heading">Sign in<br>Velopokatuszki</h3>

        <div>
          <form method="post">
            @csrf

            <label for="email">User email</label>
            <p><input class="btmspace-15" type="text" name="email"></p>

            <label for="password">Password</label>
            <p><input class="btmspace-15" type="password" name="password"></p>
            <p class="login_error">{!!$errors->first()!!}</p>
            <p><input type="submit" value="Sign in"></p>
          </form>
        </div>


        <p>Libero sed ullamcorper nibh dignissim et curabitur cursus scelerisque metus sit amet sodales justo auctor sit amet proin quis lacus non nisi.</p>
        <footer>
          <ul class="nospace inline pushright">
            <li><a class="btn" href="#">Pharetra etiam</a></li>
            <li><a class="btn inverse" href="#">Sagittis massa</a></li>
          </ul>
        </footer>
      </article>



      <!-- ################################################################################################ -->
    </div>


  </div>

  <div class="bgded overlay row4" style="background-image:url('/images/demo/backgrounds/05.png');">
    <footer id="footer" class="hoc clear">
      <!-- ################################################################################################ -->


      <!-- ################################################################################################ -->

      <div id="ctdetails" class="clear">
        <ul class="nospace clear">
          <li class="one_quarter first">
            <div class="block clear"><a href="#"><i class="fas fa-phone"></i></a> <span><strong>Give us a call:</strong> +00 (123) 456 7890</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="#"><i class="fas fa-envelope"></i></a> <span><strong>Send us a mail:</strong> support@domain.com</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="#"><i class="fas fa-clock"></i></a> <span><strong> Monday - Saturday:</strong> 08.00am - 18.00pm</span></div>
          </li>
          <li class="one_quarter">
            <div class="block clear"><a href="#"><i class="fas fa-map-marker-alt"></i></a> <span><strong>Come visit us:</strong> Directions to <a href="#">our location</a></span></div>
          </li>
        </ul>
      </div>
      <!-- ################################################################################################ -->
    </footer>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row5">
    <div id="copyright" class="hoc clear">
      <!-- ################################################################################################ -->
      <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
      <p class="fl_right">Template by <a target="_blank" href="https://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <a id="backtotop" href="#top"><i class="fas fa-chevron-up"></i></a>
  <!-- JAVASCRIPTS -->
  <script src="/layout/scripts/jquery.min.js"></script>
  <script src="/layout/scripts/jquery.backtotop.js"></script>
  <script src="/layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>