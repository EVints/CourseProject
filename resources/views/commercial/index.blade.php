@extends('base')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNlu_RBmMgRYmm6D2FicTgl6aMA43tVU4&language=pl&v=weekly" defer></script>

<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

@section('pageIntro')
@endsection

@section('mainBody')



<div class="wrapper row3">
<h2>Организованные путешествия</h2>

@if(Session::has('user_session_key'))
@if(Session::get('user_session_key')->super_user)
<a href="/journey/admin/create">Перейти на страницу создания заявки</a>
@endif
@endif
    <main class="hoc container clear">
    
        <div class="show_adverts">
        @foreach ($commercial_list as $item)
        <a name="table{{ $item->id }}"></a>
        <table id="" class="adverts">
            <tbody>
                <tr>
                    <td><b>Организатор поездки</b></td>
                    <td class="organizer"><b>{{ $item->name }} </b><img src="{{ $item->user_avatar }}" alt="Avatar" ></td>
                </tr>
                
                <tr>
                    <td>Телефон для связи</td>
                    <td>{{ $item->user_phone }}</td>
                </tr>

                <tr>
                    <td>Время сбора</td>
                    <td>{{ $item->time_from }}</td>
                </tr>

                <tr>
                    <td>Место сбора</td>
                    <td>{{ $item->start_address }}</td>
                </tr>

                <tr>
                    <td>Окончание поездки</td>
                    <td>{{ $item->time_to }}</td>
                </tr>

                <tr>
                    <td>Конечный адрес поездки</td>
                    <td>{{ $item->end_address }}</td>
                </tr>

                <tr>
                    <td>Количество участников</td>
                    <td>Добавить текущих / {{ $item->participants_count }}</td>
                </tr>


                <tr>
                    <td>Маршрут</td>
                    <td>
                        <div id="container">
                            <p>Total Distance: <span>{{ $item->total_distance }} km</span></p>
                            <div id="route_map_{{ $item->id }}" class="show_maps"></div>
                        </div>
                        <button id="show_map_{{ $item->id }}">Show map</button>
                    </td>
                </tr>
                
                <tr>
                    <td>Описание поездки</td>
                    <td>{{ $item->trip_description }}</td>
                </tr>

                <tr>
                    <td>Участники поездки</td>
                    <td></td>
                </tr>

                <form action="" method="post">
                <tr>
                    <td></td>
                    <td><input type="submit" value="Записаться на поездку"></td>
                </tr>
                </form>
                

            </tbody>
        </table>

        <script>
            let show_map_{!! $item->id !!} = document.getElementById("show_map_{!! $item->id !!}");

            show_map_{!! $item->id !!}.addEventListener("click", function show(){initMap({!! $item->id !!}, {!! $item->track !!}); this.removeEventListener("click", show)});

            show_map_{!! $item->id !!}.addEventListener("click", () => showCloseMap({!! $item->id !!}));

            let route_map_{!! $item->id !!} = document.getElementById("route_map_{!! $item->id !!}");


        </script>

        @endforeach
        </div>
    </main>
</div>

@endsection


<script>

function showCloseMap(itemId) {
            document.getElementById("route_map_" + itemId).classList.toggle("showCloseMap");
            if(document.getElementById("show_map_" + itemId).innerText == "Show map") {
                document.getElementById("show_map_" + itemId).innerText = "Close map"
            } else {
                document.getElementById("show_map_" + itemId).innerText = "Show map"
            }
            }

function initMap(itemId, json) {
   
  const directionsService = new google.maps.DirectionsService();
  const directionsRenderer = new google.maps.DirectionsRenderer();
  const map = new google.maps.Map(document.getElementById("route_map_" + itemId), {
    zoom: 8,
    center: { 
        lat: 52.2420385,
        lng: 21.0288443     //Polland
    },
  });

//   console.log(map);

  directionsRenderer.setMap(map);
  
    calculateAndDisplayRoute(directionsService, directionsRenderer, json);
    document.getElementById("show_map_" + itemId).removeEventListener("click", initMap);
    
}

function calculateAndDisplayRoute(directionsService, directionsRenderer, json) {
  const waypts = [];

  for (let i = 0; i < json.request.waypoints.length; i++) {
    
      waypts.push({
        location: json.request.waypoints[i].location,
        stopover: true,
      });
    
  }

  directionsService
    .route({
      origin: json.routes[0].legs[0].start_address,
      destination: json.routes[0].legs[0].end_address,
      waypoints: waypts,
      optimizeWaypoints: true,
      travelMode: google.maps.TravelMode.BICYCLING,
    })
    .then((response) => {
      directionsRenderer.setDirections(response);
    })
    .catch((e) => window.alert("Directions request failed due to " + status));
}

window.initMap = initMap;


</script>
