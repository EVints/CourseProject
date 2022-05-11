@extends('base')

@section('pageIntro')
@endsection

@section('mainBody')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNlu_RBmMgRYmm6D2FicTgl6aMA43tVU4&callback=initMap&v=weekly" defer></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


<h2>Заявка на поездку</h2>
<form method="post" action="/advert">
    @csrf

    <ul>

        <!-- #############  User name   ######################## -->
        <li>
            <label for="userName">Имя пользователя</label>
            <input type="text" name="user_name" id="userName" value="Имя пользователя" required>
        </li>



        <!-- ############   Travel time   ##################### -->
        <li>
            <label for="time_from">Время сбора</label>
            <input type="datetime-local" name="time_from" id="time_from" required>
        </li>

        <li>
            <label for="time_to">Окончание поездки</label>
            <input type="datetime-local" name="time_to" id="time_to" required>
        </li>



        <!-- ############   Phone   ##################### -->
        <li>
            <label for="tel">Контактный телефон</label>
            <input type="tel" name="tel" id="tel" required>
        </li>




        <!-- ############   Description   ##################### -->
        <li>
            <textarea name="trip_description" id="trip_description" cols="50" rows="4" required placeholder="Описание поездки"></textarea>
        </li>




        <!-- ############   Google Maps  ##################### -->
        <li>
            <label for="point_meet">Маршрут поездки</label>
            <div id="container">
            <p>Total Distance: <span id="total"></span></p>
                <div class="route_map" id="route_map"></div>
                <!-- <div id="sidebar">
                    <p>Total Distance: <span id="total"></span></p>
                    <div id="panel"></div>
                </div> -->
            </div>
            <input type="hidden" name="track" id="track" value="">
        </li>



        <!-- ############   Trip Type  ##################### -->

        <li>
            <label for="trip_type">Вид поездки</label>
            <select name="trip_type" id="trip_type">
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
    let track = document.getElementById("track");
    let res = {};

    let dir = {};

    function initMap() {
        const map = new google.maps.Map(document.getElementById("route_map"), {
            zoom: 4,
            center: {
                lat: 52.2420385,
                lng: 21.0288443
            }, // Polland
        });
        const directionsService = new google.maps.DirectionsService();
        const directionsRenderer = new google.maps.DirectionsRenderer({
            draggable: true,
            map,
            panel: document.getElementById("panel"),
        });

        directionsRenderer.addListener("directions_changed", () => {
            const directions = directionsRenderer.getDirections();
            track.value = JSON.stringify(directions);
            console.log(track.value);


            if (directions) {
                computeTotalDistance(directions);
            }

        });
        displayRoute(
            "plac Zamkowy 4, 00-277 Warszawa, Польша",
            "Pałac Kultury i Nauki, plac Defilad 1, 00-901 Warszawa, Польша",
            directionsService,
            directionsRenderer
        );
    }

    function displayRoute(origin, destination, service, display) {
        service
            .route({
                origin: origin,
                destination: destination,
                waypoints: [
                    // { location: "Adelaide, SA" },
                    // { location: "Broken Hill, NSW" },
                ],
                travelMode: "BICYCLING",
                avoidTolls: true,
            })
            .then((result) => {
                display.setDirections(result);
            })
            .catch((e) => {
                alert("Could not display directions due to: " + e);
            });
    }

    function computeTotalDistance(result) {
        let total = 0;
        const myroute = result.routes[0];

        if (!myroute) {
            return;
        }

        for (let i = 0; i < myroute.legs.length; i++) {
            total += myroute.legs[i].distance.value;
        }

        total = total / 1000;
        document.getElementById("total").innerHTML = total + " km";
    }

    window.initMap = initMap;
</script>




@endsection