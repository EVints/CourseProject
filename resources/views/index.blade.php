@extends('base')


@section('pageIntro')
<div id="pageintro" class="hoc clear">
<article>
    <h3 class="heading">Совместные велопоездки по Варшаве</h3>
    <p>Born to Ride, Ride to Live</p>
    <footer>
        <ul class="nospace inline pushright">
            <li><a class="btn" href="/registration">Присоединиться</a></li>
            <li><a class="btn inverse" href="/about_us">Узнать больше</a></li>
        </ul>
    </footer>
</article>
</div>
@endsection


@section('mainBody')
<div class="wrapper row3">
        <main class="hoc container clear">

<!-- main body -->
<!-- ################################################################################################ -->
<section id="introblocks">
    <ul class="nospace group btmspace-80">
        <li class="one_third first">
            <figure><a class="imgover" href="journey#table1"><img src="/images/design/IMG_20200804_190304.jpg" alt=""></a>
                <figcaption>
                    <h6 class="heading">Поездка в соляные шахты</h6>
                    <p>Незабываемая поездка к месторождению соляных окаменелостей. Прекрасное место для отдыха всей семьёй</p>
                </figcaption>
            </figure>
        </li>
        <li class="one_third">
            <figure><a class="imgover" href="/journey#table2"><img src="/images/design/IMG_20200712_151907.jpg" alt=""></a>
                <figcaption>
                    <h6 class="heading">Замок 19-го века</h6>
                    <p>Двухдневное путешествие к замку 19-го века. Сложный маршрут по малоизученным тропам</p>
                </figcaption>
            </figure>
        </li>
        <li class="one_third">
            <figure><a class="imgover" href="/journey#table2"><img src="/images/design/IMG_20200807_164117.jpg" alt=""></a>
                <figcaption>
                    <h6 class="heading">Сплав на байдарках</h6>
                    <p>Трёхдневное путешествие к реке со сплавом на байдарках</p>
                </figcaption>
            </figure>
        </li>
    </ul>
</section>
<!-- ################################################################################################ -->
<hr class="btmspace-80">
<!-- ################################################################################################ -->
<section id="overview">
    <div class="sectiontitle">
        <p class="heading underline font-x2">Дорога возникает под ногами идущего</p>
    </div>
    <ul class="nospace group btmspace-80">
        <li class="one_third">
            <article>
                <div class="clear"><a href="#"><i class="fas fa-tape"></i></a>
                    <h6 class="heading">Маршруты</h6>
                </div>
                <p>Мы не ищем лёгких и быстрых маршрутов. Чем сложнее путь - тем ярче награда</p>
            </article>
        </li>
        <li class="one_third">
            <article>
                <div class="clear"><a href="#"><i class="fas fa-table-tennis"></i></a>
                    <h6 class="heading">С нами не соскучишься</h6>
                </div>
                <p>Мы знаем как Вас развлечь и увлечь</p>
            </article>
        </li>
        <li class="one_third">
            <article>
                <div class="clear"><a href="#"><i class="fas fa-battery-full"></i></a>
                    <h6 class="heading">Ваш отдых - наше хобби</h6>
                </div>
                <p>Именно поэтому вы не останетесь равнодушными</p>
            </article>
        </li>
    </ul>
    <footer class="center"><a class="btn" href="/journey">Записаться</a></footer>
</section>
<!-- ################################################################################################ -->
<!-- / main body -->
<div class="clear"></div>
        </main>
    </div>

@endsection




@section('pageInformation')


    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row2">
        <div class="hoc container clear">
            <!-- ################################################################################################ -->
            <div class="sectiontitle">
                <p class="heading underline font-x2">Наша команда профессиональных гидов</p>
            </div>
            <ul class="nospace group team">
                <li class="one_quarter first">
                    <figure><a class="imgover"><img src="/images/default/ava_f.jpeg" alt=""></a>
                        <figcaption><strong>Kateryna</strong> <em>Главный экскурсовод</em></figcaption>
                    </figure>
                </li>
                <li class="one_quarter">
                    <figure><a class="imgover"><img src="/images/default/ava_m.jpeg" alt=""></a>
                        <figcaption><strong>Andrey</strong> <em>Сервисный организатор</em></figcaption>
                    </figure>
                </li>
                <li class="one_quarter">
                    <figure><a class="imgover"><img src="/images/default/ava_f.jpeg" alt=""></a>
                        <figcaption><strong>Anica</strong> <em>Сертифицированный гид</em></figcaption>
                    </figure>
                </li>
                <li class="one_quarter">
                    <figure><a class="imgover"><img src="/images/default/ava_m.jpeg" alt=""></a>
                        <figcaption><strong>Mikey</strong> <em>Сертифицированный гид</em></figcaption>
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
                <p class="nospace font-xs"></p>
                <p class="heading underline font-x2">На пути к нашим победам не хватает только тебя!</p>
            </div>
            <ul id="stats" class="nospace group">
                <li><i class="fas fa-bicycle"></i>
                    <p><a href="#">54</a></p>
                    <p>Столько вилосипедов есть в нашем парке</p>
                </li>
                <li><i class="fas fa-smile"></i>
                    <p><a href="#">1512</a></p>
                    <p>Столько человек уже полюбили велосипеды</p>
                </li>
                <li><i class="fas fa-fast-forward"></i>
                    <p><a href="#">9745</a></p>
                    <p>Столько километров мы преодалели вместе с вами</p>
                </li>
                <li><i class="fas fa-heartbeat"></i>
                    <p><a href="#">412</a></p>
                    <p>Столько неравнолушных сердец уже сейчас в заявках на поздки</p>
                </li>
            </ul>
            <!-- ################################################################################################ -->
        </section>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper bgded" style="background-image:url('/images/design/PANO_20210620_095616.jpg');">
        <section id="testimonials" class="hoc clear">
            <!-- ################################################################################################ -->
            <div class="one_half overlay">
                <ul class="nospace">
                    <li>
                        <blockquote>Все маршруты, которыми мы пользуемся в наших поездках являются результатом авторской работы целой команды проффесионалов. Мы не ищем лёгких и коротких путей. Всё, что клиенты видят на наших маршрутах - недоступно 90% обывателей</blockquote>
                        <figure class="clear"><img class="circle" src="/images/demo/60x60.png" alt="">
                            <figcaption>
                                <h6 class="heading">Anica</h6>
                                <em>Cертифицированный гид</em>
                            </figcaption>
                        </figure>
                    </li>
                    <li>
                        <footer><a class="btn inverse" href="/about_us">View More</a></footer>
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

    @endsection