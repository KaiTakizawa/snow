<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Snow</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('/css/review.css') }}"  rel="stylesheet">
       
    </head>
    
    <x-app-layout>
        <div class="all">
            <div class="header-title">Reviews</div>
            <body>
                <div class="reviews-container">
                    @foreach ($reviews as $review)
                            <div class='review'>
                                <h1 class='area_name'>{{$review->area->name}}</h1>
                                <div>
                                    @php
                                        $ratings = [
                                            '雪質' => $review->snow,
                                            '初心者おすすめ度' => $review->biginner,
                                            '総合評価' => $review->all,
                                        ];
                                    @endphp
                        
                                    @foreach ($ratings as $label => $rating)
                                        <p class='evaluation'>
                                            {{ $label }}{{ $rating }}
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $rating)
                                                    ⭐️
                                                @endif
                                            @endfor
                                        </p>
                                    @endforeach
            
                                     <p class='evaluation'>コメント:{{ $review->comment }}</p>
                                     <p class='name'>User:{{ $review->user->name}}</p>
                                </div>
                            </div>
                    @endforeach
                </div>
            </body>
        </div>
    </x-app-layout>
   
</html>