@extends('base')

@section('pageIntro')


<div id="pageintro" class="hoc clear">
<article>
    <h3 class="heading">Совместные велопоездки по Варшаве</h3>
    <p>Born to Ride, Ride to Live</p>
    <footer>
        <ul class="nospace inline pushright">
            <li><a class="btn" href="/registration">Регистрация</a></li>
            <li><a class="btn inverse" href="/advert">Частные поездки</a></li>
        </ul>
    </footer>
</article>
</div>



@endsection

@section('mainBody')

<div class="bgded overlay">
        <section id="splitfifty" class="hoc container clear">
            <div class="sectiontitle">
                <p class="nospace font-xs">Bike as life style</p>
                <p class="heading underline font-x2">Поездки с нами станут для Вас настояшим приключением</p>
            </div>
            <div class="bgded clear" style="background-image:url('/images/design/20200611_160420.jpg'); background-position: center;">
                <!-- ################################################################################################ -->
                <article>
                    <h6 class="heading font-x2">Мы те, кто довезёт Вас на край света и обратно</h6>
                    <p>География наших поездок - это Варшава и её окрестности. Мы тщательно прорабатываем маршруты, учитываем все пожелания участников поездки. Будем рады видет Вас в нашей команде</p>
                    <footer><a class="btn" href="/journey">Записаться на поздку</a></footer>
                </article>
                <!-- ################################################################################################ -->
            </div>
        </section>
    </div>


@endsection

@section('[pageInformation]')
@endsection