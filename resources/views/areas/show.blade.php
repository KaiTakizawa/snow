<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Snow</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/show.css') }}"  rel="stylesheet">
       
        
        
        
        
        
        
       
    </head>
    
    <x-app-layout>
        <div class="all">
        <div name="header" class="header">
            　Area
        </div>
        
        
        <body class="body">
            <div class="subheader">GERANDE MAP</div>
                <div class='area-detail'>
                    <h2 class='name'>
                        {{$area->name}}
                    </h1>
                   <div class="area-info">
                        <div class="area-image">
                            <img src="{{ $area->snowmap_url }}" alt="画像が読み込めません." class="gerende-map"/>
                        </div>
                        <div class="area-text">
                            <p class='detail'>特徴：{{ $area->detail }}</p>
                            <p class='address'>住所：{{ $area->address }}</p>
                            <p class='access'>アクセス：{{ $area->access }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="subheader">AREA PHOTOGRAPH</div>
                <div class="images">
                    @foreach($images as $image)
                    <div class="image">
                        <img src="{{ $image->img_url }}" alt="画像が読み込めません。" class="pictures" />
                    </div>
                    @endforeach
                </div>
                
                
                <!--レビュー機能-->
                <div class="subheader">REVIEW</div>
                <!--<div class="background">-->
                <div class="reviews">
                    <label class="review">{{$area->name}}</label>
                
                
                <form action="/reviews/{{$area->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="snow-ev">
                    <label class="snow-ev5">雪質</label>
                    <div class="ratebutton text-center">
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="1" id="star1">
                            <label for="star1">☆1</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="2" id="star2">
                            <label for="star2">☆2</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="3" id="star3" checked>
                            <label for="star3">☆3</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="4" id="star4">
                            <label for="star4">☆4</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="5" id="star5">
                            <label for="star5">☆5</label>
                        </div>
                    </div>
                </div>



                
                <div class="biginner-ev ">
                    <label class="snow-ev5">初級者おすすめ度</label>
                    <div class="ratebutton text-center">
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="1">
                            <label for="1">☆1</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="2">
                            <label for="2">☆2</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="3" checked>
                            <label for="3">☆3</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="4">
                            <label for="4">☆4</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="5">
                            <label for="5">☆5</label>
                        </div>
                    </div>
                </div>
    
    
    
                <div class="all-ev ">
                    <label class="snow-ev5">総合評価</label>
                    <div class="ratebutton text-center">
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="1">
                            <label for="1">☆1</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="2">
                            <label for="2">☆2</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="3" checked>
                            <label for="3">☆3</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="4">
                            <label for="4">☆4</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="5">
                            <label for="5">☆5</label>
                        </div>
                    <!--</div>-->
                </div>
                
                <div class="form-group">
                    <label></label>
                    <textarea name="review[comment]" required class="form-control wf-mplus1p" rows="4" placeholder="コメントを追加">{{ old('body') }}</textarea>
                </div>
                
                
                <input class="post" type="submit" value="投稿する"/>
                </form>
                </div>
                </div>
                
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    // クリック時にラジオボタンを選択
                    $('.ratebutton label').click(function() {
                        $(this).prev('input[type="radio"]').prop('checked', true);
                    });
                </script>
                
                <!--Googleマップ表示-->
                <div class="subheader">ADDRESS</div>
                <div class='maparea'>
                    <div id="map" style="height:300px" ></div>
                    <div class="map-text">
                         <!--<p class='map-name'> {{$area->name}}</p>-->
                         <p class='map-address'>{{$area->address}}</p>
                    </div>
                   
	            </div>
	            <script>
                    function initMap() {
                        var location = @json($location);
                        
                        // 地図の表示
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: { lat: parseFloat(location.latitude), lng: parseFloat(location.longitude) },
                            zoom: 14
                        });
            
                        // マーカーの設定
                        var marker = new google.maps.Marker({
                            position: { lat: parseFloat(location.latitude), lng: parseFloat(location.longitude) },
                            map: map,
                            title: "{{ $area->name }}"
                        });
                    }
            
                </script>
	            <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyBjFIm-BsHXILUbVz488xz6N6HYjy3gsH4&callback=initMap" async defer></script>
                
         <div class="footer"><a href="/">戻る</a></div>
            
        </body>
        </div>
    </x-app-layout>
   
</html>