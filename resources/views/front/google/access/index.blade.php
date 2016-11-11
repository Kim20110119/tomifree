<!DOCTYPE html>
<html>
    <head>
        <title>得割ドック医療施設Googleマップ</title>
        <script type="text/javascript" src="{{url('js/jquery/dist','jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{url('js/gmaps','gmaps.min.js')}}"></script>
        <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true&key=AIzaSyBcoSSUmp7DEJBWbWRyQ-Kcz359pou_5QE"></script>
        <script type="text/javascript" charset="utf-8">
// コントローラから渡された住所を取得
var addressStr = "{!! $map_address !!}";

$(document).ready(function () {
    // Gmapsを利用してマップを生成
    var map = new GMaps({
        div: '#map',
        lat: -12.043333,
        lng: -77.028333
    });

    // 住所からマップを表示
    GMaps.geocode({
        address: addressStr.trim(),
        callback: function (results, status) {
            if (status == 'OK') {
                var latlng = results[0].geometry.location;
                map.setCenter(latlng.lat(), latlng.lng());
                map.addMarker({
                    lat: latlng.lat(),
                    lng: latlng.lng()
                });
            }
        }
    });
});
        </script>
        <style>
            @charset "utf-8";
            #map {
                height: 260px;
            }
        </style>
    </head>
    <body>
        <div id="map"></div>
    </body>
</html>