@extends('template.main')

@section('title', 'Example')

@section('content')
    <div class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Parques</h4>
                    </div>
                    <div class="card-body">
                        <div id="map" style="height: 75vh;width: 100%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        function initMap() {
            var myLatLng = {lat: 4.6482837, lng: -74.2478917};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 12,
                center: myLatLng,
                styles: [{"featureType":"all","stylers":[{"saturation":0},{"hue":"#e7ecf0"}]},{"featureType":"road","stylers":[{"saturation":-70}]},{"featureType":"transit","stylers":[{"visibility":"off"}]},{"featureType":"poi","stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"simplified"},{"saturation":-60}]}]

            });

            var locations = [
                    @foreach($locations as $location)
                ['{{ $location->name }}', {{ $location->latitude }}, {{ $location->longitude }}, {{ $location->id }}, '{{ $location->type }}'],
                @endforeach
            ];

            var infowindow = new google.maps.InfoWindow();

            var marker, i;

            var markers = [];


            for (i = 0; i < locations.length; i++) {
                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                    map: map,
                    icon: '{{ asset('img/marker.png') }}'
                });

                google.maps.event.addListener(marker, 'click', (function(marker, i) {
                    return function() {
                        infowindow.setContent('<div id="card">'+
                            '<div id="card-header">' +
                            '<h4 class="card-title">' + locations[i][0] + '</h4>'+
                            '</div>'+
                            '<div id="card-body">' +
                            'Tipo : '+ locations[i][4] +
                            '</div>' +
                            '<div class="card-footer">' +
                            '<a href="{{ url('/location/') }}/'+ locations[i][3] + '" class="btn btn-success pull-right">Ingresar</a>' +
                            '</div>'+
                            '</div>');
                        infowindow.open(map, marker);
                    }
                })(marker, i));

                markers.push(marker);
            }

            // Add a marker clusterer to manage the markers.
            var markerCluster = new MarkerClusterer(map, markers, {
                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
            });
        }
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAWHLWRO1Eg2pj9YJcZLFxhWg_0fYI9SiM&callback=initMap">
    </script>

@endsection
