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
            　Areas
        </x-slot>
        
        <body>
        <div class="areas">
            @foreach ($results as $area)
                <div class="area">
                    <h1 class="name">
                        <a href="/areas/{{$area->id}}">{{ $area->name }}</a>
                    </h1>
                    <div class="wrapper">
                        <div class="grid-item">
                            <img src="{{ $area->getFirstImages()->img_url }}" alt="画像が読み込めません." />
                            <div>
                                <p class="detail">{{ $area->detail }}</p>
                                <p class="address">{{ $area->address }}</p>
                                <p class="access">{{ $area->access }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            
            <a href="/">戻る</a> 
        </div>

                
        </body>
    </x-app-layout>
   
</html>