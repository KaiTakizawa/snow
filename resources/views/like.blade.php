<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Snow</title>
        <link href="{{ asset('/css/area.css') }}"  rel="stylesheet">
        
    </head>
    <x-app-layout>
        <div class="all">
           <div class="header-title2">Likes</div>
        
            <body>
                <div class='areas'>
                        @foreach ($likes as $like)
                            <div class='area-box'>
                                <h1 class='name'>
                                    {{ $like->area->name }}
                                </h1>
                                <div class="wrapper">
                                        <img src="{{ $like->area->getFirstImages()->img_url }}" alt="画像が読み込めません。" class="area-image"/>
                                        <div class="area-text">
                                            <p class='detail'>{{ $like->area->detail }}</p>
                                            <p class='address'>{{ $like->area->address }}</p>
                                            <p class='access'>{{ $like->area->access }}</p>
                                        </div>
                                </div>    
                            </div>
                        @endforeach 
                </div>
            </body>
        </div>
    </x-app-layout>   
</html>