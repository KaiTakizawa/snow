<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Snow</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/area.css') }}"  rel="stylesheet">
       
    </head>
    
    <x-app-layout>
       <x-slot name="header">
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
        </x-slot>

        <body>
           

            <div class='areas'>
                @foreach ($areas as $area)
                    <div class='area'>
                        <h1 class='name'>
                            <a href="/areas/{{$area->id}}">{{ $area->name }}</a>
                        </h1>
                        <div class="wrapper">
                            <div class="grid-item">
                                <img src="{{ $area->getFirstImages()->img_url }}" alt="画像が読み込めません。"/>
                                <div>
                                <p class='detail'>{{ $area->detail }}</p>
                                <p class='address'>{{ $area->address }}</p>
                                <p class='access'>{{ $area->access }}</p>
                                </div>
                            </div>    
                        </div>
                        
                        <form action="/areas/{{ $area->id }}" id="form_{{ $area->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deleteArea({{ $area->id }})">delete</button> 
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
    </x-app-layout>
   
</html>