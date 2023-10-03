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
            　Area
        </x-slot>
        <body>
                <div class='area-detail'>
                    <h1 class='name'>
                        {{$area->name}}
                    </h1>
                    
                    <div>
                        <p class='detail'>{{ $area->detail }}</p>
                        <p class='address'>{{ $area->address }}</p>
                        <p class='access'>{{ $area->access }}</p>
                    </div>
                </div>
                
                <div class="footer">
                    <a href="/">戻る</a>
                </div>
            </div>
        </body>
    </x-app-layout>
   
</html>