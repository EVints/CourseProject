@extends('base')

@section('pageIntro')
@endsection

@section('mainBody')


@foreach ($advert_list as $item)
<table id="adverts" class="adverts">
    <tr>
        <td>Имя пользователя</td>
        <td>{{ $item->user_id }}</td>
    </tr>

    <tr>
        <td>Время сбора</td>
        <td>{{ $item->from }}</td>
    </tr>

    <tr>
        <td>Окончание поездки</td>
        <td>{{ $item->to }}</td>
    </tr>

    <tr>
        <td>Место встречи</td>
        <td>


            <span id="showMap">Ориентировочное место встречи</span>
            <!-- <iframe id="meetMap" width="550" height="400" frameborder="0" style="border:0" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBr47_q9XrjZMqo4tPYRKLR03-Zh2G9Ws8&q={{ $item->getMeetForGoogleLink() }}&zoom=17" allowfullscreen> -->
            </iframe>

        </td>
    </tr>

    <tr>
        <td>Маршрут</td>
        <td>{{ $item->finish }}
            <span id="showMap">Маршрут поездки</span>
            <iframe id="routeMap" width="550" height="400" frameborder="0" style="border:0" referrerpolicy="no-referrer-when-downgrade" src="https://www.google.com/maps/embed/v1/directions?key=AIzaSyBr47_q9XrjZMqo4tPYRKLR03-Zh2G9Ws8&origin=Oslo+Norway&destination=Telemark+Norway&avoid=tolls|highways&mode=bicycling&zoom=8" allowfullscreen>
            </iframe>
        </td>
    </tr>

    <tr>
        <td>Вид поездки</td>
        <td>{{ $item->type }}</td>
    </tr>

    <tr>
        <td>Радиус поездки</td>
        <td>{{ $item->ride_radius }}</td>
    </tr>

    <tr>
        <td>Описание поездки</td>
        <td>{{ $item->description }}</td>
    </tr>





</table>



@endforeach


@endsection