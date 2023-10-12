<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Snow</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/app.css') }}"  rel="stylesheet">
       
    </head>
    
    <x-app-layout>
        <x-slot name="header">
            　Reviews
        </x-slot>
         <body>
            @foreach ($reviews as $review)
                    <div class='review'>
                        <h1 class='area_name'>
                            {{$review->area->name}}
                        </h1>
                        <div>
                            <p class='evaluation-1'>雪質{{ $review->snow}}</p>
                            <p class='evaluation-2'>初心者おすすめ度{{ $review->biginner}}</p>
                            <p class='evaluation-3'>総合評価{{ $review->all }}</p>
                            <p class='evaluation-4'>コメント:{{ $review->comment }}</p>
                        </div>
                    </div>
                @endforeach
            
            
            
           
            
        </body>
    </x-app-layout>
   
</html>