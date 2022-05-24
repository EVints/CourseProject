@extends('base')

@section('pageIntro')
@endsection

@section('mainBody')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNlu_RBmMgRYmm6D2FicTgl6aMA43tVU4&language=pl&callback=initMap&av=weekly" defer></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>


<div class="wrapper row3">
    <main class="hoc container clear">

        <h1>Заявка на поездку</h1>
        <form method="post" action="/advert" id="create_advert">
            @csrf

            <ul id="advert_ul">
                <!-- #############  User name   ######################## -->
                <li>
                    @if(Session::has('user_session_key'))
                    <input type="text" name="user_name" id="user_name" placeholder="Имя пользователя" value="{!!Session::get('user_session_key')->name!!}" readonly="" disabled>
                    @else
                    <input type="text" name="user_name" id="user_name" placeholder="Имя пользователя" required disabled>
                    @endif
                </li>


                <!-- ############   Phone   ##################### -->
                <li>
                    <input type="tel" name="user_phone" id="user_phone" placeholder="Контактный телефон" required>
                </li>


                <!-- ############   Travel time   ##################### -->
                <li>
                    <label for="time_from">Время сбора</label>
                    <input type="datetime-local" name="time_from" id="time_from" required>
                </li>

                <li>
                    <label for="start_address">Точка сбора</label>
                    <input type="text" name="start_address" id="start_address" readonly="" required>
                </li>


                <li>
                    <input type="text" name="time_to" id="time_to" value="Окончание поездки" readonly="" required>
                </li>

                <li>
                    <input type="text" name="end_address" id="end_address" value="Точка прибытия" readonly="" required>
                </li>


                <!-- ############   Description   ##################### -->
                <li>
                    <textarea name="trip_description" id="trip_description" required placeholder="Описание поездки"></textarea>
                </li>

                <li>
                    <input type="number" placeholder="Количество участников" name="participants_count" id="participants_count" required>
                </li>

                <li>
                    <input type="submit" value="Оставить заявку">
                </li>
            </ul>

            <!-- ############   Google Maps  ##################### -->
            <div id="container">
                <p>Total Distance: <span id="distance"></span></p>
                <div class="route_map" id="route_map"></div>
                <!-- <div id="sidebar">
                    <p>Total Distance: <span id="total"></span></p>
                    <div id="panel"></div>
                </div> -->
                <input type="hidden" name="track" id="track" value="">
                <input type="hidden" name="total_distance" id="total_distance" value="">
            </div>

        </form>

        <div class="clear"></div>
    </main>
</div>



<script>
    let track = document.getElementById("track"),
        time_from = document.getElementById("time_from"),
        time_to = document.getElementById("time_to"),
        start_address = document.getElementById("start_address"),
        end_address = document.getElementById("end_address"),
        tripTime = 0;

    let res = {};
    let dir = {};


    function calcTripTimeEnd(date, sec) {
        if (!date) {
            return;
        }
        date = new Date(date);


        if (date < new Date) {
            alert("Вы не можете кататьcя в прошлом!");
            time_from.value = "0";
            return;
        }
        date.setSeconds(date.getSeconds() + sec);
        time_to.value = date;
    }


    time_from.addEventListener("change", () => calcTripTimeEnd(time_from.value, tripTime));


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

            start_address.value = directions.routes[0].legs[0].start_address;
            end_address.value = directions.routes[0].legs[0].end_address;
            tripTime = directions.routes[0].legs[0].duration.value;

            calcTripTimeEnd(time_from.value, tripTime);

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
        document.getElementById("distance").innerHTML = total + " km";
        document.getElementById("total_distance").value = total;

    }

    window.initMap = initMap;
</script>




@endsection