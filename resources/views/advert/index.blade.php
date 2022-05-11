@extends('base')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNlu_RBmMgRYmm6D2FicTgl6aMA43tVU4&v=weekly" defer></script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

@section('pageIntro')
@endsection

@section('mainBody')


@foreach ($advert_list as $item)
<table id="adverts" class="adverts">
    <tr>
        <td>Имя пользователя</td>
        
        <td>{{ $item->user_name}}</td>
    </tr>

    <tr>
        <td>Время сбора</td>
        <td>{{ $item->time_from }}</td>
    </tr>

    <tr>
        <td>Окончание поездки</td>
        <td>{{ $item->time_to }}</td>
    </tr>

    <tr>
        <td>Маршрут</td>
        <td>
        <div id="container">
        <p>Total Distance: <span id="total{{ $item->id }}"></span></p>
                <div class="route_map" id="route_map_{{ $item->id }}"></div>
                <!-- <div id="sidebar">
                    <p>Total Distance: <span id="total"></span></p>
                    <div id="panel{!! $item->id !!}"></div>
                </div> -->
            </div>
            <button id="show_map{{ $item->id }}">Show map</button>
        </td>
    </tr>

    <tr>
        <td>Вид поездки</td>
        <td>{{ $item->trip_type }}</td>
    </tr>


    <tr>
        <td>Описание поездки</td>
        <td>{{ $item->trip_description }}</td>
    </tr>

</table>

<script>

    let show_map{!! $item->id !!} = document.getElementById("show_map{!! $item->id !!}");

    show_map{!! $item->id !!}.addEventListener( "click" , () => initMap({!! $item->id !!}, {!! $item->track !!}));
    
</script>
@endforeach


@endsection




<script>




    function initMap(itemId, json) {
        const map = new google.maps.Map(document.getElementById("route_map_" + itemId), {
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
            panel: document.getElementById("panel" + itemId),
        });



        directionsRenderer.directions = "";
        

        directionsRenderer.addListener("directions_changed", () => {
            const directions = directionsRenderer.getDirections();

            if (directions) {
                computeTotalDistance(directions, itemId);
            }

        });

        directionsRenderer.directions.geocoded_waypoints = json.geocoded_waypoints;
        displayRoute(
            json.routes[0].legs[0].start_address,
            json.routes[0].legs[0].end_address,
            directionsService,
            directionsRenderer,
            json
        );
    }

    function displayRoute(origin, destination, service, display, json) {

        let points = [];

        for(i = 0; i < json.request.waypoints.length; i++) {

            points.push({location: json.request.waypoints[i].location})
        }
        
        service
            .route({
                origin: origin,
                destination: destination,
                waypoints: points,
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

    function computeTotalDistance(result, itemId) {
        let total = 0;
        const myroute = result.routes[0];

        if (!myroute) {
            return;
        }

        for (let i = 0; i < myroute.legs.length; i++) {
            total += myroute.legs[i].distance.value;
        }

        total = total / 1000;
        document.getElementById("total" + itemId).innerHTML = total + " km";
    }

    window.initMap = initMap;

</script> 