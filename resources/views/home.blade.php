<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Snow</title>
	<!--<link rel="stylesheet" href="{{ asset('/css/reset.css') }}" />-->
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}" />
    
</head>
<x-app-layout>
<body>
    
    	<!-- メインビジュアル -->
	<div class="main-visual">
		<div class="main">
			<h1>snow site</h1>
		</div>
	</div>
	
	
	<!-- Map -->
	<section class="map" id="map">
		<h2>Map</h2>
		<div class="image-box">
			<img src="{{ asset('/img/map.jpg') }}">
		</div>
	</section>

		
	<!-- Areas -->
	<section id="areas">
		<h2 class="areas-header">Areas</h2>
		<div class="rec">おすすめゲレンデ</div>
		<div class="area-list">
          <div class="area-item">
              <h3><a href="/areas/1" id="area-text">①エイブル白馬五竜スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/2" id="area-text">②竜王スキーパーク</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/3" id="area-text">③栂池高原スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/4" id="area-text">④野沢温泉スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/5" id="area-text">⑤苗場スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/6" id="area-text">⑥舞子スノーリゾート</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/7" id="area-text">⑦ハンターマウンテン塩原</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/8" id="area-text">⑧川場スキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/9" id="area-text">⑨エーデルワイススキー場</a></h3>
              <p>-------------------------------------------------</p>
          </div>
          
          <div class="area-item">
              <h3><a href="/areas/10" id="area-text">⑩ホワイトワールド尾瀬岩鞍</a></h3>
              <p>-------------------------------------------------</p>
          </div>
      </div>
	</section>	
    
    <section id="contact">
		<h2 class="contact">Contact</h2>
		<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSehKlfSCBQUU1QwXcxZm4Guu-H8VD2Ei7ozmehyBY1NXa1DqQ/viewform?embedded=true" width="100%" height="716" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
	</section>
        
    <!-- フッター -->
    <footer>
        <p>&copy; 2023 snow site</p>
    </footer>
</body>
</x-app-layout>
</html>
