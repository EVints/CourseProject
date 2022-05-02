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
    <title>Sislaf</title>
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
                        <li><a href="index.html"><i class="fas fa-home"></i></a></li>
                        <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>
                        @if(Session::has('user-session-key'))
                        <li><a href="/profile" title="Profile {!!Session::get('user-session-key')->name!!}"><i class="far fa-life-ring"></i></a></li>
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
                    <h1><a href="/">Sislaf</a></h1>
                    <!-- ################################################################################################ -->
                </div>
                <nav id="mainav" class="fl_right">
                    <!-- ################################################################################################ -->
                    <ul class="clear">
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a class="drop" href="#">Pages</a>
                            <ul>
                                <li><a href="pages/gallery.html">Gallery</a></li>
                                <li><a href="pages/full-width.html">Full Width</a></li>
                                <li><a href="pages/sidebar-left.html">Sidebar Left</a></li>
                                <li><a href="pages/sidebar-right.html">Sidebar Right</a></li>
                                <li><a href="pages/basic-grid.html">Basic Grid</a></li>
                                <li><a href="pages/font-icons.html">Font Icons</a></li>
                            </ul>
                        </li>
                        <li><a class="drop" href="#">Dropdown</a>
                            <ul>
                                <li><a href="#">Level 2</a></li>
                                <li><a class="drop" href="#">Level 2 + Drop</a>
                                    <ul>
                                        <li><a href="#">Level 3</a></li>
                                        <li><a href="#">Level 3</a></li>
                                        <li><a href="#">Level 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Level 2</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Link Text</a></li>
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
            @section('pageIntro')
            <article>
                <h3 class="heading">Finibus dictum lobortis</h3>
                <p>Libero sed ullamcorper nibh dignissim et curabitur cursus scelerisque metus sit amet sodales justo auctor sit amet proin quis lacus non nisi.</p>
                <footer>
                    <ul class="nospace inline pushright">
                        <li><a class="btn" href="#">Pharetra etiam</a></li>
                        <li><a class="btn inverse" href="#">Sagittis massa</a></li>
                    </ul>
                </footer>
            </article>
            @endsection
            <!-- ################################################################################################ -->
        </div>
        <!-- ################################################################################################ -->
    </div>
    <!-- End Top Background Image Wrapper -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <main class="hoc container clear">

            @yield('mainBody')


            <div class="clear"></div>
        </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay" style="background-image:url('/images/demo/backgrounds/02.png');">
        <section id="splitfifty" class="hoc container clear">
            <div class="sectiontitle">
                <p class="nospace font-xs">Magna ultrices eleifend suspendisse</p>
                <p class="heading underline font-x2">Posuere vivamus semper</p>
            </div>
            <div class="bgded clear" style="background-image:url('/images/demo/backgrounds/03.png');">
                <!-- ################################################################################################ -->
                <article>
                    <h6 class="heading font-x2">Tellus nec mollis sem</h6>
                    <p>lacus dui pretium non elit ac interdum ullamcorper purus ut ultricies ullamcorper convallis morbi bibendum sapien in odio finibus sit amet lacinia dolor dapibus in nisl erat consectetur eu blandit.</p>
                    <footer><a class="btn" href="#">Fermentum felis</a></footer>
                </article>
                <!-- ################################################################################################ -->
            </div>
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <div class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="nospace font-xs">Id elementum lobortis justo donec</p>
                <p class="heading underline font-x2">Rutrum sed ligula viverra</p>
            </div>
            <ul class="nospace group team">
                <li class="one_quarter first">
                    <figure><a class="imgover" href="#"><img src="/images/demo/300x300.png" alt=""></a>
                        <figcaption><strong>A. Doe</strong> <em>Job Title Here</em></figcaption>
                    </figure>
                </li>
                <li class="one_quarter">
                    <figure><a class="imgover" href="#"><img src="/images/demo/300x300.png" alt=""></a>
                        <figcaption><strong>B. Doe</strong> <em>Job Title Here</em></figcaption>
                    </figure>
                </li>
                <li class="one_quarter">
                    <figure><a class="imgover" href="#"><img src="/images/demo/300x300.png" alt=""></a>
                        <figcaption><strong>C. Doe</strong> <em>Job Title Here</em></figcaption>
                    </figure>
                </li>
                <li class="one_quarter">
                    <figure><a class="imgover" href="#"><img src="/images/demo/300x300.png" alt=""></a>
                        <figcaption><strong>D. Doe</strong> <em>Job Title Here</em></figcaption>
                    </figure>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="nospace font-xs">Nisl vitae mauris ipsum eget</p>
                <p class="heading underline font-x2">Tincidunt elit velit auctor</p>
            </div>
            <ul id="stats" class="nospace group">
                <li><i class="fab fa-sticker-mule"></i>
                    <p><a href="#">123</a></p>
                    <p>Phasellus tincidunt</p>
                </li>
                <li><i class="fab fa-pied-piper-alt"></i>
                    <p><a href="#">1234</a></p>
                    <p>Egestas maximus</p>
                </li>
                <li><i class="fas fa-globe"></i>
                    <p><a href="#">12345</a></p>
                    <p>Aliquam neque</p>
                </li>
                <li><i class="fas fa-ribbon"></i>
                    <p><a href="#">6789</a></p>
                    <p>Curabitur sodales</p>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper bgded" style="background-image:url('/images/demo/backgrounds/04.png');">
        <section id="testimonials" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="one_half overlay">
                <ul class="nospace">
                    <li>
                        <blockquote>suscipit tellus non ligula mattis quis iaculis nunc lobortis vestibulum vehicula bibendum malesuada curabitur quis interdum mi vestibulum consectetur leo ut viverra sagittis sapien orci rhoncus nisi.</blockquote>
                        <figure class="clear"><img class="circle" src="/images/demo/60x60.png" alt="">
                            <figcaption>
                                <h6 class="heading">A. Doe</h6>
                                <em>CEO / Odio tristique quis</em>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <footer><a class="btn inverse" href="#">View More</a></footer>
                    </li>
                </ul>
            </div>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
        <section class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="nospace font-xs">Luctus ligula lacus non odio nunc</p>
                <p class="heading underline font-x2">Faucibus libero risus</p>
            </div>
            <ul id="latest" class="nospace group">
                <li class="one_third first">
                    <article><a class="imgover" href="#"><img src="/images/demo/348x261.png" alt=""></a>
                        <ul class="nospace meta group">
                            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                            <li><i class="far fa-clock"></i>
                                <time datetime="2045-04-06T08:15+00:00">06 Apr 2045</time>
                            </li>
                        </ul>
                        <div class="excerpt">
                            <h6 class="heading">Maecenas eu posuere velit eget ultricies enim</h6>
                            <p>Sed nibh enim consequat ac tellus tempus interdum euismod ligula quisque quam nisl aliquet et facilisis eget.</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article><a class="imgover" href="#"><img src="/images/demo/348x261.png" alt=""></a>
                        <ul class="nospace meta group">
                            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                            <li><i class="far fa-clock"></i>
                                <time datetime="2045-04-05T08:15+00:00">05 Apr 2045</time>
                            </li>
                        </ul>
                        <div class="excerpt">
                            <h6 class="heading">Condimentum quis arcu nullam id purus tortor</h6>
                            <p>Molestie vulputate a luctus nulla nulla eleifend justo in libero feugiat congue donec sit amet pharetra velit.</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </div>
                    </article>
                </li>
                <li class="one_third">
                    <article><a class="imgover" href="#"><img src="/images/demo/348x261.png" alt=""></a>
                        <ul class="nospace meta group">
                            <li><i class="fas fa-user"></i> <a href="#">Admin</a></li>
                            <li><i class="far fa-clock"></i>
                                <time datetime="2045-04-04T08:15+00:00">04 Apr 2045</time>
                            </li>
                        </ul>
                        <div class="excerpt">
                            <h6 class="heading">Nulla tempor faucibus tortor nulla pretium</h6>
                            <p>Cras auctor commodo metus sed pede in vitae sapien phasellus in magna sed dictum libero et nisi proin porta.</p>
                            <footer><a class="btn" href="#">Read More</a></footer>
                        </div>
                    </article>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="bgded overlay row4" style="background-image:url('/images/demo/backgrounds/05.png');">
        <footer id="footer" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="center btmspace-50">
                <h6 class="heading">Sislaf</h6>
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
            <hr class="btmspace-50">
            <!-- ################################################################################################ -->
            <div class="group btmspace-50">
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
                <!-- ################################################################################################ -->
            </div>
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