<!DOCTYPE html>

<html lang="en">

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
    <div class="bgded overlay" style="background-image:url('/images/design/IMG_20210405_110004.jpg');">
        <!-- ################################################################################################ -->
        <div class="wrapper row0">
            <div id="topbar" class="hoc clear">
                <div class="fl_left">
                    <!-- ################################################################################################ -->
                    <ul class="nospace">
                        <li><i class="fas fa-phone rgtspace-5"></i>+00 (123) 456 7890</li>
                        <li><i class="far fa-envelope rgtspace-5"></i> pokatuszki@gmail.com</li>
                    </ul>
                    <!-- ################################################################################################ -->
                </div>
                <div class="fl_right">
                    <!-- ################################################################################################ -->
                    <ul class="nospace">
                        <li><a href="/"><i class="fas fa-home"></i></a></li>
                        @if(Session::has('user_session_key'))
                        <li><a href="/profile" title="Profile {!!Session::get('user_session_key')->name!!}"><i class="fas fa-bicycle"></i></a></li>
                        <li><a href="/login/logout" title="Log out"><i class="fas fa-sign-out-alt"></i></a></li>
                        @else
                        <li><a href="/login" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
                        <li><a href="/registration" title="Sign Up"><i class="fas fa-edit"></i></a></li>
                        @endif
                        <!-- <li id="searchform">
                            <div>
                                <form action="#" method="post">
                                    <fieldset>
                                        <legend>Quick Search:</legend>
                                        <input type="text" placeholder="Enter search term&hellip;">              Поисковик
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </fieldset>
                                </form>
                            </div>
                        </li> -->
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
                        <li><a href="/">Home</a></li>
                        <li><a href="/gallery">Gallery</a></li>
                        <li><a href="/journey">Journey</a></li>

                        <!-- <li><a class="drop" href="#">Pages</a>
                            <ul>
                                <li><a href="gallery">Gallery</a></li>
                                <li><a href="pages/full-width.html">Full Width</a></li>
                                <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                                <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                                <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                                <li><a href="pages/font-icons.html">Font Icons</a></li>
                            </ul>
                        </li> -->
                        <li><a class="drop" href="#">Adverts</a>
                            <ul>
                                <li><a href="/advert">Show trip</a></li>
                                <li><a href="/advert/create">Create trip</a></li>
                            </ul>
                        </li>
                        <li><a href="/about_us">About Us</a></li>
                        <!-- <li><a href="#">Link Text</a></li>
                        <li><a href="#">Link Text</a></li> -->
                    </ul>
                    <!-- ################################################################################################ -->
                </nav>
            </header>
        </div>
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->
        <!-- ################################################################################################ -->

       
            @yield('pageIntro')


        <!-- ################################################################################################ -->
    </div>
    <!-- End Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->



            @yield('mainBody')

    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
   

            @yield('pageInformation')


    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay row4" style="background-image:url('/images/design/PANO_20200803_100305.jpg');">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="center btmspace-50">
                <h6 class="heading">Мы в соцсетях</h6>
                <ul class="faico clear">
                    <li><a class="faicon-dribble" href="#"><i class="fab fa-dribbble"></i></a></li>
                    <li><a class="faicon-facebook" href="#"><i class="fab fa-facebook"></i></a></li>
                    <li><a class="faicon-google-plus" href="#"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a class="faicon-linkedin" href="#"><i class="fab fa-linkedin"></i></a></li>
                    <li><a class="faicon-twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a class="faicon-vk" href="#"><i class="fab fa-vk"></i></a></li>
                </ul>
                <p class="nospace">Pellentesque ante integer mollis risus vitae condimentum vulputate elit.</p>
            </div>
            <!-- ################################################################################################ -->
            <!-- <hr class="btmspace-50"> -->
            <!-- ################################################################################################ -->
            <!-- <div class="group btmspace-50">
                <div class="one_quarter first">
                    <h6 class="heading">Erat adipiscing metus</h6>
                    <p class="nospace btmspace-15">Mi etiam ac enim quis risus hendrerit ullamcorper nam faucibus lectus eget.</p>
                    <form method="post" action="#">
                        <fieldset>
                            <legend>Newsletter:</legend>
                            <input class="btmspace-15" type="text" value="" placeholder="Name">
                            <input class="btmspace-15" type="text" value="" placeholder="Email">
                            <button type="submit" value="submit">Submit</button>
                        </fieldset>
                    </form>
                </div>
                <div class="one_quarter">
                    <h6 class="heading">Auctor tellus diam</h6>
                    <ul class="nospace linklist">
                        <li>
                            <article>
                                <p class="nospace btmspace-10"><a href="#">Mauris nam odio dui vestibulum a molestie ac pulvinar a tellus donec nisi dui.</a></p>
                                <time class="block font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
                            </article>
                        </li>
                        <li>
                            <article>
                                <p class="nospace btmspace-10"><a href="#">Mattis ipsum ut leo ut elementum odio sed tellus quisque malesuada bibendum.</a></p>
                                <time class="block font-xs" datetime="2045-04-05">Thursday, 5<sup>th</sup> April 2045</time>
                            </article>
                        </li>
                    </ul>
                </div>
                <div class="one_quarter">
                    <h6 class="heading">Laoreet non sodales</h6>
                    <ul class="nospace linklist">
                        <li><a href="#">Amet blandit non quam quisque</a></li>
                        <li><a href="#">Cursus faucibus nulla in mauris</a></li>
                        <li><a href="#">Libero interdum quis molestie</a></li>
                        <li><a href="#">Ut convallis non felis mauris</a></li>
                        <li><a href="#">Volutpat consequat nibh aenean</a></li>
                    </ul>
                </div>
                <div class="one_quarter">
                    <h6 class="heading">Aliquam mollis tortor</h6>
                    <ul class="nospace clear latestimg">
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                        <li><a class="imgover" href="#"><img src="/images/demo/100x100.png" alt=""></a></li>
                    </ul>
                </div>
                ################################################################################################
            </div> -->
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
            <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="http://pokatuszki.ru">Pokatuszki</a></p>
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