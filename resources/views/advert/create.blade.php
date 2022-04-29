@extends('base')

@section('pageIntro')
@endsection

@section('mainBody')

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBr47_q9XrjZMqo4tPYRKLR03-Zh2G9Ws8"></script>
<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
<!-- <style type="text/css">
    #map_meet {
        width: 100%;
        height: 480px;
    }
</style> -->

<h2>Заявка на поездку</h2>
<form method="post" action="/advert">
    @csrf

    <ul>
        <li>
            <label for="userName">Имя пользователя</label>
            <input type="text" name="user_name" id="" disabled value="UserName">
        </li>

        <li>
            <label for="from">Время сбора</label>
            <input type="datetime-local" name="from" id="">
        </li>

        <li>
            <label for="to">Окончание поездки</label>
            <input type="datetime-local" name="to" id="">
        </li>

        <li>
            <label for="point_meet">Место встречи</label>
            <div id="map_meet" style="width: 500px; height: 300px;">
            </div>
            <input type="hidden" name="point_meet" id="point_meet" value="">
        </li>

        <li>
            <label for="point_end">Место окончания поездки</label>
            <input type="text" name="point_end" id="">
        </li>

        <li>
            <label for="type">Вид поездки</label>
            <select name="type" id="">
                <option value="1">Лёгкая прогулка</option>
                <option value="2">Прогулка с Гидом</option>
                <option value="3">Заезд на время</option>
            </select>
        </li>


        <li>
            <input type="submit" value="Оставить заявку">
        </li>

    </ul>
</form>







<script>
    // Get element references
    // var confirmBtn = document.getElementById('confirmPosition');
    // var onClickPositionView = document.getElementById('onClickPositionView');
    var point_meet = document.getElementById('point_meet');
    var map_meet = document.getElementById('map_meet');

    // Initialize LocationPicker plugin
    var lp = new locationPicker(map_meet, {
        setCurrentPosition: true, // You can omit this, defaults to true
        lat: 55.751244,
        lng: 37.618423
    }, {
        zoom: 15 // You can set any google map options here, zoom defaults to 15
    });

    // Listen to button onclick event
    // confirmBtn.onclick = function() {
    //     // Get current location and show it in HTML
    //     var location = lp.getMarkerPosition();
    //     onClickPositionView.innerHTML = 'The chosen location is ' + location.lat + ',' + location.lng;
    // };

    // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
    google.maps.event.addListener(lp.map, 'idle', function(event) {
        // Get current location and show it in HTML
        var location = lp.getMarkerPosition();
        point_meet.value = location.lat + ',' + location.lng;
    });
</script>


@endsection