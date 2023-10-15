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
            <h1>Area Name</h1>
            <form action="/areas" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="name">
                    <h2>name</h2>
                    <input type="text" name="area[name]" placeholder="スキー場名"/>
                </div>
                <div class="detail">
                    <h2>detail</h2>
                    <textarea name="area[detail]" placeholder="詳細"></textarea>
                </div>
                <div class="address">
                    <h2>address</h2>
                    <input type="text" name="area[address]" placeholder="住所"></textarea>
                </div>
                <div class="address">
                    <h2>access</h2>
                    <input type="text" name="area[access]" placeholder="アクセス"></textarea>
                </div>
                ゲレンデマップ
                <div class="area_map">
                    <input type="file" name="image"/>
                </div>
                スキー場写真
                <div class="images">
                    <input type="file" name="images[]" multiple/>
                </div>
                
                <input type="submit" value="保存"/>
            </form>
            <div class="footer">
                <a href="/">戻る</a>    
            </div>
        </body>
    </x-app-layout>
   
</html>