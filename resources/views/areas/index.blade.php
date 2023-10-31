<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Snow</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/area.css') }}"  rel="stylesheet">
        
       
    </head>
    
    <x-app-layout>
      <div class="all">
          <div class="header-content">
                <div class="header-title">Areas</div>
                <form action="/areas/search" method="POST">
                    @csrf
                    <div class="search-container">
                        <input type="text" name="keyword" class="search-input">
                        <input type="submit" value="検索" class="search-button">
                    </div>
                </form>
            </div>
        

        <body>
              <div class='areas'>
                @foreach ($areas as $area)
                    <div class='area-box'>
                        <h1 class='name'>
                            <a href="/areas/{{$area->id}}">{{ $area->name }}</a>
                        </h1>
                        <div class="wrapper">
                            <img src="{{ $area->getFirstImages()->img_url }}" alt="画像が読み込めません." class="area-image" />
                            <div class="area-text">
                                <p class='detail'>{{ $area->detail }}</p>
                                <p class='address'>{{ $area->address }}</p>
                                <p class='access'>{{ $area->access }}</p>
                            </div>
                        </div>
            
                        <!--ハートアイコン-->
                        <div class="like-button">
                            <!-- Post.phpに作ったisLikedByメソッドをここで使用 -->
                            @if (!$area->isLikedBy(Auth::user()))
                                <i class="fas fa-heart like-toggle" data-area-id="{{ $area->id }}"></i>
                            @else
                                <i class="fas fa-heart heart like-toggle liked" data-area-id="{{ $area->id }}"></i>
                            @endif
                            <span class="like-counter">{{$area->likes_count}}</span>
                        </div>
            
                        <!--削除機能-->
                        <form action="/areas/{{ $area->id }}" id="form_{{ $area->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <!--<button type="button" onclick="deleteArea({{ $area->id }})">delete</button> -->
                        </form>
                    </div>
                @endforeach
            </div>


            
            <a href='/areas/create'>create</a>
            
            <script>
                function deleteArea(id) {
                    'use strict'
            
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
            
           
            
        </body>
          
      </div>
           
    </x-app-layout>
   
</html>