function initMap() {
    var location = @json($location); // PHP変数をJavaScriptに変換

    var map = new google.maps.Map(document.getElementById('map'), {
        center: { lat: parseFloat(location.latitude), lng: parseFloat(location.longitude) }, // スキー場の緯度と経度
        zoom: 14 // ズームレベルを設定
    });

    var marker = new google.maps.Marker({
        position: { lat: parseFloat(location.latitude), lng: parseFloat(location.longitude) },
        map: map,
        title: location.ski_resort_name
    });
}
