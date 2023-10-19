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
        <x-slot name="header">
            　Area
        </x-slot>
        <body>
                <div class='area-detail'>
                    <h1 class='name'>
                        {{$area->name}}
                    </h1>
                   <div class="area-info">
                        <div class="area-image">
                            <img src="{{ $area->snowmap_url }}" alt="画像が読み込めません." />
                        </div>
                        <div class="area-text">
                            <p class='detail'>{{ $area->detail }}</p>
                            <p class='address'>{{ $area->address }}</p>
                            <p class='access'>{{ $area->access }}</p>
                        </div>
                    </div>
                </div>
                
                <div class="images">
                    @foreach($images as $image)
                    <div class="image">
                        <img src="{{ $image->img_url }}" alt="画像が読み込めません。"/>
                    </div>
                    @endforeach
                </div>
                
                
                
                <br></br>
                <br></br>
                
                
                <!--レビュー機能-->
                <div class="reviews">
                    <label class="review">{{$area->name}}</label>
                </div>
                
                <form action="/reviews/{{$area->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="snow-ev ">
                    <label class="snow-ev pl-5">雪質</label>
                    <div class="ratebutton text-center">
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="1">
                            <label for="1">1</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="2">
                            <label for="2">2</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="3" checked>
                            <label for="3">3</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="4">
                            <label for="4">4</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[snow]" value="5">
                            <label for="5">5</label>
                        </div>
                    </div>
                </div>
                
                <div class="biginner-ev ">
                    <label class="snow-ev pl-5">初級者おすすめ度</label>
                    <div class="ratebutton text-center">
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="1">
                            <label for="1">1</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="2">
                            <label for="2">2</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="3" checked>
                            <label for="3">3</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="4">
                            <label for="4">4</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[biginner]" value="5">
                            <label for="5">5</label>
                        </div>
                    </div>
                </div>
    
    
    
                <div class="all-ev ">
                    <label class="snow-ev pl-5">総合評価</label>
                    <div class="ratebutton text-center">
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="1">
                            <label for="1">1</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="2">
                            <label for="2">2</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="3" checked>
                            <label for="3">3</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="4">
                            <label for="4">4</label>
                        </div>
                        <div class="md-radio md-radio-inline d-inline">
                            <input type="radio" name="review[all]" value="5">
                            <label for="5">5</label>
                        </div>
                    </div>
                </div>
                
                <div class="form-group">
                    <label></label>
                    <textarea name="review[comment]" required class="form-control wf-mplus1p" rows="4" placeholder="コメント">{{ old('body') }}</textarea>
                </div>
                
                
                <input class="post" type="submit" value="投稿する"/>
                </form>
                
                
                
                
                
               
	            
	           
	            
	            
	             
	
                
                <div class="footer">
                    <a href="/">戻る</a>
                </div>
            </div>
        </body>
    </x-app-layout>
   
</html>